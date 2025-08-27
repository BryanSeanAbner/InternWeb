# Setup Google Sheets API untuk Integrasi Laravel

## Overview
Dokumen ini menjelaskan cara setup Google Sheets API untuk mengirim data pendaftaran magang dari Laravel ke Google Sheets secara langsung menggunakan credentials.json.

## Prerequisites
1. Google Cloud Console account
2. Google Sheets dengan akses edit
3. Laravel application yang sudah terkonfigurasi
4. Composer untuk install Google API Client

## Langkah-langkah Setup

### 1. Setup Google Cloud Console

1. **Buka Google Cloud Console**
   - Kunjungi [Google Cloud Console](https://console.cloud.google.com/)
   - Login dengan Google account

2. **Buat Project Baru**
   - Klik "Select a project" → "New Project"
   - Beri nama project: "Internship Application System"
   - Klik "Create"

3. **Enable Google Sheets API**
   - Di sidebar, pilih "APIs & Services" → "Library"
   - Cari "Google Sheets API"
   - Klik "Google Sheets API" → "Enable"

4. **Buat Service Account**
   - Di sidebar, pilih "APIs & Services" → "Credentials"
   - Klik "Create Credentials" → "Service Account"
   - Isi informasi service account:
     - Name: "internship-sheets-service"
     - Description: "Service account for internship application sheets"
   - Klik "Create and Continue"
   - Skip role assignment, klik "Continue"
   - Klik "Done"

5. **Generate JSON Key**
   - Klik service account yang baru dibuat
   - Tab "Keys" → "Add Key" → "Create new key"
   - Pilih "JSON" → "Create"
   - File JSON akan otomatis download

6. **Rename dan Pindahkan File**
   - Rename file menjadi `credentials.json`
   - Pindahkan ke `storage/app/credentials.json`

### 2. Setup Google Sheets

1. **Buat Google Sheets baru**
   - Buka [Google Sheets](https://sheets.google.com)
   - Buat spreadsheet baru dengan nama "Pendaftaran Magang Nusantara TV"
   - Catat Spreadsheet ID dari URL

2. **Share Spreadsheet dengan Service Account**
   - Klik "Share" di pojok kanan atas
   - Tambahkan email service account (dari credentials.json)
   - Berikan permission "Editor"
   - Klik "Send"

3. **Setup Headers di Google Sheets**
   ```
   A1: ID
   B1: Nama Lengkap
   C1: Email
   D1: No. Telepon
   E1: Jenis Kelamin
   F1: Tempat Lahir
   G1: Tanggal Lahir
   H1: Domisili
   I1: Alamat Rumah
   J1: Asal Sekolah
   K1: Tahun Angkatan
   L1: NIM/NIS
   M1: Jurusan
   N1: Semester
   O1: Tanggal Mulai Magang
   P1: Tanggal Selesai Magang
   Q1: Bidang Minat
   R1: Bidang Lainnya
   T1: Tanggal Daftar
   U1: Waktu Daftar
   V1: CV URL
   W1: KTP URL
   X1: Kartu Pelajar URL
   Y1: Surat Magang URL
   Z1: Transkip Nilai URL
   AA1: Form Magang NTV URL
   AB1: Foto Diri URL
   AC1: Screenshot Instagram URL
   ```

### 3. Install Google API Client

```bash
composer require google/apiclient
```

### 4. Konfigurasi Laravel

1. **Update .env file**
   ```env
   # Google Sheets Configuration
   GOOGLE_SHEETS_CREDENTIALS_PATH=storage/app/credentials.json
   GOOGLE_SHEETS_SPREADSHEET_ID=your_spreadsheet_id_here
   GOOGLE_SHEETS_ENABLED=true
   ```

2. **Pastikan credentials.json ada**
   ```bash
   # Cek apakah file ada
   ls storage/app/credentials.json
   
   # Jika tidak ada, copy dari download folder
   cp ~/Downloads/your-downloaded-file.json storage/app/credentials.json
   ```

3. **Set permission file**
   ```bash
   chmod 600 storage/app/credentials.json
   ```

### 5. Test Integrasi

1. **Jalankan aplikasi Laravel**
   ```bash
   php artisan serve
   ```

2. **Submit form pendaftaran**
   - Buka form pendaftaran
   - Isi data lengkap
   - Upload file-file yang diperlukan
   - Submit form

3. **Cek Google Sheets**
   - Buka Google Sheets
   - Cek apakah data masuk di baris baru

4. **Cek Laravel logs**
   ```bash
   tail -f storage/logs/laravel.log
   ```

## Struktur Data yang Dikirim

### Format Data Row
```php
[
    'id',                    // A - ID aplikasi
    'nama_lengkap',          // B - Nama lengkap
    'email',                 // C - Email
    'no_telepon',            // D - No. telepon
    'jenis_kelamin',         // E - Jenis kelamin
    'tempat_lahir',          // F - Tempat lahir
    'tanggal_lahir',         // G - Tanggal lahir (Y-m-d)
    'domisili',              // H - Domisili
    'alamat_rumah',          // I - Alamat rumah
    'asal_sekolah',          // J - Asal sekolah
    'tahun_angkatan',        // K - Tahun angkatan
    'nim_nis',               // L - NIM/NIS
    'jurusan',               // M - Jurusan
    'semester',              // N - Semester
    'tanggal_mulai_magang',  // O - Tanggal mulai magang
    'tanggal_selesai_magang',// P - Tanggal selesai magang
    'bidang_minat_magang',   // Q - Bidang minat
    'bidang_minat_lainnya',  // R - Bidang lainnya
    'tanggal_daftar',        // T - Tanggal daftar (Y-m-d)
    'waktu_daftar',          // U - Waktu daftar (H:i:s)
    'cv_url',                // V - URL CV
    'ktp_url',               // W - URL KTP
    'kartu_pelajar_url',     // X - URL Kartu Pelajar
    'surat_magang_url',      // Y - URL Surat Magang
    'transkip_nilai_url',    // Z - URL Transkip
    'form_magang_ntv_url',   // AA - URL Form NTV
    'foto_diri_url',         // AB - URL Foto Diri
    'screenshot_instagram_url' // AC - URL Screenshot IG
]
```

## File Access di Google Sheets

### 1. Menggunakan URL Langsung
- Setiap file memiliki URL yang dapat diakses langsung
- Format URL: `https://your-domain.com/storage/form/filename.ext`
- Klik URL di cell untuk membuka file di browser

### 2. Membuat Hyperlink
```
CV: =HYPERLINK(V2, "📄 Download CV")
KTP: =HYPERLINK(W2, "🆔 Download KTP")
Kartu Pelajar: =HYPERLINK(X2, "🎓 Download Kartu Pelajar")
Surat Magang: =HYPERLINK(Y2, "📋 Download Surat Magang")
Transkip Nilai: =HYPERLINK(Z2, "📊 Download Transkip")
Form NTV: =HYPERLINK(AA2, "📝 Download Form NTV")
Foto Diri: =HYPERLINK(AB2, "📸 Download Foto")
Screenshot IG: =HYPERLINK(AC2, "📱 Download Screenshot IG")
```

### 3. Dashboard File Access
```
=HYPERLINK(V2, "📄 CV") & " | " & 
HYPERLINK(W2, "🆔 KTP") & " | " & 
HYPERLINK(X2, "🎓 Kartu") & " | " & 
HYPERLINK(Y2, "📋 Surat") & " | " & 
HYPERLINK(Z2, "📊 Transkip") & " | " & 
HYPERLINK(AA2, "📝 Form") & " | " & 
HYPERLINK(AB2, "📸 Foto") & " | " & 
HYPERLINK(AC2, "📱 IG")
```

## Monitoring dan Troubleshooting

### 1. Laravel Logs
```bash
# View Laravel logs
tail -f storage/logs/laravel.log

# View specific errors
grep "Google Sheets" storage/logs/laravel.log
grep "Failed to" storage/logs/laravel.log
```

### 2. Common Issues

**401 Unauthorized**
- Cek credentials.json apakah valid
- Cek apakah service account email sudah di-share ke spreadsheet
- Cek apakah Google Sheets API sudah enabled

**404 Not Found**
- Cek spreadsheet ID di .env
- Cek apakah spreadsheet ada dan accessible

**500 Internal Error**
- Cek format data yang dikirim
- Cek apakah semua field required sudah terisi

### 3. Testing Service
```php
// Di tinker atau controller test
$service = new \App\Services\GoogleSheetsService();
$isConfigured = $service->isConfigured();
dd($isConfigured);

// Test add row
$testData = [
    'id' => 999,
    'nama_lengkap' => 'Test User',
    'email' => 'test@example.com',
    // ... other fields
];
$success = $service->addRow($testData);
dd($success);
```

## Security Considerations

1. **Credentials Security**
   - Jangan commit credentials.json ke git
   - Tambahkan `storage/app/credentials.json` ke .gitignore
   - Set file permission 600

2. **Service Account Security**
   - Gunakan service account khusus untuk aplikasi ini
   - Jangan share credentials dengan pihak lain
   - Monitor usage di Google Cloud Console

3. **Data Privacy**
   - Pastikan spreadsheet hanya diakses oleh authorized users
   - Enkripsi data sensitif jika diperlukan

## Maintenance

1. **Regular Monitoring**
   - Cek Laravel logs setiap hari
   - Monitor error rates dan response times
   - Cek Google Cloud Console untuk usage

2. **Backup Strategy**
   - Backup credentials.json secara berkala
   - Backup Google Sheets secara berkala
   - Simpan data di database Laravel sebagai backup

3. **Updates**
   - Update Google API Client secara berkala
   - Test integrasi setelah update
   - Monitor breaking changes

## Support

Jika mengalami masalah:
1. Cek dokumentasi ini
2. Cek Laravel logs
3. Cek Google Cloud Console
4. Cek Google Sheets API documentation
5. Hubungi tim development
