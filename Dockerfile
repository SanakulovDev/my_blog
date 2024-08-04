# PHP 8.3 asosidagi rasmni tanlang
FROM php:8.3-fpm

# Node.js va NPM ni o'rnatish
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Zaruriy tizim paketlarini o'rnatish
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    libpq-dev \
    curl

# PHP kengaytmalarini o'rnatish
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_pgsql

# Composer'ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravel loyihasini ishchi katalogiga nusxalash
WORKDIR /var/www/html
COPY . .

# Laravel huquqlarini o'rnatish
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Composer orqali PHP paketlarini o'rnatish
RUN composer install --prefer-dist --no-scripts --no-autoloader

# NPM orqali JavaScript paketlarini o'rnatish va kompilyatsiya qilish
RUN npm install && npm run build

# Composer autoload va skriptlarini ishga tushirish
RUN composer dump-autoload && composer run-script post-root-package-install

# FPM'ni port 9000 orqali tinglash
EXPOSE 9000 5173

CMD ["php-fpm"] && npm run dev