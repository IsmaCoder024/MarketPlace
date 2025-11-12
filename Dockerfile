FROM php:8.2-apache

# Install system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip zip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libzip-dev nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring zip gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend (if exists)
RUN npm install && npm run build || echo "No build step"

# Set DocumentRoot to /public only ONCE
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' \
        /etc/apache2/sites-available/000-default.conf

# Allow .htaccess inside /public
RUN sed -i '/DocumentRoot/a <Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' \
    /etc/apache2/sites-available/000-default.conf

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 8080

CMD ["apache2-foreground"]
