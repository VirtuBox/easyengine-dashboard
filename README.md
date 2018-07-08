
# easyengine-dashboard

## A clean bootstrap dashboard for EasyEngine

![ee-dashboard](https://raw.githubusercontent.com/VirtuBox/easyengine-dashboard/master/ee-dashboard.png)

## Requirements

* Netdata
* EasyEngine
* Extplorer (Web File Manager)

## Installation

Install the Following Stacks

```bash
ee stack install --web --php7 --redis --admin --phpredisadmin
```

Update phpmyadmin

```bash
bash <(wget --no-check-certificate -O - https://git.virtubox.net/virtubox/debian-config/raw/master/composer.sh)
sudo -u www-data composer update -d /var/www/22222/htdocs/db/pma/
```

Netdata

```bash
bash <(curl -Ss https://my-netdata.io/kickstart.sh) all

# save 40-60% of netdata memory
echo 1 >/sys/kernel/mm/ksm/run
echo 1000 >/sys/kernel/mm/ksm/sleep_millisecs
```

### Nginx configurations 

* added nginx & php-fpm status page to default vhost
* added netdata reverse-proxy configuration in 22222
* added php7.1, php7.2 and netdata upstream to upstream.conf

```bash
wget -O /etc/nginx/sites-available/default  https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/default

wget -O /etc/nginx/sites-available/22222 https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/sites-available/22222

wget -O /etc/nginx/conf.d/upstream.conf https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/nginx/conf.d/upstream.conf
```

Install extplorer

```bash
mkdir /var/www/22222/htdocs/files
wget http://extplorer.net/attachments/**download**/74/eXtplorer_2.1.10.zip -O /var/www/22222/htdocs/files/ex.zip
cd /var/www/22222/htdocs/files && unzip ex.zip && rm ex.zip
```

Install ee-dashboard

```bash
cd ~/
git clone https://github.com/VirtuBox/easyengine-dashboard.git
cp -rf easyengine-dashboard/* /var/www/22222/htdocs/
rm -rf easyengine-dashboard
chown -R www-data:www-data /var/www/22222/htdocs
```