import processing.serial.*;
Serial port;
 
void setup()  {
     port = new Serial(this, Serial.list()[1], 9600);  // Open the port that the Arduino board is connected.
}
void draw() {
 
  String onoroff1[] = loadStrings("http://localhost/autohome/main/binx/status1.tgf");
  String onoroff2[] = loadStrings("http://localhost/autohome/main/binx/status2.tgf");
  String onoroff3[] = loadStrings("http://localhost/autohome/main/binx/status3.tgf");
  String onoroff4[] = loadStrings("http://localhost/autohome/main/binx/status4.tgf");// Enter address of your status.txt file.
 
  if (onoroff1[0].equals("1") == true) {
    println("Turn ON the appliance 1");
    port.write("A"); // Sends H to the serial monitor
 
  }
  
  else if (onoroff1[0].equals("0") == true)
  
  {
 
    println("Turn OFF the appliance 1");
    port.write("B");  // Sends L to the serial monitor
 }
 
  if (onoroff2[0].equals("1") == true) {
    println("Turn ON the appliance 2");
    port.write("C"); // Sends H to the serial monitor
 
  }
  
  else if (onoroff2[0].equals("0") == true)
  
  {
 
    println("Turn OFF the appliance 2");
    port.write("D");  // Sends L to the serial monitor
 }
 
  if (onoroff3[0].equals("1") == true) {
    println("Turn ON the appliance 3");
    port.write("E"); // Sends H to the serial monitor
 
  }
  
  else if (onoroff3[0].equals("0") == true)
  
  {
 
    println("Turn OFF the appliance 3");
    port.write("F");  // Sends L to the serial monitor
 }
 
  if (onoroff4[0].equals("1") == true) {
    println("Turn ON the appliance 4");
    port.write("G"); // Sends H to the serial monitor
 
  }
  
  else if (onoroff4[0].equals("0") == true)
  
  {
 
    println("Turn OFF the appliance 4");
    port.write("H");  // Sends L to the serial monitor
 }
 
  delay(250); // Set time to wait before rechecking the value; in miliseconds.
}