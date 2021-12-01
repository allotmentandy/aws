#!/bin/bash -x

# install mysql
sudo apt-get install -y default-mysql-server
sudo apt-get install -y php8.0-mysql php8.1-mysql

#set the password and setup mysql
sudo mysql_secure_installation

# questions asked
# Enter current password for root (enter for none): 
# Set root password? [Y/n] Y
# Remove anonymous users? [Y/n] Y   
# Disallow root login remotely? [Y/n] Y
# Remove test database and access to it? [Y/n] Y
# Reload privilege tables now? [Y/n] Y

# test connection with the new password 
sudo mysql -u root -p

# to allow login for adminer login to mysql and run
# USE mysql
# UPDATE user SET plugin='mysql_native_password' WHERE User='root';

# install adminer
sudo wget "http://www.adminer.org/latest.php" -O /var/www/html/adminer.php
sudo chown -R root:root /var/www/html/adminer.php
sudo chmod 755 /var/www/html/adminer.php

sudo /etc/init.d/mysql restart