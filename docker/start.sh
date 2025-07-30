#!/bin/bash

# Set ServerName globally
echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Start Apache in foreground
exec apache2-foreground 