FROM nginx:latest

# Suprascrie directorul de lucru
WORKDIR /etc/nginx

# Adaugă configurația default.conf
COPY ./nginx /etc

# Adaugă certificatele
COPY ./certificates /etc/nginx/ssl
