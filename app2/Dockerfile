FROM debian:stable-slim
 
LABEL maintainer="Matthieu DIERICK" version="1.0.0"
LABEL contact="matt262810@gmail.com"
 
# Core dependencies
RUN apt-get update && \
              apt-get install -y apache2 curl php7.3 php7.3-xml php7.3-zip zip && \
              apt-get install -y python3 python3-pip && \
              pip3 install python-docx requests xlsxwriter && \
              apt-get remove -y python3-dev python3-pip && \
              apt-get autoclean -y && \
              apt-get autoremove -y && \
              apt-get clean -y && \
              rm -rf /var/lib/apt/lists/*
 
# Arcadia
COPY /api/ /var/www/html/api/

#WORKDIR /var/www/html/

# System account and environment variables
RUN useradd -r -u 1001 user
RUN chown -RL user: /var/log/apache2/ /var/run/apache2/ /var/www/html/
ENV PATH="/var/www/html:${PATH}"

# Start Apache
ENV APACHE_RUN_USER  www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR   /var/log/apache2
ENV APACHE_PID_FILE  /var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR   /var/run/apache2
ENV APACHE_LOCK_DIR  /var/lock/apache2
ENV APACHE_LOG_DIR   /var/log/apache2

RUN mkdir -p $APACHE_RUN_DIR
RUN mkdir -p $APACHE_LOCK_DIR
RUN mkdir -p $APACHE_LOG_DIR

EXPOSE 80

CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]
