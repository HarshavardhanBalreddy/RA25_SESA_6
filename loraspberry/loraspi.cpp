#include "LoRa.h"
#include "WString.h"
#include <stdio.h>
#include <time.h>
#include <string.h>

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
		//lastSendTime = millis();            // timestamp the message
		//interval = (rand() % 2000) + 1000;    // 1-3 seconds
		//yet to add verificartion of insert record from curl
		//calling a system function to invoke curl and make a http request to update data in the server
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
		system("grep \"[A-Za-z]\" test.txt > final.txt");
		FILE *fin_file = fopen("final.txt","r");
		fscanf(fin_file, "%[^\n]", ver);
		printf("\nstatus");
		printf("\n%s\n",ver);
		fclose(file);
		fclose(fin_file);
	}
	else{
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
	// parse for a packet, and call onReceive with the result:
	onReceive(LoRa.parsePacket());
	//storing the response in a file and printing out the status
	/*FILE *file = fopen("test.txt","r");*/
	//if(file == NULL){
	//printf("\nFailed to open the file");
	//exit(1);
	//}
	//char ver[15];
	//fscanf(file, "%[^\n]", ver);
	//printf("Status:\n%s", ver);
	/*fclose(file);*/
}
int  main(void) {
	setup();
	while(1) loop();
}

