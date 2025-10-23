FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpq-dev \n    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \n    && docker-php-ext-install pdo pdo_pgsql

COPY . /var/www/html/
