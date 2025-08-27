# Setup Credentials.json untuk Google Sheets API

## Overview
File `credentials.json` adalah file kunci yang diperlukan untuk mengintegrasikan Laravel dengan Google Sheets API.

## Lokasi File
```
storage/app/credentials.json
```

## Format File
File credentials.json memiliki format seperti ini:
```json
{
  "type": "service_account",
  "project_id": "your-project-id",
  "private_key_id": "your-private-key-id",
  "private_key": "-----BEGIN PRIVATE KEY-----\nYOUR_PRIVATE_KEY_HERE\n-----END PRIVATE KEY-----\n",
  "client_email": "your-service-account@your-project-id.iam.gserviceaccount.com",
  "client_id": "your-client-id",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/your-service-account%40your-project-id.iam.gserviceaccount.com",
  "universe_domain": "googleapis.com"
}
```

## Cara Mendapatkan File

### 1. Dari Google Cloud Console
1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. Pilih project Anda
3. Buka "APIs & Services" → "Credentials"
4. Klik service account yang sudah dibuat
5. Tab "Keys" → "Add Key" → "Create new key"
6. Pilih "JSON" → "Create"
7. File akan otomatis download

### 2. Rename dan Pindahkan
```bash
# Rename file yang didownload
mv ~/Downloads/your-project-id-xxx.json storage/app/credentials.json

# Set permission
chmod 600 storage/app/credentials.json
```

## Keamanan

### ⚠️ PENTING: Jangan Commit ke Git
File `credentials.json` sudah ditambahkan ke `.gitignore` untuk mencegah commit ke repository.

### Best Practices
1. **Jangan share** file credentials.json dengan siapapun
2. **Backup** file di tempat yang aman
3. **Rotate** credentials secara berkala
4. **Monitor** usage di Google Cloud Console

## Troubleshooting

### File tidak ditemukan
```bash
# Cek apakah file ada
ls -la storage/app/credentials.json

# Jika tidak ada, copy dari download folder
cp ~/Downloads/your-downloaded-file.json storage/app/credentials.json
```

### Permission denied
```bash
# Set permission yang benar
chmod 600 storage/app/credentials.json
```

### Invalid credentials
- Cek apakah file JSON valid
- Cek apakah service account masih aktif
- Cek apakah Google Sheets API enabled

## Support
Jika mengalami masalah dengan credentials:
1. Cek Google Cloud Console
2. Cek Laravel logs
3. Hubungi administrator sistem
