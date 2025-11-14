# 🚀 Panduan Deploy ke Rumahweb Hosting - Step by Step

## 📋 Persiapan Sebelum Deploy

### 1. Siapkan File yang Diperlukan
Pastikan semua file sudah siap:
- ✅ Semua code Laravel sudah siap
- ✅ Database sudah siap (MySQL/MariaDB)
- ✅ Domain sudah terhubung ke hosting

### 2. Informasi yang Diperlukan dari Rumahweb
Sebelum mulai, pastikan kamu punya:
- ✅ cPanel username & password dari Rumahweb
- ✅ Database name, username, password
- ✅ FTP credentials (jika perlu)
- ✅ Domain name yang akan digunakan

---

## 📦 STEP 1: Upload Files ke Server

### Opsi A: Via cPanel File Manager (Recommended)

1. **Login ke cPanel Rumahweb**
   - Buka: `https://yourdomain.com/cpanel`
   - Atau: `https://cpanel.rumahweb.com`
   - Atau: `https://yourdomain.com:2083`
   - Login dengan username & password dari Rumahweb

2. **Buka File Manager**
   - Cari icon "File Manager" di cPanel
   - Pilih "public_html" atau folder root domain kamu
   - Klik "Go"

3. **Upload Files Laravel**
   - **PENTING**: Upload semua file Laravel KECUALI:
     - ❌ `node_modules/` (jangan upload)
     - ❌ `.git/` (jangan upload)
     - ❌ `storage/logs/` (biarkan kosong)
     - ❌ `.env` (akan dibuat manual)
     - ❌ `vendor/` (akan di-install via Composer nanti)
   
   **Cara Upload:**
   - Klik "Upload" di toolbar File Manager
   - Drag & drop semua file dan folder Laravel
   - Atau klik "Select File" dan pilih file
   - Tunggu sampai upload selesai (bisa beberapa menit)

4. **Pindahkan File dari `public/` ke Root**
   - **PENTING**: Di shared hosting Rumahweb, `public_html` adalah root website
   - Buka folder `public/` di File Manager
   - Select All file di dalam `public/`
   - Klik "Move" atau "Cut"
   - Navigate ke `public_html/` (root)
   - Klik "Move Files Here"
   - File yang perlu dipindah:
     - ✅ `index.php`
     - ✅ `.htaccess`
     - ✅ Folder `build/` (jika sudah di-build)
     - ✅ Folder `images/`

5. **Edit File `index.php` di Root**
   - Buka file `public_html/index.php`
   - Cek path di baris awal:
     ```php
     require __DIR__.'/../vendor/autoload.php';
     $app = require_once __DIR__.'/../bootstrap/app.php';
     ```
   - Jika Laravel di root `public_html/`, path sudah benar
   - Jika Laravel di subfolder, sesuaikan path-nya

### Opsi B: Via FTP/SFTP (Alternatif untuk file besar)

1. **Download FTP Client**
   - FileZilla: https://filezilla-project.org/
   - WinSCP: https://winscp.net/

2. **Connect ke Server Rumahweb**
   - Host: `ftp.yourdomain.com` atau IP server dari Rumahweb
   - Username: cPanel username
   - Password: cPanel password
   - Port: 21 (FTP) atau 22 (SFTP)

3. **Upload Files**
   - Upload semua file Laravel ke folder `public_html/`
   - Pastikan struktur folder tetap sama

---

## 🗄️ STEP 2: Setup Database

1. **Buka MySQL Databases di cPanel**
   - Cari icon "MySQL Databases" atau "MySQL Database Wizard"

2. **Buat Database Baru**
   - Masukkan nama database (contoh: `acv_website`)
   - Klik "Create Database"
   - **Catat nama database lengkap** (biasanya ada prefix, contoh: `username_acv_website`)

3. **Buat Database User**
   - Scroll ke bagian "Add New User"
   - Masukkan username dan password
   - Klik "Create User"
   - **Catat username lengkap** (biasanya ada prefix)

4. **Assign User ke Database**
   - Scroll ke bagian "Add User To Database"
   - Pilih user dan database yang baru dibuat
   - Klik "Add"
   - Centang "ALL PRIVILEGES"
   - Klik "Make Changes"

5. **Import Database Schema** (Via phpMyAdmin)
   - Buka "phpMyAdmin" di cPanel
   - Pilih database yang baru dibuat
   - Klik tab "Import"
   - Upload file SQL atau jalankan migration via SSH

---

## ⚙️ STEP 3: Konfigurasi Environment (.env)

1. **Buat File .env di Root**
   - Di File Manager, klik "New File"
   - Nama file: `.env`
   - Klik "Create"

2. **Edit File .env**
   - Klik kanan file `.env` → "Edit" atau "Code Editor"
   - Copy isi dari `.env.rumahweb.example` atau buat manual
   - Isi dengan data dari Rumahweb:

   ```
   APP_NAME="ACV Management"
   APP_ENV=production
   APP_KEY=
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   
   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_DATABASE=nama_database_lengkap_dari_cpanel
   DB_USERNAME=username_database_lengkap_dari_cpanel
   DB_PASSWORD=password_database_kamu
   
   SESSION_DRIVER=file
   SESSION_LIFETIME=120
   
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=ayuthiacv@gmail.com
   MAIL_PASSWORD=your_app_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=ayuthiacv@gmail.com
   MAIL_FROM_NAME="${APP_NAME}"
   ```

3. **Generate APP_KEY**
   - Via SSH (jika tersedia):
     ```bash
     php artisan key:generate
     ```
   - Atau manual: Generate 32 karakter random dan masukkan ke `APP_KEY=base64:...`

---

## 🔧 STEP 4: Setup Folder Permissions

1. **Buka File Manager di cPanel**

2. **Set Permissions:**
   - Klik kanan folder `storage/` → "Change Permissions"
   - Set ke `755` (centang: Owner Read/Write/Execute, Group Read/Execute, Public Read/Execute)
   - Klik "Change Permissions"
   
   - Klik kanan folder `bootstrap/cache/` → "Change Permissions"
   - Set ke `755`
   - Klik "Change Permissions"
   
   - Klik kanan file `.env` → "Change Permissions"
   - Set ke `644` (Owner Read/Write, Group Read, Public Read)
   - Klik "Change Permissions"

---

## 🗃️ STEP 5: Install Dependencies & Run Migrations

### Via SSH (Jika Tersedia - Recommended)

1. **Buka SSH Terminal di cPanel**
   - Cari "Terminal" atau "SSH Access" di cPanel Rumahweb
   - Atau gunakan SSH client (PuTTY, Terminal)

2. **Connect via SSH**
   ```bash
   ssh username@yourdomain.com
   # atau
   ssh username@server_ip
   ```

3. **Navigate ke Root Directory**
   ```bash
   cd ~/public_html
   # atau
   cd ~/domains/yourdomain.com/public_html
   ```

4. **Install Composer Dependencies**
   ```bash
   composer install --optimize-autoloader --no-dev --no-interaction
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate --force
   ```

6. **Run Migrations**
   ```bash
   php artisan migrate --force
   ```

7. **Seed Admin User**
   ```bash
   php artisan db:seed --class=AdminUserSeeder --force
   ```

8. **Optimize Application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

### Via cPanel (Jika SSH Tidak Tersedia)

1. **Upload Vendor Folder**
   - Install Composer di local komputer
   - Jalankan: `composer install --optimize-autoloader --no-dev`
   - Upload folder `vendor/` ke server via FTP/File Manager

2. **Run Migrations via phpMyAdmin**
   - Buka phpMyAdmin
   - Pilih database
   - Import SQL atau jalankan SQL manual untuk create tables

3. **Create Admin User Manual**
   - Buka phpMyAdmin → Table `users`
   - Insert manual dengan password yang di-hash:
   ```sql
   INSERT INTO users (name, email, password, created_at, updated_at) 
   VALUES ('ACV Admin', 'admin@acvmanagement.com', '$2y$10$...', NOW(), NOW());
   ```
   - Generate password hash di: https://bcrypt-generator.com/

---

## 🎨 STEP 6: Build Assets (CSS & JS)

### Via SSH (Jika Tersedia)

```bash
# Install Node.js dependencies (jika Node.js tersedia)
npm install

# Build untuk production
npm run build
```

### Via Local (Alternatif)

1. **Build di Local Komputer**
   ```bash
   npm install
   npm run build
   ```

2. **Upload Folder `public/build/`**
   - Upload folder `public/build/` ke server
   - Pastikan folder `build/` ada di `public_html/build/`

---

## 🔒 STEP 7: Security Configuration

1. **Update robots.txt**
   - Buka `public_html/robots.txt`
   - Update sitemap URL dengan domain kamu:
   ```
   Sitemap: https://yourdomain.com/sitemap.xml
   ```

2. **Update .env**
   - Pastikan `APP_DEBUG=false`
   - Pastikan `APP_ENV=production`

3. **Change Admin Password**
   - Login ke admin panel: `https://yourdomain.com/admin/login`
   - Email: `admin@acvmanagement.com`
   - Password: `admin123` (default)
   - **SEGERA GANTI PASSWORD SETELAH LOGIN PERTAMA!**

---

## ✅ STEP 8: Testing

1. **Test Homepage**
   - Buka: `https://yourdomain.com`
   - Pastikan website muncul dengan benar

2. **Test Contact Form**
   - Isi form contact
   - Submit dan cek apakah data masuk ke database

3. **Test Admin Panel**
   - Buka: `https://yourdomain.com/admin/login`
   - Login dengan credentials
   - Cek apakah bisa melihat inquiries

4. **Test Sitemap**
   - Buka: `https://yourdomain.com/sitemap.xml`
   - Pastikan XML muncul dengan benar

---

## 🐛 Troubleshooting Rumahweb

### Error: 500 Internal Server Error

1. **Cek Error Logs**
   - Di cPanel → "Error Logs"
   - Lihat error message terbaru

2. **Cek File Permissions**
   - Pastikan `storage/` dan `bootstrap/cache/` permission 755
   - Pastikan `.env` permission 644

3. **Cek .env File**
   - Pastikan `APP_KEY` sudah di-set
   - Pastikan database credentials benar
   - Pastikan `APP_DEBUG=false` untuk production

### Error: Database Connection Failed

1. **Cek Database Credentials**
   - Pastikan menggunakan nama database lengkap (dengan prefix)
   - Pastikan menggunakan username lengkap (dengan prefix)
   - Pastikan `DB_HOST=localhost`

2. **Cek Database di cPanel**
   - Pastikan database dan user sudah dibuat
   - Pastikan user sudah di-assign ke database dengan ALL PRIVILEGES

### Error: CSS/JS Tidak Load

1. **Cek Folder `build/`**
   - Pastikan folder `public_html/build/` sudah di-upload
   - Pastikan file CSS/JS ada di dalamnya

2. **Cek Vite Configuration**
   - Pastikan `APP_URL` di .env sudah benar
   - Clear cache: `php artisan config:clear`

### Error: Route Not Found

1. **Clear Route Cache**
   ```bash
   php artisan route:clear
   php artisan route:cache
   ```

2. **Cek .htaccess**
   - Pastikan file `.htaccess` ada di root
   - Pastikan mod_rewrite enabled di server

---

## 📝 Checklist Final

- [ ] Semua file sudah di-upload ke server
- [ ] Database sudah dibuat dan di-import
- [ ] File `.env` sudah dikonfigurasi dengan benar
- [ ] `APP_KEY` sudah di-generate
- [ ] Folder permissions sudah di-set (storage, bootstrap/cache)
- [ ] Dependencies sudah di-install (vendor/)
- [ ] Migrations sudah di-run
- [ ] Admin user sudah di-seed
- [ ] Assets sudah di-build (CSS/JS)
- [ ] `robots.txt` sudah di-update dengan domain
- [ ] `APP_DEBUG=false` dan `APP_ENV=production`
- [ ] Website sudah di-test (homepage, form, admin)
- [ ] Admin password sudah diubah dari default
- [ ] SSL/HTTPS sudah diaktifkan (jika tersedia)

---

## 🆘 Support Rumahweb

Jika ada masalah saat deploy:
1. Cek error logs di cPanel
2. Hubungi support Rumahweb: https://www.rumahweb.com/support
3. Pastikan semua step sudah diikuti
4. Email: ayuthiacv@gmail.com untuk bantuan teknis

---

## 🎉 Selamat!

Website kamu sudah live di Rumahweb! Jangan lupa:
- ✅ Monitor error logs secara berkala
- ✅ Backup database secara rutin
- ✅ Update password admin secara berkala
- ✅ Monitor website performance

