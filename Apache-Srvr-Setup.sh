sudo apt-get install apache2 -y
cd /var/www/html
sudo chown pi: index.html #change 'pi' to your username
sudo apt-get install php5 libapache2-mod-php5 -y
cd /etc/php5/apache2
sudo leafpad php.ini #change upload_tmp_dir = /awesome/q/ and comment the line.
sudo mkdir /awesome/q
sudo chown /awesome/q www-data #make www-data the owner of the folder
sudo leafpad /etc/apache2/apache2.conf # add an exception for /awesome/q/ directory.  Copy an example for the file itself 
#move .php files in this project to /var/www/html/ dir.  Make sure they are lower case. Remove index.html
