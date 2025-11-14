# 📦 STEP 1: Upload Files ke Rumah123 - Panduan Detail

## 🎯 Tujuan
Upload semua file Laravel ke server Rumah123 melalui cPanel File Manager.

---

## 📋 Persiapan Sebelum Upload

### 1. Siapkan File yang Akan Di-upload
Pastikan kamu punya:
- ✅ Semua file Laravel (kecuali yang tidak perlu)
- ✅ Folder `public/` dengan isinya
- ✅ File `.htaccess` dari folder `public/`

### 2. File/Folder yang TIDAK Perlu Di-upload:
- ❌ `node_modules/` (terlalu besar, tidak diperlukan di server)
- ❌ `.git/` (folder Git, tidak diperlukan)
- ❌ `.env` (akan dibuat manual di server)
- ❌ `storage/logs/*` (biarkan kosong)
- ❌ `vendor/` (akan di-install via Composer di server, atau upload manual)
- ❌ File backup/temporary lainnya

### 3. File/Folder yang HARUS Di-upload:
- ✅ Semua file PHP (app/, bootstrap/, config/, database/, resources/, routes/, dll)
- ✅ File `composer.json` dan `composer.lock`
- ✅ File `package.json` dan `package-lock.json`
- ✅ Folder `public/` (semua isinya)
- ✅ File `.htaccess` dari `public/`
- ✅ Folder `storage/` (kosongkan logs, tapi folder structure tetap ada)
- ✅ Folder `bootstrap/cache/` (kosongkan isinya, tapi folder tetap ada)

---

## 🚀 Langkah-Langkah Upload

### A. Login ke cPanel Rumah123

1. **Buka Browser** (Chrome/Firefox/Edge)
2. **Akses cPanel:**
   - URL: `https://yourdomain.com/cpanel`
   - Atau: `https://cpanel.rumah123.com`
   - Atau: `https://yourdomain.com:2083` (port 2083)
3. **Login:**
   - Username: [username dari Rumah123]
   - Password: [password dari Rumah123]
4. **Klik "Login" atau "Sign In"**

---

### B. Buka File Manager

1. **Cari icon "File Manager"** di cPanel
   - Biasanya ada di bagian "Files"
   - Icon seperti folder/file explorer
2. **Klik "File Manager"**
3. **Pilih Root Directory:**
   - Pilih: **"public_html"** atau **"domains/yourdomain.com/public_html"**
   - Jangan pilih home directory
   - Klik "Go" atau "OK"

---

### C. Upload Files Laravel

#### Opsi 1: Upload via File Manager (Recommended untuk file kecil)

1. **Buat Folder untuk Laravel** (opsional, jika ingin terpisah):
   - Klik "New Folder" di toolbar
   - Nama: `laravel` atau biarkan di root
   - Klik "Create"

2. **Upload Files:**
   - Klik tombol **"Upload"** di toolbar atas
   - Akan terbuka jendela upload
   - **Drag & Drop** semua file dan folder Laravel ke jendela upload
   - Atau klik **"Select File"** dan pilih file satu per satu
   - **Tunggu sampai upload selesai** (bisa beberapa menit tergantung ukuran)

3. **Verifikasi Upload:**
   - Kembali ke File Manager
   - Pastikan semua folder sudah ter-upload:
     - ✅ `app/`
     - ✅ `bootstrap/`
     - ✅ `config/`
     - ✅ `database/`
     - ✅ `public/`
     - ✅ `resources/`
     - ✅ `routes/`
     - ✅ `storage/`
     - ✅ `composer.json`
     - ✅ dll

#### Opsi 2: Upload via FTP (Recommended untuk file besar)

1. **Download FTP Client:**
   - FileZilla: https://filezilla-project.org/
   - WinSCP: https://winscp.net/
   - Cyberduck: https://cyberduck.io/

2. **Connect ke Server:**
   - **Host:** `ftp.yourdomain.com` atau IP server
   - **Username:** [cPanel username]
   - **Password:** [cPanel password]
   - **Port:** 21 (FTP) atau 22 (SFTP)
   - Klik "Connect"

3. **Upload Files:**
   - Di sisi kiri: File lokal kamu
   - Di sisi kanan: Server (public_html)
   - **Drag & drop** semua file dari kiri ke kanan
   - Atau **right-click → Upload**

---

### D. Pindahkan File dari `public/` ke Root

**PENTING:** Di shared hosting, `public_html` adalah root website.

1. **Buka folder `public/`** di File Manager
2. **Select All** file di dalam `public/`:
   - Klik "Select All" atau Ctrl+A
3. **Cut/Move files:**
   - Klik "Move" atau "Cut"
   - Navigate ke `public_html/` (root)
   - Klik "Move Files Here"
4. **Atau Copy Manual:**
   - Copy semua file dari `public/` ke root `public_html/`
   - File yang perlu dipindah:
     - ✅ `index.php`
     - ✅ `.htaccess`
     - ✅ Folder `build/` (jika sudah di-build)
     - ✅ Folder `images/` (jika ada)
     - ✅ File lainnya di `public/`

---

### E. Edit File `index.php` di Root

1. **Buka file `index.php`** di root `public_html/`
2. **Klik "Edit"** atau **Right-click → Edit**
3. **Cek path di baris awal:**
   ```php
   require __DIR__.'/../vendor/autoload.php';
   $app = require_once __DIR__.'/../bootstrap/app.php';
   ```
4. **Sesuaikan path jika Laravel di subfolder:**
   - Jika Laravel di `public_html/laravel/`:
     ```php
     require __DIR__.'/../laravel/vendor/autoload.php';
     $app = require_once __DIR__.'/../laravel/bootstrap/app.php';
     ```
   - Jika Laravel di root `public_html/`:
     ```php
     require __DIR__.'/../vendor/autoload.php';
     $app = require_once __DIR__.'/../bootstrap/app.php';
     ```
5. **Save** file

---

## ✅ Checklist Step 1

Setelah upload selesai, pastikan:

- [ ] Semua folder Laravel sudah ter-upload (app, bootstrap, config, dll)
- [ ] File `composer.json` ada di root
- [ ] File `index.php` sudah di root `public_html/`
- [ ] File `.htaccess` sudah di root `public_html/`
- [ ] Folder `public/build/` sudah di root (jika sudah di-build)
- [ ] Folder `storage/` ada (meskipun kosong)
- [ ] Folder `bootstrap/cache/` ada (meskipun kosong)
- [ ] File `index.php` path sudah benar

---

## 🐛 Troubleshooting

### Error: Upload Timeout
**Solusi:**
- Upload file besar via FTP, bukan File Manager
- Atau upload per folder (tidak sekaligus)

### Error: Permission Denied
**Solusi:**
- Pastikan kamu login sebagai owner domain
- Cek apakah folder `public_html` bisa di-write

### File Tidak Muncul Setelah Upload
**Solusi:**
- Refresh File Manager (F5)
- Cek folder yang benar (public_html)
- Pastikan upload sudah selesai 100%

### File Terlalu Besar
**Solusi:**
- Upload via FTP (lebih stabil untuk file besar)
- Atau compress dulu (zip), upload, lalu extract di server

---

## 📝 Catatan Penting

1. **Jangan upload `.env`** - akan dibuat manual di Step 3
2. **Jangan upload `vendor/`** - akan di-install via Composer di Step 5
3. **Pastikan `.htaccess` sudah di root** - penting untuk routing Laravel
4. **Folder `storage/` dan `bootstrap/cache/`** harus ada meskipun kosong

---

## ➡️ Next Step

Setelah Step 1 selesai, lanjut ke:
**STEP 2: Setup Database** di cPanel MySQL Databases

---

## 🆘 Butuh Bantuan?

Jika ada masalah saat upload:
1. Screenshot error message
2. Cek apakah file size tidak melebihi limit
3. Pastikan koneksi internet stabil
4. Coba upload via FTP jika File Manager bermasalah

