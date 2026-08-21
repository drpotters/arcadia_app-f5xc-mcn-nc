#!/bin/sh
echo "env[BACKEND_NAME] = '${BACKEND_NAME}'" >> /etc/php/7.2/fpm/pool.d/www.conf
sudo /usr/sbin/php-fpm7.2 -nDOd extension=json.so -d extension=curl.so --fpm-config /etc/php/7.2/fpm/pool.d/www.conf && sudo /usr/sbin/nginx -g 'daemon off; error_log /dev/stderr info;'
