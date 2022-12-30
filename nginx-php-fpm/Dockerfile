FROM richarvey/nginx-php-fpm:latest
LABEL MAINTAINER Dave Potter <da.potter@f5.com>
ENV DEBIAN_FRONTEND=noninteractive

# Create non-root group and user
#RUN addgroup --system shared-folder \
    #&& adduser --system --home /var/cache/shared-folder --ingroup shared-folder --uid 1001 nonroot

# to be able to use "nano" with shell on "docker exec -it [CONTAINER ID] bash"
ENV TERM xterm
ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

COPY /MainApp/ /var/www/html/

# Configure port 8080 and redirect logging to console
COPY /nginx-default /etc/nginx/sites-available/default.conf
#RUN sed -i -e 's/80 def/8080 def/' /etc/nginx/sites-available/default
#RUN sed -i -re 's/\/var\/log\/nginx\/(access|error).log/\/dev\/stdout/' /etc/nginx/nginx.conf
#RUN sed -i -re '/^user www-data/d' /etc/nginx/nginx.conf
#RUN sed -i -re 's/(.*)(www-data)$/;\0/' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -i -re 's/^(listen =)(.*)/\1 9000/' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -i -re 's/^(listen =)(.*)/;\0/' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -re 's/^(listen.owner)(.*)/;\0/' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -re 's/^(listen.group)(.*)/;\0/' /usr/local/etc/php-fpm.d/www.conf
#RUN sed -i -re 's/^(display_startup_errors =) Off/\1 On/' /etc/php/7.2/fpm/php.ini
RUN sed -i -re 's/^(user = )(.*)/;\0/' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i -re 's/^(group = )(.*)/;\0/' /usr/local/etc/php-fpm.d/www.conf

#RUN chown -R www-data:www-data /var/www
#RUN chown www-data /var/lib/nginx
#RUN chmod 777 /var/lib/nginx
RUN mkdir /run/php
#RUN chown www-data /run/php
#RUN chmod 666 /etc/php/7.2/fpm/pool.d/www.conf
#RUN chgrp www-data /run
RUN chmod 777 /run /run/php /var/log /var/cache/nginx /usr/local/var/log /usr/local/var/run
#RUN touch /var/log/php7.2-fpm.log
#RUN chmod 666 /var/log/php7.2-fpm.log /var/log/nginx/error.log
#RUN chown www-data /var/log/php7.2-fpm.log
RUN rm -f /usr/local/etc/php/conf.d/*sql* /usr/local/etc/php/conf.d/redis* /usr/local/etc/php/conf.d/*vars*

EXPOSE 8080

WORKDIR /var/www/html

#HEALTHCHECK --interval=5s --timeout=3s --retries=3 CMD curl -f http://localhost:8080 || exit 1

#RUN \
#    sed -i /etc/sudoers -re 's/^%sudo.*/%sudo ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
#    sed -i /etc/sudoers -re 's/^root.*/root ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
#    sed -i /etc/sudoers -re 's/^#includedir.*/## **Removed the include directive** ##/g' && \
#    echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

#USER www-data
#CMD [ "nginx", "-g", "daemon off;" ]
