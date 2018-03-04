# easyengine-dashboard - A clean bootstrap dashboard for EasyEngine 

![ee-dashboard](https://raw.githubusercontent.com/VirtuBox/easyengine-dashboard/master/ee-dashboard.png)

## Requirements

* Netdata
* EasyEngine
* Extplorer (Web File browser)

## Installation

Install EasyEngine 
```
wget -qO ee rt.cx/ee && bash ee
```
Install Following Stacks 
```
ee stack install --web --php7 --redis --admin --phpredisadmin
```
Update phpmyadmin  
```
bash <(wget --no-check-certificate -O - https://git.virtubox.net/virtubox/debian-config/raw/master/composer.sh)
sudo -u www-data composer update -d /var/www/22222/htdocs/db/pma/
```

Netdata  
```
bash <(curl -Ss https://my-netdata.io/kickstart.sh) all

# save 40-60% of netdata memory
echo 1 >/sys/kernel/mm/ksm/run
echo 1000 >/sys/kernel/mm/ksm/sleep_millisecs
```

Set custom nginx configuration (php7 used instead of php5.6 and nginx rules and reverse-proxy for netdata)  
```
wget -O /etc/nginx/sites-available/default  https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/nginx/sites-available/default

wget -O /etc/nginx/sites-available/22222 https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/nginx/sites-available/22222
```

Install extplorer
```
mkdir /var/www/22222/htdocs/files
wget http://extplorer.net/attachments/download/74/eXtplorer_2.1.10.zip -O /var/www/22222/htdocs/files/ex.zip
unzip /var/www/22222/htdocs/files/ex.zip && rm /var/www/22222/htdocs/files/ex.zip
```

Install ee-dashboard
```
git clone https://github.com/VirtuBox/easyengine-dashboard.git
cp -rf easyengine-dashboard/* /var/www/22222/htdocs/
chown -R www-data:www-data /var/www/22222/htdocs
```



