``` All the libraries or dependecies used are either opensource or built in, add the dependencies in to the libraries folder in "Arduino Directory" and paste the program directly in "Arduino 
Directory", run the programs in arduino IDE or use command line to run and test the programs ```

# Pin Configuration for arduino uno

``` Refer documentation of your boards for pin configurationsi ```

``` For GPS Ublox ```
RX - 5
TX - 4
3.3v - 3.3v
GND - GND

``` Button ```

Inorder to create the button interrupt connect it to interrupt capable pin

one end of button terminal - 3
other end of the terminal - GND

``` LORA ```

CSPIN - 10
RST   - 9
IRQPIN - 2 //should be an interrupt pin


``` RGB LED ```
 R - A0
 G - A1
 B - A2
 
 Connect the one terminal left to GND

