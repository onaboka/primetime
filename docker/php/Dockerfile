FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    git \
    unzip \
    autoconf \
    g++ \
    make \
    linux-headers

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY php.ini /usr/local/etc/php/

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
