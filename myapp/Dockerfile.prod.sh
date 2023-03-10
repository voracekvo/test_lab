# Development version
FROM php:7.0-apache
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY . /var/www/html/

# Production version
FROM php:7.0-apache
COPY . /var/www/html/

