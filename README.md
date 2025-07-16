# Website Manajemen Internship Nusantara TV

Website manajemen program internship untuk Nusantara TV menggunakan Laravel dan PHP.

## ✨ Fitur Utama

### 1. **Home Page (Dashboard Public)**
- Slogan: "Mulai karirmu di Dunia Broadcasting bersama Nusantara TV"
- Info program internship (tujuan, durasi, kategori, syarat & ketentuan)
- Tombol "Daftar Sekarang" ke Google Form
- Link ke berita, bidang magang, testimoni, dan kontak

### 2. **Berita Kegiatan Magang (CRUD)**
- Admin: Tambah, edit, hapus berita dengan foto/video
- Public: Lihat daftar dan detail berita
- Upload media: Foto (JPG, PNG, GIF) dan Video (MP4, MOV, AVI)

### 3. **Bidang Magang (CRUD)**
- Admin: Kelola bidang magang (Video Editor, Content Creator, Jurnalis, dll)
- Public: Lihat daftar bidang magang

### 4. **Testimoni Alumni (CRUD)**
- Admin: Tambah, edit, hapus testimoni dengan foto alumni
- Public: Lihat testimoni alumni
- Upload foto: JPG, PNG, GIF

### 5. **Kontak & Sosial Media**
- Alamat kantor, email, telepon
- Instagram, YouTube
- Floating WhatsApp button

## 🧱 Teknologi

- **Backend:** Laravel 11, PHP 8.1+
- **Database:** MySQL/SQLite
- **Frontend:** TailwindCSS, Blade
- **Auth:** Laravel Breeze
- **Media:** Spatie Laravel MediaLibrary
- **Server:** Apache/Nginx

## 🚀 Instalasi

### Prerequisites
- PHP 8.1+
- Composer
- MySQL/SQLite
- Node.js & NPM

### Langkah Instalasi

1. **Clone repository**
```bash
git clone <repository-url>
cd InternWeb
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Setup environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Setup database**
```bash
php artisan migrate
php artisan db:seed
```

5. **Build assets**
```bash
npm run build
```

6. **Create storage link**
```bash
php artisan storage:link
```

## 👥 Role Akses

### **Admin (Login Required)**
- Akses: `/admin`
- Fitur: CRUD berita, bidang magang, testimoni
- Login: `admin@nusatv.com` / `password`

### **Public (No Login Required)**
- Akses: `/dashboard`, `/posts`, `/categories`, `/testimonials`
- Fitur: Lihat data saja

## 📁 Struktur File

```
InternWeb/
├── app/
│   ├── Http/Controllers/
│   │   ├── PostController.php
│   │   ├── CategoryController.php
│   │   └── TestimonialController.php
│   └── Models/
│       ├── Post.php
│       ├── Category.php
│       └── Testimonial.php
├── resources/views/
│   ├── dashboard.blade.php (public)
│   ├── posts/ (public)
│   ├── categories/ (public)
│   ├── testimonials/ (public)
│   └── admin/ (admin CRUD)
└── routes/web.php
```

## 🔧 Konfigurasi

### **Upload Media**
- **Berita:** Max 10MB per file, format: JPG, PNG, GIF, MP4, MOV, AVI
- **Testimoni:** Max 5MB per file, format: JPG, PNG, GIF
- **Storage:** `storage/app/public/`

### **WhatsApp Button**
- URL: `https://wa.me/6281234567890`
- Ganti nomor di `resources/views/layouts/app.blade.php`

### **Google Form Daftar**
- URL: `https://bit.ly/daftarmagang-nusatv`
- Ganti di `resources/views/dashboard.blade.php`

## 🎯 Penggunaan

### **Untuk Admin:**
1. Login dengan akun admin
2. Akses `/admin` untuk dashboard admin
3. Kelola berita, bidang magang, testimoni
4. Upload foto/video saat tambah/edit data

### **Untuk Public:**
1. Akses `/dashboard` untuk info program
2. Lihat berita di `/posts`
3. Lihat bidang magang di `/categories`
4. Lihat testimoni di `/testimonials`
5. Hubungi via WhatsApp button

## 📞 Kontak

- **Email:** magang@nusatv.com
- **Telepon:** 0812-3456-7890
- **Instagram:** @nusatv
- **YouTube:** Nusantara TV

## 🔄 Update & Maintenance

### **Menambah Admin Baru:**
1. Register via `/register`
2. Atau tambah manual di database

### **Mengganti Kontak:**
1. Edit di `resources/views/dashboard.blade.php`
2. Edit WhatsApp di `resources/views/layouts/app.blade.php`

### **Backup Database:**
```bash
php artisan db:backup
```

## 📝 License

© 2024 Nusantara TV. All rights reserved.
