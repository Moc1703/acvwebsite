# 🚀 Panduan Deploy ke Rumah123 Hosting - Step by Step

## 📋 Persiapan Sebelum Deploy

### 1. Siapkan File yang Diperlukan
Pastikan semua file sudah siap:
- ✅ Semua code sudah di commit ke Git (opsional)
- ✅ Database sudah siap (MySQL/MariaDB)
- ✅ Domain sudah terhubung ke hosting

### 2. Informasi yang Diperlukan dari Rumah123
Sebelum mulai, pastikan kamu punya:
- ✅ cPanel username & password
- ✅ Database name, username, password
- ✅ FTP/SFTP credentials (jika perlu)
- ✅ Domain name yang akan digunakan

---

## 📦 STEP 1: Upload Files ke Server

### Opsi A: Via cPanel File Manager (Recommended)

1. **Login ke cPanel Rumah123**
   - Buka: `https://yourdomain.com/cpanel` atau `https://cpanel.rumah123.com`
   - Login dengan username & password

2. **Buka File Manager**
   - Cari icon "File Manager" di cPanel
   - Pilih "public_html" atau folder root domain kamu

3. **Upload Files Laravel**
   - **PENTING**: Upload semua file Laravel KECUALI folder berikut:
     - ❌ `node_modules/` (jangan upload)
     - ❌ `.git/` (jangan upload)
     - ❌ `storage/logs/` (biarkan kosong)
     - ❌ `.env` (akan dibuat manual)
   
   **Cara Upload:**
   - Klik "Upload" di File Manager
   - Pilih semua file dan folder (drag & drop atau browse)
   - Tunggu sampai upload selesai

4. **Pindahkan File dari `public/` ke Root**
   - **PENTING**: Di shared hosting, biasanya `public_html` adalah root
   - Copy semua file dari folder `public/` ke `public_html/`
   - Copy file `.htaccess` dari `public/` ke root `public_html/`
   - Copy folder `images/` dari `public/images/` ke `public_html/images/`

5. **Edit File `index.php` di Root**
   - Buka file `public_html/index.php`
   - Ubah path dari:
     ```php
     require __DIR__.'/../vendor/autoload.php';
     $app = require_once __DIR__.'/../bootstrap/app.php';
     ```
   - Menjadi (sesuaikan dengan struktur folder):
     ```php
     require __DIR__.'/../vendor/autoload.php';
     $app = require_once __DIR__.'/../bootstrap/app.php';
     ```
   - Jika Laravel di folder terpisah, sesuaikan path-nya

### Opsi B: Via FTP/SFTP (Alternatif)

1. **Download FTP Client**
   - Gunakan FileZilla, WinSCP, atau Cyberduck
   - Download: https://filezilla-project.org/

2. **Connect ke Server**
   - Host: `ftp.yourdomain.com` atau IP server
   - Username: cPanel username
   - Password: cPanel password
   - Port: 21 (FTP) atau 22 (SFTP)

3. **Upload Files**
   - Upload semua file Laravel ke server
   - Pastikan struktur folder tetap sama

---

## 🗄️ STEP 2: Setup Database

1. **Buka MySQL Databases di cPanel**
   - Cari icon "MySQL Databases" atau "MySQL Database Wizard"

2. **Buat Database Baru** (jika belum ada)
   - Masukkan nama database (contoh: `acv_website`)
   - Klik "Create Database"

3. **Buat Database User** (jika belum ada)
   - Masukkan username dan password
   - Klik "Create User"

4. **Assign User ke Database**
   - Pilih user dan database
   - Berikan "ALL PRIVILEGES"
   - Klik "Make Changes"

5. **Import Database Schema**
   - Buka "phpMyAdmin" di cPanel
   - Pilih database yang baru dibuat
   - Klik tab "Import"
   - Upload file SQL atau jalankan migration via SSH

---

## ⚙️ STEP 3: Konfigurasi Environment (.env)

1. **Buat File .env di Root**
   - Di File Manager, buat file baru bernama `.env`
   - Copy isi dari `.env.example` (jika ada) atau buat manual

2. **Edit File .env**
   ```
   APP_NAME="ACV Management"
   APP_ENV=production
   APP_KEY=
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   
   LOG_CHANNEL=stack
   LOG_DEPRECATIONS_CHANNEL=null
   LOG_LEVEL=debug
   
   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_DATABASE=nama_database_kamu
   DB_USERNAME=username_database_kamu
   DB_PASSWORD=password_database_kamu
   
   BROADCAST_DRIVER=log
   CACHE_DRIVER=file
   FILESYSTEM_DISK=local
   QUEUE_CONNECTION=sync
   SESSION_DRIVER=file
   SESSION_LIFETIME=120
   
   MEMCACHED_HOST=127.0.0.1
   
   REDIS_HOST=127.0.0.1
   REDIS_PASSWORD=null
   REDIS_PORT=6379
   
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your_email@gmail.com
   MAIL_PASSWORD=your_app_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=ayuthiacv@gmail.com
   MAIL_FROM_NAME="${APP_NAME}"
   ```

3. **Generate APP_KEY**
   - Buka Terminal/SSH di cPanel (jika tersedia)
   - Atau gunakan online tool: https://generate-random.org/api-key-generator
   - Masukkan 32 karakter random ke `APP_KEY=base64:...`
   - Atau jalankan: `php artisan key:generate` via SSH

---

## 🔧 STEP 4: Setup Folder Permissions

1. **Buka File Manager di cPanel**

2. **Set Permissions untuk Folder:**
   - Klik kanan folder `storage/` → "Change Permissions" → Set ke `755`
   - Klik kanan folder `bootstrap/cache/` → "Change Permissions" → Set ke `755`

3. **Set Permissions untuk File:**
   - File `.env` → Set ke `644` (readable, tapi tidak executable)

---

## 🗃️ STEP 5: Install Dependencies & Run Migrations

### Via SSH (Jika Tersedia - Recommended)

1. **Buka SSH Terminal di cPanel**
   - Cari "Terminal" atau "SSH Access" di cPanel
   - Login dengan cPanel credentials

2. **Navigate ke Root Directory**
   ```bash
   cd ~/public_html
   # atau
   cd ~/domains/yourdomain.com/public_html
   ```

3. **Install Composer Dependencies**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

4. **Generate Application Key** (jika belum)
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate --force
   ```

6. **Seed Admin User**
   ```bash
   php artisan db:seed --class=AdminUserSeeder
   ```

7. **Optimize Application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

### Via cPanel (Jika SSH Tidak Tersedia)

1. **Upload Vendor Folder**
   - Install Composer di local komputer kamu
   - Jalankan: `composer install --optimize-autoloader --no-dev`
   - Upload folder `vendor/` ke server

2. **Run Migrations via phpMyAdmin**
   - Buka phpMyAdmin
   - Import SQL file dari migration (jika ada)
   - Atau jalankan SQL manual untuk create tables

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

### Via SSH (Recommended)

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

5. **Test robots.txt**
   - Buka: `https://yourdomain.com/robots.txt`
   - Pastikan file bisa diakses

---

## 🐛 Troubleshooting

### Error: 500 Internal Server Error

1. **Cek Error Logs**
   - Di cPanel → "Error Logs"
   - Lihat error message terbaru

2. **Cek File Permissions**
   - Pastikan `storage/` dan `bootstrap/cache/` permission 755

3. **Cek .env File**
   - Pastikan `APP_KEY` sudah di-set
   - Pastikan database credentials benar

### Error: Database Connection Failed

1. **Cek Database Credentials di .env**
   - Pastikan `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` benar

2. **Cek Database di cPanel**
   - Pastikan database dan user sudah dibuat
   - Pastikan user sudah di-assign ke database

### Error: CSS/JS Tidak Load

1. **Cek Folder `build/`**
   - Pastikan folder `public/build/` sudah di-upload
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
- [ ] SSL/HTTPS sudah diaktifkan

---

## 🆘 Support

Jika ada masalah saat deploy:
1. Cek error logs di cPanel
2. Pastikan semua step sudah diikuti
3. Hubungi support Rumah123 jika masalah server-related
4. Email: ayuthiacv@gmail.com untuk bantuan teknis

---

## 🎉 Selamat!

Website kamu sudah live! Jangan lupa:
- ✅ Monitor error logs secara berkala
- ✅ Backup database secara rutin
- ✅ Update password admin secara berkala
- ✅ Monitor website performance

