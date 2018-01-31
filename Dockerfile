FROM richarvey/nginx-php-fpm:latest

RUN apk add mysql-client

WORKDIR /var/www/somePhp
