sudo apt-get install apache2 -y
cd /var/www/html
sudo chown pi: index.html
sudo apt-get install php5 libapache2-mod-php5 -y
cd /etc/php5/apache2
sudo leafpad php.ini //change upload_tmp_dir = /awesome/q/
