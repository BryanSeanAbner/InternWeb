# Sistem Pendaftaran Magang Nusantara TV

## Overview
Sistem pendaftaran magang yang terintegrasi dengan Google Sheets melalui Google Sheets API untuk monitoring real-time.

## Fitur Utama

### 1. Form Pendaftaran Publik
- Form pendaftaran yang responsif dan user-friendly
- Validasi data real-time
- Upload dokumen (CV, KTP, Kartu Pelajar, dll.)
- Integrasi dengan Google Sheets via Power Automate

### 2. Admin Panel
- Dashboard dengan statistik real-time
- Manajemen aplikasi pendaftaran
- Update status aplikasi
- Download dokumen pendaftar
- Export data ke CSV
- Filter dan pencarian



### 3. Integrasi Google Sheets
- Data otomatis masuk ke Google Sheets via API
- Monitoring real-time
- Backup data otomatis
- **File URL Integration** - URL file dokumen tersimpan di Google Sheets
- **Hyperlink Access** - Akses langsung ke file CV, KTP, Kartu Pelajar, dll.
- **File Dashboard** - Dashboard untuk mengakses semua file pendaftar

## Struktur Database

### Tabel: internship_applications
```sql
- id (Primary Key)
- nama_lengkap (String)
- email (String, Unique)
- no_telepon (String)
- jenis_kelamin (Enum: Laki-laki, Perempuan)
- tempat_lahir (String)
- tanggal_lahir (Date)
- domisili (String, Nullable)
- alamat_rumah (Text)
- asal_sekolah (String)
- tahun_angkatan (Integer)
- nim_nis (String)
- jurusan (String)
- semester (String)
- tanggal_mulai_magang (Date)
- tanggal_selesai_magang (Date)
- bidang_minat_magang (String)
- bidang_minat_lainnya (String, Nullable)
- cv_path (String, Nullable)
- ktp_path (String, Nullable)
- kartu_pelajar_path (String, Nullable)
- surat_magang_path (String, Nullable)
- transkip_nilai_path (String, Nullable)
- form_magang_ntv_path (String, Nullable)
- foto_diri_path (String, Nullable)
- screenshot_instagram_path (String, Nullable)
- status (Enum: pending, reviewed, approved, rejected, active, completed)
- notes (Text, Nullable)
- created_at (Timestamp)
- updated_at (Timestamp)
```



## Bidang Minat Magang

1. Social Media Editing
2. Master Control Room (MCR)
3. Produksi Program TV
4. Support Jadwal Program TV
5. Research and Development (R & D) Program TV
6. Support Marketing
7. Reporter Sosial Media Live Streaming
8. Lainnya

## Setup dan Instalasi

### 1. Prerequisites
- PHP 8.1+
- Laravel 10+
- MySQL/PostgreSQL
- Composer
- Node.js & NPM

### 2. Instalasi
```bash
# Clone repository
git clone <repository-url>
cd InternWeb

# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=internweb
DB_USERNAME=root
DB_PASSWORD=

# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed --class=InternshipApplicationSeeder

# Build assets
npm run build

# Create storage link
php artisan storage:link
```

### 3. Konfigurasi Google Sheets API
Lihat file `GOOGLE_SHEETS_API_SETUP.md` untuk panduan lengkap setup integrasi Google Sheets.

### 4. Environment Variables
```env
# Google Sheets Configuration
GOOGLE_SHEETS_CREDENTIALS_PATH=storage/app/credentials.json
GOOGLE_SHEETS_SPREADSHEET_ID=your_spreadsheet_id_here
GOOGLE_SHEETS_ENABLED=true

# File Upload Configuration
FILESYSTEM_DISK=public
```

## Routes

### Public Routes
```
GET  /form                    - Form pendaftaran
POST /form-submit            - Submit pendaftaran
```

### Admin Routes (Protected)
```
GET  /admin/internship-applications                    - Daftar aplikasi
GET  /admin/internship-applications/{id}              - Detail aplikasi
PUT  /admin/internship-applications/{id}/status       - Update status
GET  /admin/internship-applications/{id}/download/{fileType} - Download file
GET  /admin/internship-applications/export            - Export CSV
GET  /admin/internship-applications/dashboard         - Dashboard
DELETE /admin/internship-applications/{id}            - Hapus aplikasi
```

## Controllers

### FormController
- `show()` - Tampilkan form pendaftaran
- `submit()` - Proses pendaftaran

### Admin\InternshipApplicationController
- `index()` - Daftar aplikasi dengan filter
- `show()` - Detail aplikasi
- `updateStatus()` - Update status aplikasi
- `downloadFile()` - Download dokumen
- `export()` - Export ke CSV
- `dashboard()` - Dashboard statistik
- `destroy()` - Hapus aplikasi

## Models

### InternshipApplication
- Relasi dan accessor untuk status
- Scope untuk filtering
- File handling methods

## Views

### Public Views
- `form.blade.php` - Form pendaftaran
   
### Admin Views
- `admin/internship-applications/index.blade.php` - Daftar aplikasi
- `admin/internship-applications/show.blade.php` - Detail aplikasi
- `admin/internship-applications/dashboard.blade.php` - Dashboard

## File Upload

### Struktur Folder
```
storage/app/public/form/
├── cv_[timestamp]_[random].pdf
├── ktp_[timestamp]_[random].jpg
├── kartu_pelajar_[timestamp]_[random].jpg
├── surat_magang_[timestamp]_[random].pdf
├── transkip_nilai_[timestamp]_[random].pdf
├── form_magang_ntv_[timestamp]_[random].pdf
├── foto_diri_[timestamp]_[random].jpg
└── screenshot_instagram_[timestamp]_[random].jpg
```

### File Types yang Didukung
- **CV**: PDF (max 2MB)
- **KTP**: PDF (max 2MB)
- **KTM**: PDF (max 2MB)
- **Surat Magang dari Kampus**: PDF (max 2MB)
- **Transkrip Nilai**: PDF (max 2MB)
- **Form Magang NTV**: PDF (max 2MB)
- **Foto Diri**: JPG, PNG (max 2MB)
- **Screenshot Instagram**: JPG, PNG (max 2MB)

## Validasi

### Form Validation Rules
- Nama lengkap: required, max 255 chars
- Email: required, email format, unique
- No. telepon: required, max 20 chars
- Jenis kelamin: required, enum values
- Tanggal lahir: required, before today
- Tanggal magang: required, after today
- File uploads: required, specific mimes, max 2MB

## Security Features

1. **CSRF Protection** - Semua form dilindungi CSRF token
2. **File Validation** - Validasi tipe dan ukuran file
3. **SQL Injection Protection** - Menggunakan Eloquent ORM
4. **XSS Protection** - Output escaping di Blade templates
5. **Authentication** - Admin routes dilindungi middleware auth

## Monitoring dan Logging

### Laravel Logs
- Application submissions
- File uploads
- Google Sheets integration errors

### Google Sheets API Monitoring
- API execution history
- Error tracking
- Performance metrics

## Testing

### Manual Testing
```bash
# Test form submission
# Submit form pendaftaran dengan data lengkap
# Cek data masuk database
# Cek file uploads
# Cek Google Sheets integration
```

### Testing Steps
1. Submit form pendaftaran
2. Cek data masuk database
3. Cek file uploads
4. Cek Google Sheets integration
5. Test admin panel features

## File Management

### File Upload System
Sistem mendukung upload 8 jenis dokumen dengan validasi:

1. **CV** - PDF (max 2MB)
2. **KTP** - PDF (max 2MB)
3. **KTM** - PDF (max 2MB)
4. **Surat Magang dari Kampus** - PDF (max 2MB)
5. **Transkrip Nilai** - PDF (max 2MB)
6. **Form Magang NTV** - PDF (max 2MB)
7. **Foto Diri** - JPG, PNG (max 2MB)
8. **Screenshot Instagram** - JPG, PNG (max 2MB)

### File Storage
- **Location**: `storage/app/public/form/`
- **Naming**: `{type}_{timestamp}_{random}.{extension}`
- **Access**: Public URL via symbolic link
- **Backup**: Manual backup recommended

### Google Sheets File Integration
Setiap file yang diupload akan:
1. **Disimpan** di storage Laravel
2. **URL generated** untuk akses publik
3. **Dikirim** ke Google Sheets via Power Automate
4. **Tersedia** sebagai hyperlink di Google Sheets

### File Access Methods
1. **Direct URL**: `https://domain.com/storage/form/filename.ext`
2. **Admin Panel**: Download via admin interface
3. **Google Sheets**: Click hyperlink untuk download
4. **API**: Programmatic access (if needed)

### File Security
- **Unique naming** untuk mencegah conflict
- **Public access** untuk kemudahan monitoring
- **No authentication** required untuk file access
- **Automatic cleanup** jika database insertion fails

## Maintenance

### Regular Tasks
1. **Backup Database** - Harian
2. **Clean Old Files** - Mingguan
3. **Monitor Logs** - Harian
4. **Update Dependencies** - Bulanan

### Performance Optimization
1. **File Storage** - Gunakan CDN untuk production
2. **Database Indexing** - Index pada kolom yang sering dicari
3. **Caching** - Cache statistik dashboard
4. **Queue Jobs** - Async Google Sheets integration

## Troubleshooting

### Common Issues

1. **File Upload Error**
   - Cek storage permissions
   - Cek disk space
   - Cek file size limits

2. **Google Sheets Integration Error**
   - Cek credentials.json
   - Cek spreadsheet ID
   - Cek service account permissions

3. **Database Connection Error**
   - Cek database credentials
   - Cek database server status
   - Cek connection limits

### Error Logs
```bash
# View Laravel logs
tail -f storage/logs/laravel.log

# View specific errors
grep "Google Sheets" storage/logs/laravel.log
grep "File upload" storage/logs/laravel.log
```

## Support

Untuk bantuan teknis:
1. Cek dokumentasi ini
2. Cek Laravel documentation
3. Cek Power Automate documentation
4. Hubungi tim development

## Changelog

### v1.3.0 (2025-01-15)
- Replaced Power Automate with Google Sheets API
- Added GoogleSheetsService for direct API integration
- Updated configuration to use credentials.json
- Enhanced error handling and logging

### v1.2.0 (2025-01-15)
- Removed status tracking feature (application-status page)
- Removed status field from Google Sheets integration
- Simplified public routes and controllers
- Cleaned up documentation

### v1.1.0 (2025-01-15)
- Added file URL integration with Google Sheets
- File hyperlink access in Google Sheets
- Enhanced file management documentation
- Improved Google Sheets setup guide

### v1.0.0 (2025-01-15)
- Initial release
- Form pendaftaran
- Admin panel
- Google Sheets integration
- File upload system
- Dashboard analytics
