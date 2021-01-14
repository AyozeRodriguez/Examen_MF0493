#!/bin/bash
# _*_ ENCODING: UTF-8 _*_

sudo apt update
sudo apt upgrade

sudo apt-get install nginx
sudo ufw allow 'Nginx HTTP'

sudo apt-get install mysql-server
sudo mysql_secure_installation

sudo apt update
sudo apt install apache2
sudo ufw allow 'WWW'
sudo service apache2 restart

sudo apt-get install php5-fpm ph5-mysql
sudo systemctl restart php5-fpm

sudo apt update
sudo apt upgrade
sudo apt install vsftpd


