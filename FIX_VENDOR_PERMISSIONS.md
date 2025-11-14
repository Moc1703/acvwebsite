# 🔧 FIX: Vendor Permission Denied Error

## ❌ Error yang Terjadi

```
Permission denied in /home/ayap4485/public_html/vendor/composer/autoload_real.php
Failed to open stream: Permission denied
```

**Penyebab:** Folder `vendor/` tidak memiliki permission yang benar untuk dibaca oleh PHP.

---

## ✅ Solusi: Fix Permissions Folder `vendor/`

### Opsi 1: Via File Manager (Recommended)

1. **Buka File Manager di cPanel**

2. **Klik kanan folder `vendor/`** → **"Change Permissions"**

3. **Set permissions:**
   - **Folders:** `755` (atau `750`)
   - **Files:** `644` (atau `640`)
   - **Check:** "Recurse into subdirectories" ✅

4. **Klik "Change Permissions"**

5. **Tunggu sampai proses selesai** (bisa beberapa menit karena banyak file)

---

### Opsi 2: Via SSH/Terminal (Jika Ada)

```bash
cd /home/ayap4485/public_html

# Set permissions untuk folder vendor
find vendor -type d -exec chmod 755 {} \;
find vendor -type f -exec chmod 644 {} \;
```

Atau lebih cepat:
```bash
chmod -R 755 vendor/
find vendor/ -type f -exec chmod 644 {} \;
```

---

### Opsi 3: Via cPanel Terminal

1. **Buka cPanel** → **"Terminal"** atau **"SSH Access"**

2. **Jalankan command:**
```bash
cd public_html
chmod -R 755 vendor/
find vendor/ -type f -exec chmod 644 {} \;
```

---

## ✅ Verifikasi

Setelah fix permissions:

1. **Refresh website:**
   ```
   https://ayathacreativeventures.com
   ```

2. **Pastikan:**
   - ✅ Tidak ada error 500
   - ✅ Website Laravel muncul
   - ✅ Tidak ada "Permission denied" error

---

## 🐛 Jika Masih Error

### Cek Permissions Folder Lainnya

Set permissions untuk folder penting lainnya:

**Via File Manager:**
1. `storage/` → **755**
2. `bootstrap/cache/` → **755**
3. `vendor/` → **755** (folder), **644** (file)
4. `.env` → **644**

**Via SSH (jika ada):**
```bash
cd /home/ayap4485/public_html

# Set permissions
chmod 755 storage
chmod 755 bootstrap/cache
chmod -R 755 vendor/
find vendor/ -type f -exec chmod 644 {} \;
chmod 644 .env
```

---

## 📝 Checklist

- [ ] Folder `vendor/` permissions = `755` (folder), `644` (file)
- [ ] Folder `storage/` permissions = `755`
- [ ] Folder `bootstrap/cache/` permissions = `755`
- [ ] File `.env` permissions = `644`
- [ ] Website sudah bisa diakses tanpa error

---

## 🆘 Jika Masih Bermasalah

1. **Cek apakah folder `vendor/` lengkap**
   - Pastikan semua file ada
   - Jika tidak lengkap, upload ulang folder `vendor/`

2. **Cek owner folder `vendor/`**
   - Owner harus sama dengan user cPanel
   - Jika berbeda, hubungi support Rumahweb

3. **Cek error log lagi**
   - Buka `storage/logs/laravel.log`
   - Lihat error terbaru

