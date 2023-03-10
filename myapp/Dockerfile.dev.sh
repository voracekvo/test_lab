FROM php:7.0-apache

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install PHP extensions required by the application
RUN docker-php-ext-install pdo_mysql \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb

# Copy application code to container
COPY . /var/www/html/

