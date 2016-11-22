#include<SoftwareSerial.h>
SoftwareSerial tg(10,11);

const int relayPin1 = 5;
const int relayPin2 = 2;
const int relayPin3 = 3;
const int relayPin4 = 4;
// the pin that the relay is attached to
int incomingByte; // a variable to read incoming serial data into
 
void setup() {
  // initialize serial communication:
  tg.begin(9600);
  // initialize the relay pin as an output:
  pinMode(relayPin1, OUTPUT);
  pinMode(relayPin2, OUTPUT);
  pinMode(relayPin3, OUTPUT);
  pinMode(relayPin4, OUTPUT);
}
 
void loop() {
  // see if there's incoming serial data:
  if (tg.available() > 0) {
    // read the oldest byte in the serial buffer:
    incomingByte = tg.read();
    // if it's a capital H (ASCII 72), turn on the LED:
    if (incomingByte == 'A') {
      digitalWrite(relayPin1, LOW);
      digitalWrite(LED_BUILTIN, LOW);
    }
    // if it's an L (ASCII 76) turn off the LED:
    if (incomingByte == 'B') {
      digitalWrite(relayPin1, HIGH);
      digitalWrite(LED_BUILTIN, HIGH);
    }

     if (incomingByte == 'C') {
      digitalWrite(relayPin2, LOW);
      digitalWrite(LED_BUILTIN, LOW);
    }

     if (incomingByte == 'D') {
      digitalWrite(relayPin2, HIGH);
      digitalWrite(LED_BUILTIN, HIGH);
    }

     if (incomingByte == 'E') {
      digitalWrite(relayPin3, LOW);
      digitalWrite(LED_BUILTIN, LOW);
    }

     if (incomingByte == 'F') {
      digitalWrite(relayPin3, HIGH);
      digitalWrite(LED_BUILTIN, HIGH);
    }

     if (incomingByte == 'G') {
      digitalWrite(relayPin4, LOW);
      digitalWrite(LED_BUILTIN, LOW);
    }

     if (incomingByte == 'H') {
      digitalWrite(relayPin4, HIGH);
      digitalWrite(LED_BUILTIN, HIGH);
    }

  }

}
