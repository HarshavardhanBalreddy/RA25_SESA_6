``` All the libraries used are either opensource or built in, this guide how to install dependencies and run the program ```

# LoRa4Raspi: LoRa for Raspberry Pi

This library is a porting of the LoRa Arduino library developped by Sandeep Mistry to Raspberry Pi
you will find all information about this arduino libray here: https://github.com/sandeepmistry/arduino-LoRa

I developped this library to insure compliance of my LoRa nodes and my Raspberry Pi. So I can used either Rapsberry pi or Arduino as Node or Gateway.

This Arduino is also very easy use and I would like to have the same approach on Raspberry Pi. 

Since this libray as the same API, it is very easy to port your Arduino LoRa developpement on Raspberry Pi.


# Installation

This library required the WiringPi Library, to install it

   $ sudo apt-get install WiringPi


# Connections and Pin Details
<img src="https://github.com/HarshavardhanBalreddy/RA25_SESA_6/blob/master/loraspberry/connections/Connections.png" alt="Connections" style="width:200px;"/>
<img src="https://github.com/HarshavardhanBalreddy/RA25_SESA_6/blob/master/loraspberry/connections/Pin%20Details.png" alt="Pin Configuration" style="width:200px;"/>

# usage of this library:
This library as the same API same the original library  So for more information please look original library.

here : https://github.com/sandeepmistry/arduino-LoRa/blob/master/API.md

please used "LoRa.h" since all files will be inside your folder

I ported the examples to help you to use this library for your raspberry pi

to compile your "soft" with this library:

   $ g++ -Wall -o soft soft.cpp LoRa.cpp Print.cpp -lwiringPi

for example:

  $ g++ -Wall -o LoRaSender LoRaSender.cpp  LoRa.cpp Print.cpp WString.cpp itoa.cpp -lwiringPi



