# Arcadia Finance

Arcadia Finance Application

//////////////////////

/api is App2

/app3 is App3

/files is the Back End App

//////////////////////

docker network create internal

docker run -dit -h mainapp --name=mainapp --net=internal matt262810/arcadia-main:noauth
docker run -dit -h mainapp --name=mainapp --net=internal arcadia_main

docker run -dit -h backend --name=backend --net=internal matt262810/arcadia-backend
docker run -dit -h backend --name=backend --net=internal arcadia_backend

docker run -dit -h app2 --name=app2 --net=internal matt262810/arcadia-app2:noauth
docker run -dit -h app2 --name=app2 --net=internal arcadia_app2

docker run -dit -h nginx --net=internal -p 80:80 -v path_to_nginx_conf_file:/etc/nginx/conf.d/default.conf nginx:latest

Use default.conf NGINX file for the NGINX API GW.