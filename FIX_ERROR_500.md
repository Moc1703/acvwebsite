# 🔧 FIX: Error 500 Internal Server Error

## 🎯 Langkah-Langkah Troubleshooting

### Step 1: Cek Error Log

1. **Buka File Manager di cPanel**
2. **Buka file `error_log`** di root
3. **Scroll ke bawah** (error terbaru ada di bawah)
4. **Copy error message terakhir**
5. **Kirim error message** untuk saya analisis

**Atau via cPanel:**
- cPanel → **"Error Logs"** atau **"Errors"**
- Lihat error terbaru

---

### Step 2: Cek File `.env`

1. **Buka File Manager**
2. **Cek apakah file `.env` ada di root**
3. **Jika belum ada**, buat file baru:
   - Klik **"New File"**
   - Nama: `.env`
   - Klik **"Create"**
4. **Edit file `.env`** dan paste isi berikut:

```env
APP_NAME="ACV Management"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://ayathacreativeventures.com

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
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

**PENTING:** Ganti:
- `DB_DATABASE` = nama database kamu
- `DB_USERNAME` = username database kamu
- `DB_PASSWORD` = password database kamu

5. **Save** file

---

### Step 3: Generate APP_KEY

1. **Buka Terminal/SSH** di cPanel
   - cPanel → **"Terminal"** atau **"SSH Access"**
   - Atau gunakan **"Run PHP Script"** di cPanel

2. **Generate APP_KEY:**

**Via SSH/Terminal:**
```bash
cd public_html
php artisan key:generate
```

**Via PHP Script (jika tidak ada SSH):**
- cPanel → **"Run PHP Script"** atau buat file `generate-key.php` di root:

```php
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
echo Artisan::call('key:generate');
```

Atau **manual generate** di: https://generate-random.org/api-key-generator?count=1&length=32&type=mixed-numbers-symbols&prefix=base64:

Copy hasilnya dan tambahkan di `.env`:
```
APP_KEY=base64:hasil_generate_di_sini
```

---

### Step 4: Cek Path di `index.php`

1. **Buka File Manager**
2. **Edit `index.php`** di root
3. **Pastikan path seperti ini:**

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$app->handleRequest(Request::capture());
```

**Pastikan:**
- `__DIR__.'/storage'` (bukan `__DIR__.'/../storage'`)
- `__DIR__.'/vendor'` (bukan `__DIR__.'/../vendor'`)
- `__DIR__.'/bootstrap'` (bukan `__DIR__.'/../bootstrap'`)

---

### Step 5: Cek Folder Permissions

1. **Buka File Manager**
2. **Klik kanan folder `storage/`** → **"Change Permissions"**
3. **Set permission: `755`**
4. **Klik kanan folder `bootstrap/cache/`** → **"Change Permissions"**
5. **Set permission: `755`**
6. **Klik kanan file `.env`** → **"Change Permissions"**
7. **Set permission: `644`**

---

### Step 6: Cek Folder `vendor/`

1. **Buka File Manager**
2. **Cek apakah folder `vendor/` ada di root**
3. **Jika belum ada atau tidak lengkap:**
   - Upload folder `vendor/` dari local (jika ada)
   - Atau install via Composer di server

**Via SSH:**
```bash
cd public_html
composer install --no-dev --optimize-autoloader
```

**Manual:**
- Upload folder `vendor/` dari local ke server

---

### Step 7: Cek Database Connection

1. **Buka phpMyAdmin** di cPanel
2. **Test koneksi database:**
   - Login dengan username & password database
   - Pastikan database ada
   - Pastikan table sudah dibuat (cek table `inquiries`, `users`, dll)

3. **Jika database belum dibuat:**
   - Buat database baru
   - Import `database-schema.sql` (jika ada)
   - Atau run migrations

---

## 🐛 Error Umum & Solusi

### Error: "No application encryption key has been specified"

**Solusi:**
- Generate `APP_KEY` di `.env` (Step 3)

---

### Error: "Class 'PDO' not found" atau Database Error

**Solusi:**
- Cek database credentials di `.env`
- Pastikan database sudah dibuat
- Pastikan user database sudah di-assign ke database

---

### Error: "The stream or file could not be opened"

**Solusi:**
- Cek permissions folder `storage/` dan `storage/logs/`
- Set permission `755` untuk folder `storage/`
- Set permission `775` untuk folder `storage/logs/`

---

### Error: "Vendor autoload not found"

**Solusi:**
- Pastikan folder `vendor/` ada di root
- Install Composer dependencies:
  ```bash
  composer install
  ```

---

### Error: "File does not exist" atau Path Error

**Solusi:**
- Cek path di `index.php` sudah benar
- Pastikan semua folder Laravel ada di root
- Pastikan file `.htaccess` ada di root

---

## ✅ Checklist Troubleshooting

- [ ] File `.env` sudah dibuat
- [ ] `APP_KEY` sudah di-generate
- [ ] Database credentials di `.env` sudah benar
- [ ] Path di `index.php` sudah benar
- [ ] Folder `vendor/` ada dan lengkap
- [ ] Permissions folder `storage/` sudah `755`
- [ ] Permissions folder `bootstrap/cache/` sudah `755`
- [ ] File `.htaccess` ada di root
- [ ] Database sudah dibuat dan table sudah ada

---

## 🆘 Langkah Selanjutnya

1. **Cek Error Log** dan copy error message terakhir
2. **Cek file `.env`** apakah sudah dibuat dan lengkap
3. **Generate `APP_KEY`** jika belum ada
4. **Test website lagi**

**Kirimkan:**
- Error message dari error_log
- Status checklist di atas
- Screenshot jika perlu

