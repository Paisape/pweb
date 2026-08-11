FROM richarvey/nginx-php-fpm:3.1.6

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html

# Configure webroot & PHP options
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html
ENV ERRORS 0

EXPOSE 80
