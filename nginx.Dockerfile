FROM nginx:latest

# Suprascrie directorul de lucru
WORKDIR /etc/nginx

# Adaugă configurația default.conf
ADD nginx/conf.d/default.conf conf.d/default.conf

# Adaugă certificatele
ADD certificates/selfsigned.crt selfsigned.crt
ADD certificates/selfsigned.key selfsigned.key
