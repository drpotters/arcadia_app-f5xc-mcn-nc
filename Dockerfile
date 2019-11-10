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
COPY /MainApp/ /var/www/html/
COPY /files/ /var/www/html/files/
WORKDIR /var/www/html/

# System account and environment variables
RUN useradd -r -u 1001 user
RUN chown -RL user: /var/log/apache2/ /var/run/apache2/ /var/www/html/
ENV PATH="/var/www/html:${PATH}"
 
# EXPOSE 80
