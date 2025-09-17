FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite
WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

WORKDIR /var/www/html/public

EXPOSE 80

CMD ["apache2-foreground"]
