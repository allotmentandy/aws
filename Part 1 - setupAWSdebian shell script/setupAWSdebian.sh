
#!/bin/bash -x

sudo apt-get update
sudo apt-get upgrade

sudo apt-get install apache2

sudo a2enmod ssl
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart

# install firewall and setup

sudo apt install ufw
sudo ufw allow ssh
sudo ufw allow http
sudo ufw allow https

# to get the https version running

sudo apt install certbot
sudo apt-get install python-certbot-apache

sudo a2ensite default-ssl

sudo systemctl reload apache2

# installing php 8.0 and 8.1

sudo apt-get install lsb-release apt-transport-https ca-certificates
sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
sudo echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list
sudo apt-get update

sudo apt install -y php8.0-{mysql,cli,common,snmp,ldap,curl,mbstring,zip,tidy,xml,opcache}
sudo apt install -y php8.1-{mysql,cli,common,snmp,ldap,curl,mbstring,zip,tidy,xml,opcache}

sudo update-alternatives --config php

sudo apt-get install php8.0-fpm libapache2-mod-php8.0
sudo apt-get install php8.1-fpm libapache2-mod-php8.1
sudo a2dismod php8.0
sudo a2enmod php8.1
sudo systemctl restart apache2

