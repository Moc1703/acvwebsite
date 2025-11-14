# 🔧 FIX: Permission Issue - Upload Manual

## ⚠️ Masalah

Script tidak bisa membuat file karena **permission issue**. Solusinya: **Upload manual via File Manager**.

---

## 🎯 Solusi Cepat (5 Menit)

### Step 1: Set Permission Folder

1. **Buka File Manager di cPanel**
2. **Masuk ke folder `app/Http/`**
3. **Klik kanan folder `Controllers/`** → **"Change Permissions"**
4. **Set permission: `755`**
   ```
   ✅ Owner: Read, Write, Execute (7)
   ✅ Group: Read, Execute (5)
   ✅ Public: Read, Execute (5)
   ```
5. **Klik "Change Permissions"**

---

### Step 2: Upload File Controller

**Cara 1: Upload File Langsung**

1. **Buka File Manager**
2. **Masuk ke folder `app/Http/Controllers/`**
3. **Klik "Upload"** (di toolbar atas)
4. **Upload 2 file:**
   - ✅ `Controller.php` (base class)
   - ✅ `LandingPageController.php`
5. **Tunggu sampai selesai**

**Cara 2: Copy-Paste via Editor**

1. **Buka File Manager**
2. **Masuk ke folder `app/Http/Controllers/`**
3. **Klik "New File"** → Nama: `LandingPageController.php`
4. **Klik kanan file** → **"Edit"**
5. **Copy semua isi dari file lokal** (`LandingPageController.php`)
6. **Paste ke editor**
7. **Save**

**Ulangi untuk `Controller.php` jika belum ada**

---

### Step 3: Set Permission File

1. **Klik kanan `LandingPageController.php`**
2. **Pilih "Change Permissions"**
3. **Set permission: `644`**
   ```
   ✅ Owner: Read, Write (6)
   ✅ Group: Read (4)
   ✅ Public: Read (4)
   ```
4. **Klik "Change Permissions"**

**Ulangi untuk `Controller.php`**

---

### Step 4: Clear Cache

**Via SSH (Jika Ada):**

```bash
cd /home/ayap4485/public_html
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

**Via File Manager (Manual):**

1. **Hapus folder `bootstrap/cache/`** (jika ada)
2. **Buat folder baru:** `bootstrap/cache/`
3. **Set permission: `755`**

---

### Step 5: Test Website

1. **Refresh website:**
   ```
   https://ayathacreativeventures.com
   ```
2. **Pastikan:**
   - ✅ Tidak ada error 500
   - ✅ Website Laravel muncul
   - ✅ Tidak ada "Controller does not exist" error

---

## 📁 File yang Perlu Di-Upload

Saya sudah buatkan 2 file siap pakai:

1. **`Controller.php`** → Upload ke `app/Http/Controllers/`
   - Base class untuk semua controller
   - **Wajib ada!**

2. **`LandingPageController.php`** → Upload ke `app/Http/Controllers/`
   - Controller utama untuk landing page

---

## ✅ Checklist

- [ ] Permission folder `app/Http/Controllers/` = `755`
- [ ] File `Controller.php` sudah di-upload
- [ ] File `LandingPageController.php` sudah di-upload
- [ ] Permission file `Controller.php` = `644`
- [ ] Permission file `LandingPageController.php` = `644`
- [ ] Cache sudah di-clear
- [ ] Website sudah di-refresh
- [ ] Error sudah hilang

---

## 🐛 Troubleshooting

### Masih Error: "Controller does not exist"

**Cek:**
1. ✅ File ada di path yang benar: `app/Http/Controllers/LandingPageController.php`
2. ✅ Spelling filename benar (case-sensitive)
3. ✅ Permission file = `644`
4. ✅ Permission folder = `755`
5. ✅ Cache sudah di-clear

---

### Masih Error: "Class Controller not found"

**Solusi:**
1. Pastikan file `Controller.php` ada di `app/Http/Controllers/`
2. Isi file harus sesuai dengan yang saya berikan
3. Permission = `644`

---

## 🆘 Langkah Selanjutnya

1. **Set permission folder `app/Http/Controllers/` = `755`**
2. **Upload file `Controller.php`** (jika belum ada)
3. **Upload file `LandingPageController.php`**
4. **Set permission kedua file = `644`**
5. **Clear cache**
6. **Test website**
7. **Beri tahu hasilnya**

Jika masih error, kirimkan:
- Screenshot struktur folder `app/Http/Controllers/`
- Screenshot permission kedua file
- Error message baru (jika ada)
