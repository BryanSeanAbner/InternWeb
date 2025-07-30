# InternWeb - Laravel Application

Aplikasi web untuk sistem internship yang dibangun dengan Laravel, MySQL, dan Tailwind CSS.

## 🚀 Railway Deployment

### Quick Start

1. **Fork/Clone repository ini**
2. **Buka [Railway.app](https://railway.app)**
3. **Buat project baru**
4. **Tambahkan service MySQL**
5. **Tambahkan service GitHub Repo** (pilih repository ini)
6. **Set environment variables** di Railway Dashboard

### Environment Variables

Set di Railway Dashboard:

```env
APP_NAME=InternWeb
APP_ENV=production
APP_KEY=base64:your-key-here
APP_DEBUG=false
APP_URL=https://your-app-name.up.railway.app

DB_CONNECTION=mysql
DB_HOST=${MYSQLHOST}
DB_PORT=${MYSQLPORT}
DB_DATABASE=${MYSQLDATABASE}
DB_USERNAME=${MYSQLUSER}
DB_PASSWORD=${MYSQLPASSWORD}

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Post-Deployment Commands

Setelah deployment pertama, jalankan:

```bash
# Generate application key
railway run php artisan key:generate

# Run migrations
railway run php artisan migrate

# Seed database (optional)
railway run php artisan db:seed
```

## 🛠️ Local Development

```bash
# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start server
php artisan serve
```

## 📁 Project Structure

```
InternWeb/
├── app/                    # Laravel application logic
├── resources/
│   ├── views/             # Blade templates
│   ├── css/               # Tailwind CSS
│   └── js/                # Alpine.js
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── routes/                # Application routes
├── public/                # Public assets
└── config/                # Configuration files
```

## 🎨 Features

- **Authentication** - Login/Register system
- **Admin Dashboard** - CRUD operations
- **News Management** - Blog/News system
- **Testimonials** - Customer testimonials
- **Responsive Design** - Mobile-friendly UI
- **Tailwind CSS** - Modern styling
- **Alpine.js** - Interactive components

## 🔧 Technologies

- **Backend**: Laravel 12, PHP 8.2
- **Frontend**: Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Deployment**: Railway.app

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
