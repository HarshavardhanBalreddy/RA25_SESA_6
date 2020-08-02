Arduino program to fetch the location data from the ublox gps module and send it from on lora node to other, with specifed address. Added interrupt button, to send the message 
when the button is clicked, the button click toggles between sending and receiving mode. Added errorchecking by comparing the legth, all the dependencies used are opensource.

#include <TinyGPS++.h>        // include TinyGPS++ library
#include <TimeLib.h>          // include Arduino time library
#include <SoftwareSerial.h>   // include software serial library
#include <LoRa.h>			  //include LoRa library

TinyGPSPlus gps;

// Choose two Arduino pins to use for software serial
int RXPin = 5;
int TXPin = 4;

int GPSBaud = 9600;

// Create a software serial port called "gpsSerial"
SoftwareSerial gpsSerial(RXPin, TXPin);

#define time_offset   19780  // define a clock offset of 3600 seconds (1 hour) ==> UTC + 1 //modified to inidan time

// variable definitions
String loc;
char Time[]  = "00:00:00";
char Date[]  = "2000-00-00";
byte last_second, Second, Minute, Hour, Day, Month;
int Year;

//initialising pins for LoRa
const int csPin = 10;          // LoRa radio chip select
const int resetPin = 9;       // LoRa radio reset
const int irqPin = 2;         // change for your board; must be a hardware interrupt pin
const int buttonPin = 3; 
const int redLED = A0;
const int greenLED = A1;
const int blueLED = A2;
volatile int bflag;

//constant character array to be sent using lora
int gps_flag = 1;

String outgoing;              // outgoing message

byte msgCount = 0;            // count of outgoing messages
byte localAddress = 0xBB;     // address of this device
byte destination = 0xFF;      // destination to send to
long lastSendTime = 0;        // last send time
int interval = 2000;          // interval between sends

void setup(void)
{
	Serial.begin(9600);  // initialize software serial at 9600 baud
	// Start the software serial port at the GPS's default baud
	gpsSerial.begin(GPSBaud);
	pinMode(buttonPin,INPUT_PULLUP);
	/*creatning an hardware interrupt to invoke the lora to send the message*/
	attachInterrupt(digitalPinToInterrupt(buttonPin), buttonpressed, FALLING);
	gpsSerial.begin(GPSBaud);
	pinMode(redLED, OUTPUT);
	pinMode(greenLED, OUTPUT);
	pinMode(blueLED, OUTPUT);

	if (!Serial){
		Serial.println("Serial monitor can't be initialised");
		while(!Serial);
	}

	Serial.println("LoRa Duplex");

	// override the default CS, reset, and IRQ pins (optional)
	LoRa.setPins(csPin, resetPin, irqPin);// set CS, reset, IRQ pin

	if (!LoRa.begin(434E6)) {             // initialize ratio at 915 MHz
		Serial.println("LoRa init failed. Check your connections.");
		while (true) {
			digitalWrite(redLED, HIGH);
			delay(2000);
			digitalWrite(redLED, LOW);
		}                      // if failed, do nothing
	}

	Serial.println("LoRa init succeeded.");
}

void loop()
{
	/*waits until the gps location is fetched*/
	while(gps_flag){
		displayInfo();
		if(gps.location.isValid() && gps.date.isValid() && gps.time.isValid()){
			int count = 10;
			while(count){
				displayInfo();
				count--;
			}
			gps_flag = 0;
			break;
		}
	}
	/*if the bflag = 1 it executes this chunk of code, sending message*/
	if(bflag) {
		Serial.println(bflag);
		Serial.println("inside b flag");
		Serial.print("GPS State:");
		Serial.println(displayInfo());
		if(displayInfo() == 6) {
			if (millis() - lastSendTime > interval) {
				String message = String("D202011 2 HP "+loc+" 0 0 "+String(Date)+" "+String(Time)+" 0 1"); 
				//send the message in specified format refer api document for more
				Serial.print(" This is final message");
				Serial.println(message);
				sendMessage(message);
				Serial.println("Sending " + message);
				lastSendTime = millis();            // timestamp the message
				interval = random(2000) + 1000;    // 2-3 seconds
				// parse for a packet, and call onReceive with the result:
				onReceive(LoRa.parsePacket());
			}
			digitalWrite(greenLED,HIGH);
		} 
	}
	// parse for a packet, and call onReceive with the result:
	else if(!bflag){
		onReceive(LoRa.parsePacket());
	}
	//continous receiving mode until the button is pressed
}

/*function to send the message and appending the meta data*/
void sendMessage(String outgoing) {
	LoRa.beginPacket();                   // start packet
	LoRa.write(destination);              // add destination address
	LoRa.write(localAddress);             // add sender address
	LoRa.write(msgCount);                 // add message ID
	LoRa.write(outgoing.length());        // add payload length
	LoRa.print(outgoing);                 // add payload
	LoRa.endPacket();                     // finish packet and send it
	msgCount++;                           // increment message ID
}

/*on reception of the message validate and error check then print the message*/
void onReceive(int packetSize) {
	if (packetSize == 0) return;          // if there's no packet, return

	// read packet header bytes:
	int recipient = LoRa.read();          // recipient address
	byte sender = LoRa.read();            // sender address
	byte incomingMsgId = LoRa.read();     // incoming msg ID
	byte incomingLength = LoRa.read();    // incoming msg length

	String incoming = "";

	/*if the data is available in the buffer read the data byte by byte*/
	while (LoRa.available()) {
		incoming += (char)LoRa.read();
	}

	if (incomingLength != incoming.length()) {   // check length for error
		Serial.println("error: message length does not match length");
		return;                             // skip rest of function
	}

	// if the recipient isn't this device or broadcast,
	if (recipient != localAddress && recipient != 0xFF) {
		Serial.println("This message is not for me.");
		return;                             // skip rest of function
	}

	// if message is for this device, or broadcast, print details:
	Serial.println("Received from: 0x" + String(sender, HEX));
	Serial.println("Sent to: 0x" + String(recipient, HEX));
	Serial.println("Message ID: " + String(incomingMsgId));
	Serial.println("Message length: " + String(incomingLength));
	Serial.println("Message: " + incoming);
	Serial.println("RSSI: " + String(LoRa.packetRssi()));
	Serial.println("Snr: " + String(LoRa.packetSnr()));
	Serial.println();
}

/*To check the gps status and print out the data*/
int displayInfo() {
	int valid_flag = 0;
	while (gpsSerial.available() > 0)
	{
		if (gps.encode(gpsSerial.read()))
		{
			const short int gps_interval = 1000;
			unsigned long int p_time = 0;
			if (gps.location.isValid())
			{
				Serial.print(gps.location.lat(), 6);
				Serial.print(",");
				Serial.print(gps.location.lng(), 6);
				loc = (String(gps.location.lat(), 6)+","+String(gps.location.lng(), 6));
				valid_flag++;
			}
			else
			{
				Serial.println("Location: Not Available");
				if(millis() - p_time >= gps_interval) {
					Serial.println("I'm  executing inside if");
					digitalWrite(blueLED,HIGH);
					delay(250);
					digitalWrite(blueLED,LOW);
				}
			}
			// get time from GPS module
			if (gps.time.isValid())
			{
				Minute = gps.time.minute();
				Second = gps.time.second();
				Hour   = gps.time.hour();
				valid_flag++;
			}
			else
			{
				Serial.println("Time: Not Avaialable");
				if(millis() - p_time >= gps_interval) {
					Serial.println("I'm  executing inside esle if");
					digitalWrite(redLED,HIGH);
					delay(250);
					digitalWrite(redLED,LOW);
				}
			}

			// get date from GPS module
			if (gps.date.isValid())
			{
				Day   = gps.date.day();
				Month = gps.date.month();
				Year  = gps.date.year();
				valid_flag++;
			}
			else
			{
				Serial.println("Date: Not Avaialable");
				if(millis() - p_time >= gps_interval) {
					Serial.println("I'm  executing inside esle if");
					digitalWrite(redLED,HIGH);
					delay(250);
					digitalWrite(redLED,LOW);
				}
			}

			if(last_second != gps.time.second())  // if time has changed
			{
				last_second = gps.time.second();

				// set current UTC time
				setTime(Hour, Minute, Second, Day, Month, Year);
				// add the offset to get local time
				adjustTime(time_offset);

				// update time array
				Time[6] = second() / 10 + '0';
				Time[7] = second() % 10 + '0';
				Time[3]  = minute() / 10 + '0';
				Time[4] = minute() % 10 + '0';
				Time[0]  = hour()   / 10 + '0';
				Time[1]  = hour()   % 10 + '0';

				// update date array
				Date[2] = (year()  / 10) % 10 + '0';
				Date[3] =  year()  % 10 + '0';
				Date[5]  =  month() / 10 + '0';
				Date[6] =  month() % 10 + '0';
				Date[8]  =  day()   / 10 + '0';
				Date[9]  =  day()   % 10 + '0';
			}
      Serial.println();
			Serial.println(Time);
			Serial.println(Date);

		}
   Serial.println(valid_flag);
   return valid_flag;
	}
	// If 5000 milliseconds pass and there are no characters coming in
	// over the software serial port, show a "No GPS detected" error
	if (millis() > 15000 && gps.charsProcessed() < 10)
	{
		Serial.println("No GPS detected");
		while(true){
			//if gps doesn't start the led blinks in red colour for every 4 seconds
			digitalWrite(redLED,HIGH);
			delay(4000);
			digitalWrite(redLED,LOW);
		}
	}
	return 0;
}

/*interrupt method to toggle between receiving and sending when the button is pressed*/
void buttonpressed(void) {
	//to toggle when a button is pressed
	if(bflag) {
		bflag = 0;
	}
	else if(!bflag){
		bflag = 1;
	}
}
