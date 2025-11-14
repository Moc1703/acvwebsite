# 🔧 FIX: Directory Structure untuk Rumahweb

## ❌ Masalah yang Terjadi

Website menampilkan **directory listing** karena:
1. File Laravel ada di root, tapi `public/` belum dipindah ke web root
2. `index.php` belum ada di root atau belum di-edit dengan benar
3. `.htaccess` belum ada di root atau belum aktif

---

## ✅ Solusi: Perbaiki Struktur File

### Opsi 1: Struktur Standar (Recommended)

**Struktur yang Benar:**
```
public_html/                    ← Web root (ini yang diakses browser)
├── index.php                  ← Entry point Laravel (dari public/)
├── .htaccess                  ← Apache config (dari public/)
├── build/                     ← Assets (dari public/build/)
├── images/                    ← Images (dari public/images/)
├── robots.txt                 ← SEO (dari public/)
├── app/                       ← Laravel app folder
├── bootstrap/                 ← Laravel bootstrap
├── config/                    ← Laravel config
├── database/                  ← Laravel database
├── resources/                 ← Laravel resources
├── routes/                    ← Laravel routes
├── storage/                   ← Laravel storage
├── vendor/                    ← Composer dependencies
├── artisan                    ← Laravel artisan
├── composer.json
└── composer.lock
```

---

## 🚀 Langkah-Langkah Perbaikan

### Step 1: Pindahkan File dari `public/` ke Root

1. **Buka File Manager di cPanel**
2. **Masuk ke folder `public/`**
3. **Select All** file dan folder di dalam `public/`:
   - `index.php`
   - `.htaccess`
   - `build/` (folder)
   - `images/` (folder)
   - `robots.txt` (jika ada)
   - File lainnya di `public/`
4. **Klik "Move" atau "Cut"**
5. **Navigate ke root** (`public_html/` atau root domain)
6. **Klik "Move Files Here"**

**Hasil:** Semua file dari `public/` sekarang ada di root.

---

### Step 2: Edit File `index.php` di Root

1. **Buka File Manager**
2. **Klik kanan `index.php`** → **"Edit"**
3. **Edit path di baris 9 dan 14:**

**Cari baris ini:**
```php
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**Ganti menjadi:**
```php
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';
```

**Perubahan:**
- `__DIR__.'/../storage'` → `__DIR__.'/storage'`
- `__DIR__.'/../vendor'` → `__DIR__.'/vendor'`
- `__DIR__.'/../bootstrap'` → `__DIR__.'/bootstrap'`

4. **Save** file

---

### Step 3: Pastikan `.htaccess` Ada di Root

1. **Cek apakah `.htaccess` sudah ada di root**
2. **Jika belum ada**, copy dari `public/.htaccess` ke root
3. **Pastikan file `.htaccess` aktif** (tidak di-rename)

---

### Step 4: Hapus Folder `public/` yang Kosong

1. **Masuk ke folder `public/`**
2. **Pastikan sudah kosong** (semua file sudah dipindah)
3. **Hapus folder `public/`** (opsional, tidak wajib)

---

### Step 5: Cek Error Log

1. **Buka file `error_log`** di root
2. **Lihat error terakhir** (file ini besar 215MB, berarti banyak error)
3. **Copy error message terakhir** untuk troubleshooting

**Untuk menghapus error_log:**
- Klik kanan `error_log` → **"Delete"**
- File ini akan dibuat ulang otomatis jika ada error baru

---

## ✅ Verifikasi

Setelah perbaikan, cek:

1. **Akses website:**
   ```
   https://ayathacreativeventures.com
   ```
2. **Pastikan:**
   - ✅ Tidak muncul directory listing
   - ✅ Website Laravel muncul
   - ✅ Tidak ada error 500
   - ✅ CSS & JS load dengan benar

---

## 🐛 Troubleshooting

### Masih Muncul Directory Listing?

**Cek:**
1. File `index.php` sudah ada di root?
2. File `.htaccess` sudah ada di root?
3. Path di `index.php` sudah benar?
4. Apache mod_rewrite aktif? (biasanya sudah aktif di Rumahweb)

**Solusi:**
- Pastikan `index.php` dan `.htaccess` ada di root
- Cek apakah `.htaccess` tidak di-rename menjadi `.htaccess.txt`

---

### Error 500 Internal Server Error?

**Cek Error Log:**
1. Buka `error_log` di root
2. Lihat error terakhir
3. Copy error message

**Kemungkinan penyebab:**
- Path di `index.php` salah
- Database connection error
- `.env` belum dibuat atau salah
- Permissions folder salah

---

### CSS/JS Tidak Load?

**Cek:**
1. Folder `build/` sudah ada di root?
2. File `build/manifest.json` ada?
3. `APP_URL` di `.env` sudah benar?

**Solusi:**
- Pastikan folder `build/` ada di root (bukan di `public/build/`)
- Clear browser cache (Ctrl + Shift + R)

---

## 📝 Catatan Penting

1. **Struktur File:**
   - Semua file Laravel bisa di root (`public_html/`)
   - Atau Laravel root di luar `public_html/`, tapi ini lebih kompleks

2. **Security:**
   - File `.env` harus ada di root (tidak di `public/`)
   - Folder `storage/` dan `bootstrap/cache/` harus writable (permission 755)

3. **Performance:**
   - File `error_log` yang besar bisa dihapus
   - Monitor error log secara berkala

---

## 🆘 Butuh Bantuan?

Jika masih error setelah perbaikan:
1. Screenshot error message
2. Copy error dari `error_log`
3. Cek apakah semua step sudah diikuti

