# Use the official PHP image with Apache
FROM php:8.2-apache

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring zip gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets if needed (optional)
RUN npm install && npm run build || echo "No build step"

# Set correct Apache DocumentRoot to Laravel public/
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Add AllowOverride for .htaccess
RUN sed -i '/DocumentRoot/a <Directory /var/www/html/public>\n\
    AllowOverride All\n\
</Directory>' /etc/apache2/sites-available/000-default.conf

# Ensure permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 8080

# Start Apache
CMD ["apache2-foreground"]
