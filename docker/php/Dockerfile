FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev \
        wget \
        git \
            --no-install-recommends
WORKDIR /app
