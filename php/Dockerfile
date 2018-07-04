FROM php:7.2-apache

RUN  a2enmod rewrite
COPY ./php/php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmcrypt-dev \
    libicu-dev \
    libxml2-dev \
    git \
    vim \
    zip \
    unzip \
  && docker-php-ext-install \
    pdo_mysql \
    mbstring \ 
    intl \
    simplexml \
  && apt-get clean

# install composer
RUN curl -sS https://getcomposer.org/installer \
| php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
RUN mkdir ./public
ADD ./public /var/www/html
