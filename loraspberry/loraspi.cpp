//This is the program to keep the lora in always reception mode until or unless the message is recevied, once the message is received it uploads the message in to the webpage or the server by making a 
//hhtp request using "cURL". Once the message is uploaded it sends the acknowledgement to the sender. This program also ignores the message and only receives if the message different.


//importing the libraries
//Note: all the libraries used are either open source or inbuilt

#include "LoRa.h"
#include "WString.h"
#include <stdio.h>
#include <time.h>
#include <string.h>

//initialising pins for lora
const int csPin = 8;          // LoRa radio chip select
const int resetPin = 22;       // LoRa radio reset
const int irqPin = 4;         // change for your board; must be a hardware interrupt pin

String outgoing;              // outgoing message

uint8_t msgCount = 0;            // count of outgoing messages
uint8_t localAddress = 0xFF;     // address of this device
uint8_t destination = 0xBB;      // destination to send to
long lastSendTime = 0;        // last send time
unsigned int interval = 2000;          // interval between sends


//global declaration of the final command
char final_string[200];
String prev_incoming = " ";
String curr_incoming = " ";

//function to send the message
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

//function to recieve the message if there's data in the buffer
void onReceive(int packetSize) {
	if (packetSize == 0) return;          // if there's no packet, return

	// read packet header bytes:
	int recipient = LoRa.read();          // recipient address
	uint8_t sender = LoRa.read();            // sender address
	uint8_t incomingMsgId = LoRa.read();     // incoming msg ID
	uint8_t incomingLength = LoRa.read();    // incoming msg length

	String incoming = "";

	while (LoRa.available()) {
		incoming += (char)LoRa.read();
	}

	if (incomingLength != incoming.length()) {   // check length for error
		printf("error: message length does not match length\n");
		return;                             // skip rest of function
	}

	// if the recipient isn't this device or broadcast,
	if (recipient != localAddress && recipient != 0xFF) {
		printf("This message is not for me.\n");
		return;                             // skip rest of function
	}

	// if message is for this device, or broadcast, print details:
	cout << "Received from: 0x" <<  String(sender, HEX) << endl;
	cout << "Sent to: 0x" << String(recipient, HEX) << endl;
	cout << "Message ID: " << String(incomingMsgId) << endl;
	cout << "Message length: " << String(incomingLength) <<endl;
	cout << "Message: " << incoming << endl;
	cout << "RSSI: " <<  String(LoRa.packetRssi()) << endl;
	cout << "Snr: " << String(LoRa.packetSnr())<< endl;
	cout <<"meesage incoming: " << incoming << endl;
	if(curr_incoming == " "){
		curr_incoming = incoming;
		String message = "Data recieved succesfully my data is as follows";   // send a message
		sendMessage(message);
		cout << "Sending " << message << endl;
		String final_Command=String("curl -o test.txt \"http://sesa6care.000webhostapp.com/sesa6care/api/?msmessage="+curr_incoming+"\"");
		cout << "Final http resquest ready to be requested: " << final_Command << endl;
		//converting string to character array
		final_Command.toCharArray(final_string,final_Command.length()+1);
		cout << final_string << endl;
		system(final_string);
		//storing the response in a file and printing out the status
		FILE *file = fopen("test.txt","r");
		if(file == NULL){
			printf("\nFailed to open the file");
			exit(1);
		}
		char ver[100];
		//reading only characters from the file to print out the message from the server
		system("grep \"[A-Za-z]\" test.txt > final.txt");
		FILE *fin_file = fopen("final.txt","r");
		fscanf(fin_file, "%[^\n]", ver);
		printf("\nstatus");
		printf("\n%s\n",ver);
		fclose(file);
		fclose(fin_file);
	}
	else{
		//igonoring the message that is already received
		prev_incoming = curr_incoming;
		curr_incoming = incoming;
		if (curr_incoming == prev_incoming){
			cout << "This emergency request is already recieved and inserted in the record" << endl;
		}
	}
}


void setup() {
	printf("LoRa Duplex\n");
	// override the default CS, reset, and IRQ pins (optional)
	LoRa.setPins(csPin, resetPin, irqPin);   // set CS, reset, IRQ pin

	if (!LoRa.begin(434E6, 0)) {
		printf("Starting LoRa failed!\n");
		while (1);
	}
	printf("LoRa init succeeded.\n");

	/* seed the randaom */
	srand (time(NULL));
}

void loop() {
	//continuously receive and upload the data to the server, and send back the acknowledgement to the sender
	onReceive(LoRa.parsePacket());
}

//main function calling setup function to setup the pins and other dependencies, then the loop function is called which executes until it is manually stopped in order to make the device work all
//the time
int  main(void) {
	setup();
	while(1) loop();
}
