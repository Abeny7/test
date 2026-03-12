# Use official PHP with Apache
FROM php:8.2-apache

# Copy project files to Apache web root
COPY . /var/www/html/

# Enable Apache rewrite module (optional but common)
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80
