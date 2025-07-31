# Setup Data Sample untuk Nusantara TV Internship

## Cara Setup Data Sample

Setelah melakukan `git pull` dari repository, ikuti langkah-langkah berikut:

### 1. Install Dependencies
```bash
composer install
npm install
```

### 2. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Setup Database
```bash
php artisan migrate:fresh --seed
```

### 4. Build Assets
```bash
npm run build
```

### 5. Create Storage Link
```bash
php artisan storage:link
```

## Data yang Akan Ditambahkan

### Kategori Bidang Magang:
- **BIDANG PRODUKSI** (Hijau)
- **JURNALIS** (Biru)
- **CONTENT CREATOR** (Orange)
- **VIDEO EDITOR** (Merah)
- **SOCIAL MEDIA** (Ungu)

### Post/Berita Sample:
1. **"Rumornya Cilla"** - Kategori: BIDANG PRODUKSI
2. **"Sukses Magang di Bidang Jurnalistik"** - Kategori: JURNALIS
3. **"Kreativitas Tanpa Batas di Content Creation"** - Kategori: CONTENT CREATOR
4. **"Tips Sukses Magang di Nusantara TV"** - Kategori: BIDANG PRODUKSI
5. **"Kisah Inspiratif Alumni Magang"** - Kategori: JURNALIS

### User Admin:
- **Email:** adminntv@gmail.com
- **Password:** pswd
- **Username:** admin

## Fitur yang Bisa Dicoba:

1. **Klik kotak kategori** di halaman home untuk melihat post terkait
2. **Klik "Read more"** untuk melihat detail post
3. **Login sebagai admin** untuk mengelola konten
4. **Testimonial section** di halaman kategori

## Troubleshooting

Jika ada error, coba:
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

## Akses Website:
- **Public:** `http://localhost/InternWeb` atau sesuai konfigurasi server
- **Admin:** Login dengan email `adminntv@gmail.com` dan password `pswd` 