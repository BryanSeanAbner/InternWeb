#!/bin/bash

# Set ServerName globally to avoid warnings
echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Create necessary directories
mkdir -p /var/log/apache2
mkdir -p /var/run/apache2

# Set proper permissions
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/storage
chmod -R 755 /var/www/html/bootstrap/cache

# Start Apache in foreground
exec apache2-foreground 