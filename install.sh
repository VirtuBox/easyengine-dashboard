#!bin/#!/usr/bin/env bash


# netdata installation

if [ ! -d /etc/netdata ];
then
  
## install dependencies  
sudo apt-get install autoconf autoconf-archive autogen automake gcc libmnl-dev lm-sensors make nodejs pkg-config python python-mysqldb python-psycopg2 python-pymongo python-yaml uuid-dev zlib1g-dev -y

## install nedata
bash <(curl -Ss https://my-netdata.io/kickstart.sh) all --dont-wait

## optimize netdata resources usage
echo 1 >/sys/kernel/mm/ksm/run
echo 1000 >/sys/kernel/mm/ksm/sleep_millisecs

## disable email notifications
sed -i 's/SEND_EMAIL="YES"/SEND_EMAIL="NO"/' /etc/netdata/health_alarm_notify.conf
service netdata restart

fi

# nginx configuration setup

# check nginx configuration
CONF_22222=$(cat /etc/nginx/sites-available/22222 | grep netdata | wc -l)
CONF_UPSTREAM=$(cat /etc/nginx/conf.d/upstream.conf | grep netdata | wc -l  )
CONF_DEFAULT=$(cat /etc/nginx/sites-available/default | grep status | wc -l)

if "$CONF_22222" = 0;
then 
sudo wget -O /etc/nginx/sites-available/22222 https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/22222
fi

if "$CONF_UPSTREAM" = 0;
then 
sudo wget -O /etc/nginx/conf.d/upstream.conf https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/conf.d/upstream.conf
fi

if "$CONF_DEFAULT" = 0;
then 
sudo wget -O /etc/nginx/sites-available/default  https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/default
fi


# extplorer install if needed

if [ ! -d /var/www/22222/htdocs/files ];
then
  
mkdir /var/www/22222/htdocs/files
wget http://extplorer.net/attachments/download/74/eXtplorer_2.1.10.zip -O /var/www/22222/htdocs/files/ex.zip
cd /var/www/22222/htdocs/files && unzip ex.zip && rm ex.zip
fi

# easyengine dashboard install/update 

cd /var/www/22222 || exit
if [ -f easyengine-dashboard-master.zip ];
then
  sudo rm easyengine-dashboard-master.zip
fi

## download latest version of EasyEngine-dashboard
wget https://codeload.github.com/VirtuBox/easyengine-dashboard/zip/master -O easyengine-dashboard.zip 
unzip easyengine-dashboard.zip 
sudo cp -rf easyengine-dashboard-master/* /var/www/22222/htdocs/
sudo chown -R www-data:www-data /var/www/22222/htdocs
