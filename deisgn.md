# project-piduino-awesomeness

## Components:

### User's WS
Will write code in notepad.

### RaspberryPi
Apache Server to accept & upload code files
Compiles code
Schedules running code on Arduino
Uploads code to Arduino at the correct time

### Arudino
Executes code when directed
Controls robot/LEDs/ect


## Server side backend psuedo code.  

delete/create dir
start server program
while (true){

compile accepted files
if (unplayed file exists && latest file >= 40 sec of playtime){
	upload
}


## Location on pi/server:
/awesome/

## Location for uncompiled files:
/awesome/q/01.txt
/awesome/q/02.txt
...

## Location for compiled files:
/awesome/h/01.hex
/awesome/h/02.hex
...

## Queue:
Currently first come first serve.  Each file gets atleast 40 seconds of playtime before being replaced by the next.  If there is no other file in the queue, the current file gets to keep playing.
FileA -> 01.txt
FileB -> 02.txt
FileC -> 03.txt
FileD -> 04.txt
...

## Upgrades:
Focus is on getting a fully working protoype of the original requirments.  As we meet success and have extra time, the following upgrades will be implemented:
1.  Accept both hex (compiled) and txt/sketch (uncompiled) as input
2.  Teacher webpage to manage and view file queue
3.  Better/alternate scheudlers


