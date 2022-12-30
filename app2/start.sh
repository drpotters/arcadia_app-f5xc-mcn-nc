#!/bin/sh
/usr/local/sbin/php-fpm -nDOd extension=json.so -d extension=curl.so --fpm-config /usr/local/etc/php-fpm.d/www.conf && /usr/sbin/nginx -g 'daemon off; error_log /dev/stderr info;'
