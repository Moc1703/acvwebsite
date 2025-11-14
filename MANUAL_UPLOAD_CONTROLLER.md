# 🔧 MANUAL UPLOAD: LandingPageController

## ⚠️ Permission Issue - Solusi Manual

Karena script tidak bisa membuat file (permission issue), kita akan upload manual via **File Manager**.

---

## 📋 Step-by-Step Manual Upload

### Step 1: Buka File Manager di cPanel

1. **Login ke cPanel**
2. **Buka "File Manager"**
3. **Masuk ke folder `app/Http/Controllers/`**
   - Jika folder belum ada, buat dulu:
     - Klik kanan → **"Create Folder"**
     - Nama: `Controllers`
     - Path: `app/Http/Controllers/`

---

### Step 2: Set Permission Folder (PENTING!)

1. **Klik kanan folder `app/Http/Controllers/`**
2. **Pilih "Change Permissions"**
3. **Set permission: `755`**
   - ✅ Owner: Read, Write, Execute
   - ✅ Group: Read, Execute
   - ✅ Public: Read, Execute
4. **Klik "Change Permissions"**

---

### Step 3: Upload File Controller

**Opsi A: Upload File Langsung**

1. **Buka File Manager**
2. **Masuk ke folder `app/Http/Controllers/`**
3. **Klik "Upload"** (di toolbar atas)
4. **Upload file `LandingPageController.php`** (yang sudah saya buatkan)
5. **Tunggu sampai selesai**

**Opsi B: Copy-Paste via File Manager**

1. **Buka File Manager**
2. **Masuk ke folder `app/Http/Controllers/`**
3. **Klik "New File"** → Nama: `LandingPageController.php`
4. **Klik kanan file** → **"Edit"**
5. **Copy semua isi dari file lokal** (`LandingPageController.php`)
6. **Paste ke editor**
7. **Save**

---

### Step 4: Set Permission File

1. **Klik kanan `LandingPageController.php`**
2. **Pilih "Change Permissions"**
3. **Set permission: `644`**
   - ✅ Owner: Read, Write
   - ✅ Group: Read
   - ✅ Public: Read
4. **Klik "Change Permissions"**

---

### Step 5: Pastikan Controller.php Ada

1. **Cek apakah file `Controller.php` ada di folder `app/Http/Controllers/`**
2. **Jika belum ada, buat file baru: `Controller.php`**
3. **Copy isi berikut:**

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
```

4. **Set permission: `644`**

---

### Step 6: Clear Cache (Via SSH atau File Manager)

**Opsi A: Via SSH (Jika Ada)**

```bash
cd /home/ayap4485/public_html
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

**Opsi B: Via File Manager (Manual)**

1. **Hapus folder `bootstrap/cache/`** (jika ada)
2. **Buat folder baru:** `bootstrap/cache/`
3. **Set permission: `755`**

---

### Step 7: Test Website

1. **Refresh website:**
   ```
   https://ayathacreativeventures.com
   ```
2. **Pastikan:**
   - ✅ Tidak ada error 500
   - ✅ Website Laravel muncul
   - ✅ Tidak ada "Controller does not exist" error

---

## ✅ Checklist

- [ ] Folder `app/Http/Controllers/` sudah dibuat
- [ ] Permission folder `app/Http/Controllers/` = `755`
- [ ] File `Controller.php` sudah ada (base class)
- [ ] File `LandingPageController.php` sudah di-upload
- [ ] Permission file `LandingPageController.php` = `644`
- [ ] Cache sudah di-clear
- [ ] Website sudah di-refresh
- [ ] Error sudah hilang

---

## 🐛 Troubleshooting

### Error: "Class Controller not found"

**Solusi:** Pastikan file `Controller.php` ada di `app/Http/Controllers/`

---

### Error: "Permission denied"

**Solusi:**
1. Set permission folder `app/Http/Controllers/` = `755`
2. Set permission file `LandingPageController.php` = `644`

---

### Error: "File not found"

**Solusi:**
1. Pastikan file ada di path yang benar: `app/Http/Controllers/LandingPageController.php`
2. Cek spelling filename (case-sensitive)

---

## 📁 File yang Perlu Di-Upload

1. **`LandingPageController.php`** → Upload ke `app/Http/Controllers/`
2. **`Controller.php`** (jika belum ada) → Upload ke `app/Http/Controllers/`

---

## 🆘 Langkah Selanjutnya

1. **Buka File Manager**
2. **Set permission folder `app/Http/Controllers/` = `755`**
3. **Upload file `LandingPageController.php`**
4. **Set permission file = `644`**
5. **Clear cache**
6. **Test website**
7. **Beri tahu hasilnya**

Jika masih error, kirimkan:
- Screenshot struktur folder `app/Http/Controllers/`
- Error message baru (jika ada)
