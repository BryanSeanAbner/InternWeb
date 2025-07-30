#!/bin/bash

# Set ServerName globally to avoid warnings
echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Create necessary directories
mkdir -p /var/log/apache2
mkdir -p /var/run/apache2
mkdir -p /var/lock/apache2

# Set proper permissions
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/storage
chmod -R 755 /var/www/html/bootstrap/cache
chmod -R 755 /var/www/html/public/build

# Generate Laravel key if not exists
if [ ! -f /var/www/html/.env ]; then
    echo "APP_NAME=Laravel" > /var/www/html/.env
    echo "APP_ENV=production" >> /var/www/html/.env
    echo "APP_KEY=" >> /var/www/html/.env
    echo "APP_DEBUG=false" >> /var/www/html/.env
    echo "APP_URL=http://localhost" >> /var/www/html/.env
    echo "LOG_CHANNEL=stack" >> /var/www/html/.env
    echo "LOG_LEVEL=debug" >> /var/www/html/.env
    echo "DB_CONNECTION=mysql" >> /var/www/html/.env
    echo "DB_HOST=127.0.0.1" >> /var/www/html/.env
    echo "DB_PORT=3306" >> /var/www/html/.env
    echo "DB_DATABASE=laravel" >> /var/www/html/.env
    echo "DB_USERNAME=root" >> /var/www/html/.env
    echo "DB_PASSWORD=" >> /var/www/html/.env
    echo "CACHE_DRIVER=file" >> /var/www/html/.env
    echo "FILESYSTEM_DISK=local" >> /var/www/html/.env
    echo "QUEUE_CONNECTION=sync" >> /var/www/html/.env
    echo "SESSION_DRIVER=file" >> /var/www/html/.env
    echo "SESSION_LIFETIME=120" >> /var/www/html/.env
fi

# Generate application key
php artisan key:generate --force

# Clear Laravel caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Start Apache in foreground
exec apache2-foreground 