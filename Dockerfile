# Use PHP 8.4 with Apache
FROM php:8.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl

# Configure PHP for production
RUN echo "memory_limit = 512M" > /usr/local/etc/php/conf.d/memory-limit.ini \
    && echo "max_execution_time = 300" > /usr/local/etc/php/conf.d/max-execution-time.ini \
    && echo "upload_max_filesize = 64M" > /usr/local/etc/php/conf.d/upload-max-filesize.ini \
    && echo "post_max_size = 64M" > /usr/local/etc/php/conf.d/post-max-size.ini

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
RUN npm install

# Install terser for production build
RUN npm install --save-dev terser

# Build Vite assets for PRODUCTION
ENV NODE_ENV=production
ENV VITE_APP_ENV=production
RUN npm run build:production

# Verify Vite build
RUN echo "=== Vite Build Verification ===" && \
    ls -la public/build/ && \
    echo "=== Checking for manifest files ===" && \
    find public/build/ -name "*.json" && \
    echo "=== CSS Files ===" && \
    find public/build/ -name "*.css" && \
    echo "=== JS Files ===" && \
    find public/build/ -name "*.js"

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public/build

# Configure Apache
RUN a2enmod rewrite

# Set environment variables
ENV APACHE_RUN_USER=www-data
ENV APACHE_RUN_GROUP=www-data
ENV APACHE_LOG_DIR=/var/log/apache2

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]