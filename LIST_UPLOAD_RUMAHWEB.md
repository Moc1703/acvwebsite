# 📋 Daftar File & Folder yang Harus Di-upload ke Rumahweb

## ✅ YANG HARUS DI-UPLOAD

### 📁 Folder Utama Laravel:
- ✅ `app/` - Semua isinya
- ✅ `bootstrap/` - Semua isinya (termasuk folder `cache/`, biarkan kosong)
- ✅ `config/` - Semua isinya
- ✅ `database/` - Semua isinya (migrations, seeders)
- ✅ `public/` - Semua isinya (nanti akan dipindah ke root)
- ✅ `resources/` - Semua isinya (views, css, js)
- ✅ `routes/` - Semua isinya
- ✅ `storage/` - Folder structure saja (biarkan `logs/` kosong)
  - ✅ `storage/app/`
  - ✅ `storage/framework/`
  - ✅ `storage/logs/` (folder kosong)

### 📄 File Root:
- ✅ `artisan` - File PHP artisan
- ✅ `composer.json` - Dependencies PHP
- ✅ `composer.lock` - Lock file composer
- ✅ `package.json` - Dependencies Node.js
- ✅ `package-lock.json` - Lock file npm
- ✅ `vite.config.js` - Konfigurasi Vite
- ✅ `phpunit.xml` - File testing (opsional)
- ✅ `README.md` - Dokumentasi (opsional)

### 📁 Folder `public/` (akan dipindah ke root):
- ✅ `public/index.php` - Entry point Laravel
- ✅ `public/.htaccess` - Apache configuration
- ✅ `public/build/` - Folder build assets (jika sudah di-build)
- ✅ `public/images/` - Folder images
- ✅ File lainnya di `public/` jika ada

---

## ❌ YANG TIDAK PERLU DI-UPLOAD

### Folder yang TIDAK Perlu:
- ❌ `node_modules/` - Terlalu besar, tidak diperlukan di server
- ❌ `.git/` - Folder Git version control
- ❌ `vendor/` - Akan di-install via Composer di server (atau upload manual jika SSH tidak tersedia)
- ❌ `.vscode/` - Folder VS Code settings
- ❌ `.idea/` - Folder PHPStorm settings
- ❌ `tests/` - Folder testing (opsional, bisa di-upload jika mau)

### File yang TIDAK Perlu:
- ❌ `.env` - Akan dibuat manual di server
- ❌ `.env.example` - Template saja (opsional)
- ❌ `.gitignore` - File Git
- ❌ `.gitattributes` - File Git
- ❌ `storage/logs/*.log` - File log (biarkan folder kosong)
- ❌ File backup/temporary lainnya

---

## 📦 Cara Upload yang Efisien

### Opsi 1: Upload Semua Sekaligus
1. Select semua folder dan file yang harus di-upload
2. Upload sekaligus via File Manager atau FTP
3. **Waktu:** Lebih cepat, tapi bisa timeout jika file besar

### Opsi 2: Upload Per Folder (Recommended)
1. Upload folder `app/` dulu
2. Upload folder `bootstrap/`
3. Upload folder `config/`
4. Upload folder `database/`
5. Upload folder `public/`
6. Upload folder `resources/`
7. Upload folder `routes/`
8. Upload folder `storage/` (kosong)
9. Upload file root (`composer.json`, dll)
10. **Waktu:** Lebih lama, tapi lebih stabil

### Opsi 3: Compress Dulu (Paling Efisien)
1. **Di local komputer:**
   - Buat folder baru: `laravel-upload`
   - Copy semua folder/file yang harus di-upload ke folder tersebut
   - Compress menjadi ZIP: `laravel-upload.zip`
2. **Upload ZIP ke server:**
   - Upload `laravel-upload.zip` ke `public_html/`
3. **Extract di server:**
   - Di File Manager, klik kanan ZIP → "Extract"
   - Pindahkan semua file dari `laravel-upload/` ke `public_html/`
   - Hapus folder `laravel-upload/` dan file ZIP

---

## 📊 Ukuran File Estimasi

- `app/` - ~500 KB - 2 MB
- `bootstrap/` - ~50 KB
- `config/` - ~100 KB
- `database/` - ~200 KB
- `public/` - ~5-50 MB (tergantung images & build)
- `resources/` - ~2-10 MB (tergantung assets)
- `routes/` - ~50 KB
- `storage/` - ~10 KB (folder structure saja)
- **Total:** ~10-70 MB (tanpa vendor & node_modules)

---

## ✅ Checklist Upload

Sebelum upload, pastikan:
- [ ] Sudah exclude `node_modules/`
- [ ] Sudah exclude `.git/`
- [ ] Sudah exclude `.env`
- [ ] Sudah exclude `vendor/` (atau siap upload manual)
- [ ] Folder `storage/logs/` kosong
- [ ] Folder `bootstrap/cache/` kosong

Setelah upload, pastikan:
- [ ] Semua folder sudah ter-upload
- [ ] File `composer.json` ada
- [ ] File `index.php` ada di `public/`
- [ ] File `.htaccess` ada di `public/`

---

## 🎯 Urutan Upload yang Disarankan

1. **Upload folder structure dulu:**
   - `app/`
   - `bootstrap/`
   - `config/`
   - `database/`
   - `resources/`
   - `routes/`
   - `storage/` (kosong)

2. **Upload folder `public/`:**
   - Semua isi `public/`

3. **Upload file root:**
   - `composer.json`
   - `composer.lock`
   - `package.json`
   - `artisan`
   - File lainnya

4. **Pindahkan file dari `public/` ke root:**
   - `index.php`
   - `.htaccess`
   - Folder `build/`
   - Folder `images/`

---

## 💡 Tips

1. **Gunakan FTP untuk file besar** - Lebih stabil daripada File Manager
2. **Upload `vendor/` manual jika tidak ada SSH** - Folder ini besar (~50-100 MB)
3. **Compress dulu jika banyak file** - Lebih cepat upload ZIP lalu extract
4. **Cek ukuran file sebelum upload** - Pastikan tidak melebihi limit hosting

---

## 📞 Butuh Bantuan?

Jika bingung file mana yang harus di-upload:
1. Lihat struktur folder di local
2. Exclude yang ada di list "TIDAK PERLU"
3. Upload sisanya

