# Dockerfile for PHP 8.3 with FPM

# Use official PHP image as base
FROM php:8.3-fpm

# Install system dependencies including networking tools for debugging
RUN apt-get update && apt-get install -y \
    nginx \
    libzip-dev \
    libonig-dev \
    curl \
    zip \
    unzip \
    git \
    nano \
    inetutils-ping \
    && docker-php-ext-install zip mbstring calendar

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Expose PHP-FPM port
EXPOSE 9000

# Run PHP-FPM
CMD ["php-fpm"]
