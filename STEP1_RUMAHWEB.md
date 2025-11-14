# 📦 STEP 1: Upload Files ke Rumahweb - Panduan Detail

## 🎯 Tujuan
Upload semua file Laravel ke server Rumahweb melalui cPanel File Manager.

---

## 📋 Persiapan Sebelum Upload

### File/Folder yang TIDAK Perlu Di-upload:
- ❌ `node_modules/` (terlalu besar, tidak diperlukan)
- ❌ `.git/` (folder Git)
- ❌ `.env` (akan dibuat manual di server)
- ❌ `storage/logs/*` (biarkan kosong)
- ❌ `vendor/` (akan di-install via Composer, atau upload manual)

### File/Folder yang HARUS Di-upload:
- ✅ Semua folder: `app/`, `bootstrap/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`
- ✅ File: `composer.json`, `composer.lock`, `package.json`, `package-lock.json`
- ✅ Folder `public/` dengan semua isinya
- ✅ File `.htaccess` dari `public/`

---

## 🚀 Langkah-Langkah Upload

### A. Login ke cPanel Rumahweb

1. **Buka Browser** (Chrome/Firefox/Edge)
2. **Akses cPanel:**
   ```
   https://yourdomain.com/cpanel
   atau
   https://cpanel.rumahweb.com
   atau
   https://yourdomain.com:2083
   ```
3. **Login:**
   - Username: [username dari Rumahweb]
   - Password: [password dari Rumahweb]
4. **Klik "Login"**

---

### B. Buka File Manager

1. **Cari icon "File Manager"** di cPanel
   - Biasanya di bagian "Files"
   - Icon seperti folder/file explorer
2. **Klik "File Manager"**
3. **Pilih Root Directory:**
   - Pilih: **"public_html"**
   - Jangan pilih home directory
   - Klik "Go"

---

### C. Upload Files Laravel

#### Opsi 1: Upload via File Manager

1. **Klik tombol "Upload"** di toolbar atas
2. **Drag & Drop** semua file dan folder Laravel ke jendela upload
   - Atau klik **"Select File"** dan pilih file
   - Upload semua folder: `app`, `bootstrap`, `config`, `database`, `public`, `resources`, `routes`, `storage`, dll
   - Upload file: `composer.json`, `composer.lock`, `package.json`, dll
3. **Tunggu sampai upload selesai** (bisa beberapa menit)

#### Opsi 2: Upload via FTP (untuk file besar)

1. **Download FileZilla:** https://filezilla-project.org/
2. **Connect ke Server:**
   - Host: `ftp.yourdomain.com` atau IP dari Rumahweb
   - Username: [cPanel username]
   - Password: [cPanel password]
   - Port: 21
   - Klik "Quickconnect"
3. **Upload Files:**
   - Drag & drop semua file dari kiri (local) ke kanan (server `public_html`)

---

### D. Pindahkan File dari `public/` ke Root

**PENTING:** Di Rumahweb, `public_html` adalah root website.

1. **Buka folder `public/`** di File Manager
2. **Select All** file di dalam `public/`:
   - Klik "Select All" atau Ctrl+A
3. **Cut/Move files:**
   - Klik "Move" atau "Cut"
   - Navigate ke `public_html/` (root)
   - Klik "Move Files Here"
4. **File yang harus dipindah:**
   - ✅ `index.php`
   - ✅ `.htaccess`
   - ✅ Folder `build/` (jika sudah di-build)
   - ✅ Folder `images/`
   - ✅ File lainnya di `public/`

---

### E. Edit File `index.php` di Root

1. **Buka file `index.php`** di root `public_html/`
2. **Klik "Edit"** atau **"Code Editor"**
3. **Cek path di baris awal:**
   ```php
   require __DIR__.'/../vendor/autoload.php';
   $app = require_once __DIR__.'/../bootstrap/app.php';
   ```
4. **Jika Laravel di root `public_html/`**, path sudah benar (tidak perlu diubah)
5. **Jika Laravel di subfolder**, sesuaikan path-nya
6. **Save** file

---

## ✅ Checklist Step 1

Setelah upload selesai, pastikan:

- [ ] Semua folder Laravel sudah ter-upload (app, bootstrap, config, dll)
- [ ] File `composer.json` ada di root
- [ ] File `index.php` sudah di root `public_html/`
- [ ] File `.htaccess` sudah di root `public_html/`
- [ ] Folder `storage/` ada (meskipun kosong)
- [ ] Folder `bootstrap/cache/` ada (meskipun kosong)

---

## 🐛 Troubleshooting

### Upload Timeout
- Upload file besar via FTP, bukan File Manager
- Atau upload per folder (tidak sekaligus)

### Permission Denied
- Pastikan login sebagai owner domain
- Cek apakah folder `public_html` bisa di-write

### File Tidak Muncul
- Refresh File Manager (F5)
- Cek folder yang benar (public_html)

---

## ➡️ Next Step

Setelah Step 1 selesai, lanjut ke:
**STEP 2: Setup Database** di cPanel MySQL Databases

---

## 📞 Butuh Bantuan?

Jika ada masalah:
1. Screenshot error message
2. Cek file size tidak melebihi limit
3. Pastikan koneksi internet stabil
4. Hubungi support Rumahweb jika masalah server-related

