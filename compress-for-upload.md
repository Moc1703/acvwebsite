# 📦 Cara Compress File untuk Upload ke Rumahweb

## 🎯 Tujuan
Membuat file ZIP yang berisi semua file Laravel yang diperlukan untuk upload ke Rumahweb.

---

## 📋 Langkah-Langkah Compress

### Opsi 1: Manual Compress (Windows)

1. **Buat Folder Baru:**
   - Buat folder baru: `laravel-upload` (di luar project folder)
   - Atau buat di Desktop: `C:\Users\YourName\Desktop\laravel-upload`

2. **Copy File & Folder yang Diperlukan:**
   - Copy folder `app/` → ke `laravel-upload/app/`
   - Copy folder `bootstrap/` → ke `laravel-upload/bootstrap/`
   - Copy folder `config/` → ke `laravel-upload/config/`
   - Copy folder `database/` → ke `laravel-upload/database/` (tapi jangan copy `database.sqlite`)
   - Copy folder `public/` → ke `laravel-upload/public/`
   - Copy folder `resources/` → ke `laravel-upload/resources/`
   - Copy folder `routes/` → ke `laravel-upload/routes/`
   - Copy folder `storage/` → ke `laravel-upload/storage/` (kosongkan `storage/logs/` dulu)
   - Copy file `artisan` → ke `laravel-upload/artisan`
   - Copy file `composer.json` → ke `laravel-upload/composer.json`
   - Copy file `composer.lock` → ke `laravel-upload/composer.lock`
   - Copy file `package.json` → ke `laravel-upload/package.json`
   - Copy file `package-lock.json` → ke `laravel-upload/package-lock.json`
   - Copy file `vite.config.js` → ke `laravel-upload/vite.config.js`

3. **Kosongkan Folder yang Perlu Kosong:**
   - Hapus semua file di `laravel-upload/storage/logs/` (biarkan folder kosong)
   - Hapus file `laravel-upload/database/database.sqlite` (jika ada)

4. **Compress Menjadi ZIP:**
   - Select semua file & folder di dalam `laravel-upload/`
   - Right-click → "Send to" → "Compressed (zipped) folder"
   - Atau Right-click → "7-Zip" → "Add to archive" (jika pakai 7-Zip)
   - Nama file: `laravel-upload.zip`
   - Tunggu sampai compress selesai

---

### Opsi 2: Pakai PowerShell Script (Lebih Cepat)

1. **Buka PowerShell** di folder project
2. **Jalankan script berikut:**

```powershell
# Buat folder untuk upload
New-Item -ItemType Directory -Path "laravel-upload" -Force

# Copy folder yang diperlukan
Copy-Item -Path "app" -Destination "laravel-upload\app" -Recurse -Force
Copy-Item -Path "bootstrap" -Destination "laravel-upload\bootstrap" -Recurse -Force
Copy-Item -Path "config" -Destination "laravel-upload\config" -Recurse -Force
Copy-Item -Path "database" -Destination "laravel-upload\database" -Recurse -Force
Copy-Item -Path "public" -Destination "laravel-upload\public" -Recurse -Force
Copy-Item -Path "resources" -Destination "laravel-upload\resources" -Recurse -Force
Copy-Item -Path "routes" -Destination "laravel-upload\routes" -Recurse -Force
Copy-Item -Path "storage" -Destination "laravel-upload\storage" -Recurse -Force

# Copy file root
Copy-Item -Path "artisan" -Destination "laravel-upload\artisan" -Force
Copy-Item -Path "composer.json" -Destination "laravel-upload\composer.json" -Force
Copy-Item -Path "composer.lock" -Destination "laravel-upload\composer.lock" -Force
Copy-Item -Path "package.json" -Destination "laravel-upload\package.json" -Force
Copy-Item -Path "package-lock.json" -Destination "laravel-upload\package-lock.json" -Force
Copy-Item -Path "vite.config.js" -Destination "laravel-upload\vite.config.js" -Force

# Hapus file yang tidak perlu
Remove-Item -Path "laravel-upload\database\database.sqlite" -ErrorAction SilentlyContinue
Remove-Item -Path "laravel-upload\storage\logs\*.log" -ErrorAction SilentlyContinue

# Compress menjadi ZIP
Compress-Archive -Path "laravel-upload\*" -DestinationPath "laravel-upload.zip" -Force

Write-Host "✅ File ZIP sudah dibuat: laravel-upload.zip"
```

---

### Opsi 3: Pakai 7-Zip atau WinRAR

1. **Select semua folder & file yang perlu di-upload**
2. **Right-click → "7-Zip" → "Add to archive"**
3. **Settings:**
   - Archive name: `laravel-upload.zip`
   - Archive format: ZIP
   - Compression level: Normal atau Fast
   - **Exclude:** 
     - `node_modules\*`
     - `.git\*`
     - `.env`
     - `vendor\*`
     - `storage\logs\*.log`
     - `database\database.sqlite`
4. **Klik "OK"**

---

## ✅ Checklist Setelah Compress

Setelah ZIP dibuat, pastikan:

- [ ] File `laravel-upload.zip` sudah dibuat
- [ ] Ukuran ZIP tidak terlalu besar (idealnya < 100MB)
- [ ] Folder `vendor/` tidak termasuk (akan di-install di server)
- [ ] Folder `node_modules/` tidak termasuk
- [ ] File `.env` tidak termasuk
- [ ] File `database.sqlite` tidak termasuk

---

## 📤 Upload ZIP ke Rumahweb

1. **Login ke cPanel Rumahweb**
2. **Buka File Manager**
3. **Navigate ke `public_html/`**
4. **Upload ZIP:**
   - Klik "Upload"
   - Pilih file `laravel-upload.zip`
   - Tunggu sampai upload selesai
5. **Extract ZIP:**
   - Klik kanan file `laravel-upload.zip`
   - Pilih "Extract" atau "Extract Here"
   - Tunggu sampai extract selesai
6. **Pindahkan File:**
   - Buka folder `laravel-upload/` (jika extract membuat folder)
   - Select All file di dalamnya
   - Cut/Move ke `public_html/` (root)
7. **Hapus ZIP dan Folder Kosong:**
   - Hapus file `laravel-upload.zip`
   - Hapus folder `laravel-upload/` (jika masih ada)

---

## 💡 Tips

1. **Ukuran ZIP:** Biasanya 10-50 MB (tanpa vendor)
2. **Waktu Upload:** Tergantung koneksi internet
3. **Waktu Extract:** 1-2 menit di server
4. **Pastikan:** Folder `vendor/` akan di-install via Composer di server

---

## 🆘 Troubleshooting

### ZIP Terlalu Besar
- Pastikan `node_modules/` tidak termasuk
- Pastikan `vendor/` tidak termasuk
- Pastikan `storage/logs/*.log` tidak termasuk

### Extract Error di Server
- Cek apakah file ZIP tidak corrupt
- Cek disk space di server
- Coba extract via SSH jika File Manager bermasalah

---

## ➡️ Next Step

Setelah upload & extract ZIP selesai:
1. Pindahkan file dari `public/` ke root
2. Lanjut ke **STEP 2: Setup Database**

