FROM ubuntu:14.04

# Install.
RUN \
  sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/sources.list && \
  apt-get update && \
  apt-get -y upgrade && \
  apt-get install -y build-essential && \
  apt-get install -y software-properties-common && \
  apt-get install -y byobu curl git htop man unzip vim wget && \
  rm -rf /var/lib/apt/lists/*

# Set environment variables.
ENV HOME /root

# Install Nginx.
RUN \
  add-apt-repository -y ppa:nginx/stable && \
  apt-get update && \
  apt-get install -y nginx && \
  rm -rf /var/lib/apt/lists/* && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx && \
  rm /etc/nginx/sites-enabled/default

# Define mountable directories.
#VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]

# Define working directory.
WORKDIR /etc/nginx
COPY default.conf /etc/nginx/conf.d/

RUN sed -i -re 's/\/var\/log\/nginx\/(access|error).log/\/dev\/stdout/' /etc/nginx/nginx.conf && \
  sed -i -re '/^user www-data/d' /etc/nginx/nginx.conf && \
  touch /var/log/nginx/error.log && \
  chmod 666 /var/log/nginx/error.log && \
  chmod 777 /var/lib/nginx /run /var/log

# Define default command.
#CMD ["nginx"]

# Expose ports.
EXPOSE 8080
#EXPOSE 443
