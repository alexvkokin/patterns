FROM php:8.1-fpm
RUN apt-get update && apt-get -y --no-install-recommends install git \
    zip unzip \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*
WORKDIR /app
