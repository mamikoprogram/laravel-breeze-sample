FROM php:8.1-fpm

RUN apt update; \
    apt upgrade -y; \
    apt install -y --no-install-recommends \
            curl \
            git \
            pngquant \
            zip \
            unzip \
            libzip-dev \
            libz-dev \
            libpq-dev \
            libjpeg-dev \
            libpng-dev \
            libfreetype6-dev \
            libssl-dev \
            libwebp-dev \
            libxpm-dev \
            libmcrypt-dev \
            libonig-dev

RUN docker-php-ext-install pdo_mysql; \
    docker-php-ext-configure gd \
            --prefix=/usr \
            --with-jpeg \
            --with-webp \
            --with-xpm \
            --with-freetype; \
    docker-php-ext-install gd

RUN docker-php-ext-install zip bcmath

RUN apt update; \
    apt install -y --no-install-recommends \
            imagemagick \
            libmagickwand-dev

RUN pecl install imagick

RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

RUN apt install -y busybox-static

ENTRYPOINT busybox crond -f -L /dev/stderr

RUN apt install -y iputils-ping telnet
