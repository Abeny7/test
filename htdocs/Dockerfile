# Use official PHP with Apache
FROM php:8.2-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to Apache web root
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80
