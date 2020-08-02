#copy paste this command in the termnal or run using sh <filename> to execute the loraspi program, make sure the file is in the source folder
g++ -Wall -o test  loraspi.cpp LoRa.cpp Print.cpp WString.cpp itoa.cpp -lwiringPi

