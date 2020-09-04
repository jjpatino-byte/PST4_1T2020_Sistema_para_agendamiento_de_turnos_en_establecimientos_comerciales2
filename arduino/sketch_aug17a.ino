#include <SPI.h>
#include <Ethernet.h>
 
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress ip(192, 168, 1, 177);
EthernetClient client;
 
char serverC[] = "lab10patino.000webhostapp.com";
int y=7;

String codigo;        //Aquí se almacena la respuesta del servidor
String fechas;        //Aquí se almacena la fecha que recuperamos de MySQL
boolean fin = false;
boolean pregunta = true;
String cadena; //hora
String hora_Actual;
int LED=9;

void setup()
{
   Serial.begin(9600);
   pinMode(LED,OUTPUT);
   if (Ethernet.begin(mac) == 0)
   {
      Serial.println("Failed to configure Ethernet using DHCP");
      Ethernet.begin(mac, ip);
   }
 
   delay(1000);
   Serial.println("connecting...");
 
   
}
 
void loop()
{
   httpRequest(); 
   
   
   for(int i=0; i<fechas.length();++i){
   
    if((i-y)!=0 or i==0){
      cadena+=fechas[i];
      }
    else{
      cadena+=fechas[i];
      Serial.println(cadena);
      delay(500);
      
      if(i-7==0){
        hora_Actual=cadena;
        }
      
      
      
      
      cadena="";      
      y=y+8;
      }
      
      if(y>7 and hora_Actual.substring(0,5)==cadena.substring(0,5)){
        digitalWrite(LED,HIGH);
        delay(5000);
        Serial.println("On");
        
        digitalWrite(LED,LOW);
         delay(5000);
        Serial.println("Off");
       
        }
      
      }
    Serial.println("Hora Actual: "+hora_Actual.substring(0,5));
    
    y=7;
   
}

int httpRequest(){
  if (client.connect(serverC, 80))
   {
      Serial.println("connected");
      client.print("GET /conect.php");
      //Mandamos la variable junto a la línea de GET
      client.println(" HTTP/1.0");
      //IP del servidor
      client.println("Host: lab10patino.000webhostapp.com");
      client.println("User-Agent: arduino-ethernet");
      client.println("Connection: close");
      client.println();
   }
   else 
   {
      Serial.println("connection failed");
   }
   delay(500);
    //Comprobamos si tenemos respuesta del servidor y la
    //almacenamos en el string ----> codigo.
      while(client.available()) {
      char c = client.read();
      codigo += c;
      //Habilitamos la comprobación del código recibido
      fin = true;
      
      
    }
    if (fin)  {
      // Serial.println(codigo);
      //Analizamos la longitud del código recibido
      int longitud = codigo.length();
      //Buscamos en que posición del string se encuentra nuestra variable
      int posicion = codigo.indexOf("value=");
      //Borramos lo que haya almacenado en el string nombre
      fechas = "";
      //Analizamos el código obtenido y almacenamos el nombre en el string nombre
      for (int i = posicion + 6; i < longitud; i ++){
      if (codigo[i] == ';') i = longitud;
      else fechas += codigo[i];
      
      }
      //Deshabilitamos el análisis del código
      fin = false;
      //Imprimir el nombre obtenido
      
      //Cerrar conexión
      Serial.println("Desconectarn");
      client.stop();
      }
      //Borrar código y salir de la función//Dirección IP del servidor
      codigo="";
      return 1;
    
   }
