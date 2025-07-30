# InternWeb - Docker Setup

## Prerequisites
- Docker
- Docker Compose

## Quick Start

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd InternWeb
   ```

2. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

3. **Build and start containers**
   ```bash
   docker-compose up --build
   ```

4. **Generate application key**
   ```bash
   docker-compose exec app php artisan key:generate
   ```

5. **Run migrations**
   ```bash
   docker-compose exec app php artisan migrate
   ```

6. **Seed database (optional)**
   ```bash
   docker-compose exec app php artisan db:seed
   ```

## Access Application
- **Web Application**: http://localhost:8000
- **Database**: localhost:3306 (user: laravel, password: secret)

## Development Commands

### Build assets
```bash
docker-compose exec app npm run build
```

### Watch assets for development
```bash
docker-compose exec app npm run dev
```

### Run tests
```bash
docker-compose exec app php artisan test
```

### Access container shell
```bash
docker-compose exec app bash
```

## Production Deployment

### Build production image
```bash
docker build -t internweb .
```

### Run production container
```bash
docker run -p 80:80 -e APP_ENV=production internweb
```

## Environment Variables

Make sure to set the following environment variables in your `.env` file:

```env
APP_NAME=InternWeb
APP_ENV=local
APP_KEY=base64:your-key-here
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

## Troubleshooting

### Permission Issues
If you encounter permission issues, run:
```bash
docker-compose exec app chown -R www-data:www-data /var/www/html
```

### Clear Cache
```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear
```

### Rebuild Containers
```bash
docker-compose down
docker-compose up --build
``` 