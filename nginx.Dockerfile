FROM nginx:latest

# Suprascrie directorul de lucru
WORKDIR /var/www/html

# Adaugă configurația default.conf
COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

# Adaugă certificatele
COPY ./certificates /etc/nginx/ssl
