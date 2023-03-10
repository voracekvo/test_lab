FROM php:7.0.33-apache

RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libxml2-dev \
    libxslt-dev \
    libzip-dev \
    git \
    unzip \
    vim \
    wget

RUN docker-php-ext-install \
    bcmath \
    gd \
    intl \
    mbstring \
    mysqli \
    opcache \
    pdo_mysql \
    soap \
    xsl \
    zip \
    calendar

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY config/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

