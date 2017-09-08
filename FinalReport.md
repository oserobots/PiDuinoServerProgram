# Final Report on Piduino Awesomness
## What we did
We decided on a design that would run to processes.  One a server that would allow anyone to upload .txt files that would be saved on a Raspberry Pi server.  The Raspberry Pi can be mounted on the Arduino robot and run a queueing processes to decide which code to run.
### Part 1: Apache Server
The Apache server was created to iterate through the files of our chosen file path and see what the next available item was each time it uploaded.  Our naming nomenclature was 001.txt, 002.txt, ... 
### Part 2: Process for Compilation and Upload
Arduino has a linux command line toolkit, Ino.  It took some time to find, but this is the most complete and include Arudino libraries which are key to making the Arduino user (and student) friendly.  The process would read the que file and wait for the next appropriately named .txt file to be added.  It would copy the .txt file to the .ino file in the appropriate location where Ino could be compiled and uploaded.
### Lessons Learned
Part 1 and Part 2 were well designed to be modular.  This was helpful to break the task apart, but there were still issuses getting everything together.  This lead us to note that the Ino builder and uploader took much much longer when our queue was in the root than when it was in a user directory.  
Aditionally, the Part 2 ended up looking like a makefile more than C++ where it was designed to be.  Better code would use fewer system calls and rely more on C++ capabilities, but this was a bandaid to finish in time.
## Future Capability
There are a myriad of possibilities on how this could expand and be useful.  One way is to have a Raspberry Pi set up remotely somewhere there is internet access and use it to program preferial devices.  This could also be used to decrease expenses of robotics classes.  This kind of resource sharing allowed by the Piduino hybrid can allow students to efficiently share robots or add a webcam and program classroom robots from home.
