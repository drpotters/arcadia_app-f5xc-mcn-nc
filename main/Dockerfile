FROM ubuntu:20.04
LABEL MAINTAINER Dave Potter <da.potter@f5.com>
ENV DEBIAN_FRONTEND=noninteractive

# Create non-root group and user
RUN addgroup --system shared-folder \
    && adduser --system --home /var/cache/shared-folder --ingroup shared-folder --uid 1001 nonroot

# Install apache, PHP, and supplimentary programs. openssh-server, curl, and lynx-cur are for debugging the container.
ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update
RUN apt install -yq --no-install-recommends software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt update
RUN apt-get install -yq --no-install-recommends \
    apt-utils \
    curl \
    # Install nginx
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
    # Install tools
    openssl \
    nano \
    vim \
    tree \
    curl \
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
    && apt-get clean && rm -rf /var/lib/apt/lists/*


# to be able to use "nano" with shell on "docker exec -it [CONTAINER ID] bash"
ENV TERM xterm

COPY /MainApp/ /var/www/html/

RUN apt-get install locales
RUN locale-gen en_US.UTF-8

# Configure port 8080 and redirect logging to console
COPY /nginx-default /etc/nginx/sites-available/default
COPY /start.sh /start.sh
#RUN sed -i -e 's/80 def/8080 def/' /etc/nginx/sites-available/default
RUN sed -i -re 's/\/var\/log\/nginx\/(access|error).log/\/dev\/stdout/' /etc/nginx/nginx.conf
RUN sed -i -re '/^user www-data/d' /etc/nginx/nginx.conf
RUN sed -i -re 's/(.*)(www-data)$/;\0/' /etc/php/7.2/fpm/pool.d/www.conf
RUN sed -i -re 's/^(listen =)(.*)/\1 9000/' /etc/php/7.2/fpm/pool.d/www.conf
RUN sed -i -re 's/^(display_startup_errors =) Off/\1 On/' /etc/php/7.2/fpm/php.ini
#RUN sed -i -re 's/^(user = )(.*)/;\0/' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -i -re 's/^(group = )(.*)/;\0/' /etc/php/7.2/fpm/pool.d/www.conf

RUN chown -R www-data:www-data /var/www
RUN chown www-data /var/lib/nginx
RUN chmod 777 /var/lib/nginx
RUN mkdir /run/php
RUN chown www-data /run/php
RUN chmod 666 /etc/php/7.2/fpm/pool.d/www.conf
#RUN chgrp www-data /run
RUN chmod 777 /run /run/php /var/log
RUN touch /var/log/php7.2-fpm.log /var/log/php-fpm.log
RUN chmod 666 /var/log/php7.2-fpm.log /var/log/php-fpm.log /var/log/nginx/error.log
#RUN chown www-data /var/log/php7.2-fpm.log

EXPOSE 8080

WORKDIR /var/www/html

#HEALTHCHECK --interval=5s --timeout=3s --retries=3 CMD curl -f http://localhost:8080 || exit 1

RUN \
    sed -i /etc/sudoers -re 's/^%sudo.*/%sudo ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
    sed -i /etc/sudoers -re 's/^root.*/root ALL=(ALL:ALL) NOPASSWD: ALL/g' && \
    sed -i /etc/sudoers -re 's/^#includedir.*/## **Removed the include directive** ##/g' && \
    echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

USER www-data
CMD [ "/start.sh" ]
