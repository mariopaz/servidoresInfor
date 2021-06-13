FROM php:7.0-apache

RUN Docker-php-ext-install mysqli && \
    pecl install -o -f redis \
    && rm -rf /tmp/pear && \
    docker-php-ext-enable redis
