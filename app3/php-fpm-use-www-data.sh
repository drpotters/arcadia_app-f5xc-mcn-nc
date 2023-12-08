#!/bin/sh
echo "Enabling user www-data in /etc/php/7.2/fpm/pool.d/www.conf"
sed -i -re 's/^;+(user = www-data)$/\1/' /etc/php/7.2/fpm/pool.d/www.conf
