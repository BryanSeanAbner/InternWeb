FROM railwayapp/php:8.2

# Install ekstensi exif
RUN docker-php-ext-install exif

# Copy project files
COPY . /app
WORKDIR /app

# Install dependencies
RUN composer install --optimize-autoloader --no-interaction --no-scripts

# (Opsional) Build assets jika pakai npm
# RUN npm install && npm run build

# Expose port 8080
EXPOSE 8080

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"] 