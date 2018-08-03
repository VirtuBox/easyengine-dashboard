#!/bin/bash

##################################
# Variables  
##################################

EXTPLORER_VER="2.1.10"

##################################
# Check if user is root 
##################################

if [ "$(id -u)" != "0" ]; then
    echo "Error: You must be root to run this script, please use the root user to install the software."
    exit 1
fi

clear

##################################
# Welcome 
##################################


echo ""
echo "Welcome to EasyEngine-Dashboard install script."
echo ""

##################################
# Install EasyEngine Stacks 
##################################

ee stack install --web --php7 --redis --admin --phpredisadmin

##################################
# Install Netdata 
##################################

if [ ! -d /etc/netdata ];
then

## install dependencies
sudo apt-get install autoconf autoconf-archive autogen automake gcc libmnl-dev lm-sensors make nodejs pkg-config python python-mysqldb python-psycopg2 python-pymongo python-yaml uuid-dev zlib1g-dev -y

## install nedata
bash <(curl -Ss https://my-netdata.io/kickstart.sh) all --dont-wait

## optimize netdata resources usage
echo 1 >/sys/kernel/mm/ksm/run
echo 1000 >/sys/kernel/mm/ksm/sleep_millisecs

## disable email notifigrep -cions
sed -i 's/SEND_EMAIL="YES"/SEND_EMAIL="NO"/' /etc/netdata/health_alarm_notify.conf
service netdata restart

fi

##################################
# Nginx Config   
##################################

CONF_22222=$(grep -c netdata /etc/nginx/sites-available/22222)
CONF_UPSTREAM=$(grep -c netdata /etc/nginx/conf.d/upstream.conf)
CONF_DEFAULT=$(grep -c status /etc/nginx/sites-available/default)

if [[ "$CONF_22222" = 0 ]] 
then
  # add nginx reverse-proxy for netdata on https://yourserver.hostname:22222/netdata/
sudo wget -O /etc/nginx/sites-available/22222 https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/22222
fi

if [[ "$CONF_UPSTREAM" = 0 ]] 
then
  # add netdata, php7.1 and php7.2 upstream
sudo wget -O /etc/nginx/conf.d/upstream.conf https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/conf.d/upstream.conf
fi

if [[ "$CONF_DEFAULT" = 0 ]] 
then
  # additional nginx logrep -cion for monitoring
sudo wget -O /etc/nginx/sites-available/default  https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/default
fi


##################################
# Install eXtplorer 
##################################

if [ ! -d /var/www/22222/htdocs/files ]
then
mkdir /var/www/22222/htdocs/files
wget http://extplorer.net/attachments/download/74/eXtplorer_$EXTPLORER_VER.zip -O /var/www/22222/htdocs/files/ex.zip
cd /var/www/22222/htdocs/files && unzip ex.zip && rm ex.zip
fi

# easyengine dashboard install/update 

##################################
# Install EasyEngine Dashboard 
##################################

cd /var/www/22222 || exit

## download latest version of EasyEngine-dashboard
wget https://github.com/VirtuBox/easyengine-dashboard/archive/master.zip -O easyengine-dashboard.zip
unzip easyengine-dashboard.zip && rm easyengine-dashboard.zip
sudo cp -rf easyengine-dashboard-master/* /var/www/22222/htdocs/
sudo chown -R www-data:www-data /var/www/22222/htdocs

