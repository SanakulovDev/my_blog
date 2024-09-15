FROM php:8.2.0-fpm

# PHP kutubxonalarini o'rnatish
RUN apt-get update && apt-get install -y \
        cron \
        git \
        libzip-dev \
        zip \
        unzip \
        libwebp-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libfreetype6-dev \
        libicu-dev \
        nodejs \
        npm \
    && docker-php-ext-configure gd \
            --with-webp \
            --with-jpeg \
            --with-freetype \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
         zip \
         bcmath \
         gd \
         mysqli \
         pdo_mysql \
         intl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Composer va NPM ishlatish uchun kerakli fayllar o'rnatildi

# Ishchi katalogni o'rnatish
WORKDIR /var/www/html

# Cron fayllarni yuklash
COPY cron-file /etc/cron.d/cron-file
COPY run-daemons.sh /run-daemons.sh

# Bootstrap va frontend kutubxonalarni o'rnatish
# RUN npm install bootstrap @popperjs/core && npm run dev

# ENTRYPOINT
ENTRYPOINT /bin/bash /run-daemons.sh
