FROM php:8.2-fpm

# Instalations for PHP and MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install zip
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && docker-php-ext-install zip

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Config of work path
WORKDIR /var/www

# Copy project 
COPY . .

# Install dependencies of Composer
RUN composer install

# Export the port 9000
EXPOSE 9000

# Command for initializing PHP-FPM
CMD ["php-fpm"]
