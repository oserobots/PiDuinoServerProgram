# project-piduino-awesomeness

### Compiling on Windows without the IDE

Typically, compilation is handled by the IDE, which is programmed in Java.  Being able to complile the code is not accessible easily via command line and instead is buried deep in the Java code.  

And no, it's not a very simple process you could easily run in a few command line executions:
https://github.com/arduino/Arduino/wiki/Build-Process

Arduino Builder is a standalone application.  It include Arduino Uploader which is a command line utitility that compiles code along the Arduino pipeline.

http://arduinodev.com/arduino-uploader/

Then you can compile via the following line:
./ArduinoUploader [sketch/HEX file] [board type] 

### Porting to Arduino from Linux/Rasbian

I used KivyPi as my preferred Linux distro for the Pi, but it should also work on Rasbian (I wasn't expecting it to work but it did!).  I downloaded the IDE for Linux installed it and changed compilation messages to verbose in the settings. Then I used a modified version of the AVR command that takes the .hex file as a parameter and modified it to do my bidding.  

I made to test sketches, both fairly simply blinking light demos, converted them to hex files, and started one on the board. Then ran the commmand to upload the other without the IDE and boom!  The behavior changed!

I'll upload that command when I'm back on my pi.
