FROM php:8.2-apache

# Enable Apache mod_rewrite for nice URLs if needed
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all clean website files into the container webroot
COPY . /var/www/html/

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

