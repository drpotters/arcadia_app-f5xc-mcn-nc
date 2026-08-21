FROM ubuntu:18.04

LABEL MAINTAINER="Dave Potter <da.potter@f5.com>"

ENV DEBIAN_FRONTEND="noninteractive"
ENV TZ="Europe/Paris"
ENV TERM=xterm

# Create non-root group and user
RUN addgroup --system shared-folder \
    && adduser --system --home /var/cache/shared-folder --ingroup shared-folder --uid 1001 nonroot

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Group all apt installations together to use the cache properly
RUN apt-get update && apt-get install -yq --no-install-recommends \
    apt-utils \
    curl \
    nginx \
    php7.2-cli \
    php7.2-json \
    php7.2-curl \
    php7.2-fpm \
    php7.2-gd \
    php7.2-ldap \
    php7.2-mbstring \
    php7.2-mysql \
    php7.2-soap \
    php7.2-sqlite3 \
    php7.2-xml \
    php7.2-zip \
    php7.2-intl \
    php-imagick \
    openssl \
    nano \
    vim \
    tree \
    graphicsmagick \
    imagemagick \
    ghostscript \
    mysql-client \
    iputils-ping \
    net-tools \
    locales \
    sqlite3 \
    ca-certificates \
    sudo \
    && locale-gen en_US.UTF-8 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY /MainApp/ /var/www/html/
COPY /nginx-default /etc/nginx/sites-available/default
COPY /start.sh /start.sh
COPY /php-fpm-use-www-data.sh /php-fpm-use-www-data.sh

# Group sed commands to optimize image layers - for environments that allow root
#RUN sed -i -re 's/\/var\/log\/nginx\/(access|error).log/\/dev\/stdout/' /etc/nginx/nginx.conf \
#    && sed -i -re '/^user www-data/d' /etc/nginx/nginx.conf \
#    && sed -i -re 's/(.*)(www-data)$/;\0/' /etc/php/7.2/fpm/pool.d/www.conf \
#    && sed -i -re 's/^(listen =)(.*)/\1 9000/' /etc/php/7.2/fpm/pool.d/www.conf \
#    && sed -i -re 's/^(display_startup_errors =) Off/\1 On/' /etc/php/7.2/fpm/php.ini

# Use www-data username for nonroot environments
RUN sed -i -re 's/\/var\/log\/nginx\/(access|error).log/\/dev\/stdout/' /etc/nginx/nginx.conf \
    && sed -i -re 's/^(listen =)(.*)/\1 9000/' /etc/php/7.2/fpm/pool.d/www.conf \
    && sed -i -re 's/^(display_startup_errors =) Off/\1 On/' /etc/php/7.2/fpm/php.ini

# Group permissions and directory creation
RUN chown -R www-data:www-data /var/www \
    && chown www-data /var/lib/nginx \
    && chmod 777 /var/lib/nginx \
    && mkdir -p /run/php \
    && chown www-data /run/php \
    && chmod 666 /etc/php/7.2/fpm/pool.d/www.conf \
    && chmod 777 /run /run/php /var/log \
    && touch /var/log/php7.2-fpm.log /var/log/php-fpm.log \
    && chmod 666 /var/log/php7.2-fpm.log /var/log/php-fpm.log /var/log/nginx/error.log

EXPOSE 8080

WORKDIR /var/www/html

RUN sed -i /etc/sudoers -re 's/^%sudo.*/%sudo ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
    sed -i /etc/sudoers -re 's/^root.*/root ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
    sed -i /etc/sudoers -re 's/^#includedir.*/## **Removed the include directive** ##/g' && \
    echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

USER www-data

CMD [ "/start.sh" ]
