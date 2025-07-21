FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --optimize-autoloader --no-interaction --no-scripts

# (Opsional) Build assets jika pakai npm
# RUN npm install && npm run build

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"] 