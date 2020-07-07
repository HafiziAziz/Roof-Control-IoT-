#include <Servo.h>
//
#include <SPI.h>
#include <Dhcp.h>
#include <Dns.h>
#include <Ethernet.h>
#include <EthernetClient.h>
#include <Temboo.h>
#include "TembooAccount.h" // Contains Temboo account information
//
byte ethernetMACAddress[] = ETHERNET_SHIELD_MAC;
EthernetClient client;
//
Servo microservo;
int leda = 4;
int ledb = 3;
int pos = 10;
int nRainIn = A1;
int nRainDigitalIn = 2;
int nRainVal;
boolean bIsRaining = false;
String strRaining;


void setup() {
  Serial.begin(9600);
  pinMode(2,INPUT);
  pinMode(leda, OUTPUT);
  pinMode(ledb, OUTPUT);
  microservo.attach(9);
//  
  Serial.print("DHCP:");
  if (Ethernet.begin(ethernetMACAddress) == 0) {
    Serial.println("FAIL");
    while(true);
  }
  Serial.println("OK");
  delay(100);

  Serial.println("Setup complete.\n");
//  

}

void loop() 
{
  nRainVal = analogRead(nRainIn);
  bIsRaining = !(digitalRead(nRainDigitalIn));
  
  if(bIsRaining)
  {
    strRaining = "YES";
    digitalWrite(leda,LOW);
    digitalWrite(ledb,HIGH);
    microservo.write (110);
    
    TembooChoreo SendSMSChoreo(client);

    // Invoke the Temboo client
    SendSMSChoreo.begin();

    // Set Temboo account credentials
    SendSMSChoreo.setAccountName(TEMBOO_ACCOUNT);
    SendSMSChoreo.setAppKeyName(TEMBOO_APP_KEY_NAME);
    SendSMSChoreo.setAppKey(TEMBOO_APP_KEY);

    // Set Choreo inputs
    String AuthTokenValue = "744c3a9ae81c34c0c422bff37033ebe7";
    SendSMSChoreo.addInput("AuthToken", AuthTokenValue);
    String FromValue = "+12052368844";
    SendSMSChoreo.addInput("From", FromValue);
    String ToValue = "+60176776244";
    SendSMSChoreo.addInput("To", ToValue);
    String BodyValue = "Raining Outside";
    SendSMSChoreo.addInput("Body", BodyValue);
    String AccountSIDValue = "AC2df8f99a1cf4dbeac79c63ea6268d73a";
    SendSMSChoreo.addInput("AccountSID", AccountSIDValue);

    // Identify the Choreo to run
    SendSMSChoreo.setChoreo("/Library/Twilio/SMSMessages/SendSMS");

    // Run the Choreo; when results are available, print them to serial
    SendSMSChoreo.run();

    while(SendSMSChoreo.available()) 
    {
      char c = SendSMSChoreo.read();
      Serial.print(c);
    }
    SendSMSChoreo.close();
  

  Serial.println("\nWaiting...\n");
  delay(30000); // wait 30 seconds between SendSMS calls
}

  else
  {
    strRaining = "NO";
    digitalWrite(leda,HIGH);
    digitalWrite(ledb,LOW);
    microservo.write (10);
  }
  
  Serial.print("Raining?: ");
  Serial.print(strRaining);  
  Serial.print("\t Moisture Level: ");
  Serial.println(nRainVal);
  
  delay(200);

}

