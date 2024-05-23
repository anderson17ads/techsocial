FROM php:8.2-fpm

# Instalations for PHP and MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install zip
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && docker-php-ext-install zip \ 
    && apt-get install -y unzip

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Config of work path
WORKDIR /var/www

# Copy project 
COPY . .

# Export the port 9000
EXPOSE 9000

# Command for initializing PHP-FPM
CMD ["php-fpm"]
