# 🎨 STEP 6: Build Assets (CSS & JS) - Panduan Detail

## 🎯 Tujuan
Build CSS dan JavaScript untuk production agar website bisa tampil dengan styling dan fungsi yang benar.

---

## 📋 Persiapan

Pastikan sudah selesai:
- ✅ Step 1-5 sudah selesai
- ✅ Folder `vendor/` sudah ada di server
- ✅ Database sudah di-setup

---

## 🚀 Opsi A: Build di Local & Upload (Recommended)

Karena biasanya Node.js tidak tersedia di shared hosting, kita build di local lalu upload.

### Langkah 1: Build Assets di Local Komputer

1. **Buka Terminal/PowerShell** di folder project kamu

2. **Install Dependencies (jika belum):**
   ```bash
   npm install
   ```
   
   **Waktu:** 1-3 menit

3. **Build untuk Production:**
   ```bash
   npm run build
   ```
   
   **Waktu:** 30 detik - 2 menit
   
   **Output yang diharapkan:**
   - VITE v5.x.x building for production...
   - ✓ built in XXXms
   - File akan dibuat di `public/build/`

4. **Verifikasi:**
   - Pastikan folder `public/build/` sudah dibuat
   - Di dalamnya ada:
     - Folder `assets/` (berisi CSS & JS)
     - File `manifest.json`

---

### Langkah 2: Upload Folder build/ ke Server

**Opsi 1: Upload Manual**
1. **Login ke cPanel Rumahweb**
2. **Buka File Manager**
3. **Navigate ke `public_html/`**
4. **Upload folder `build/`:**
   - Buka folder `public/build/` di local
   - Select semua file di dalamnya
   - Upload ke `public_html/build/`
   - Pastikan struktur: `public_html/build/assets/` dan `public_html/build/manifest.json`

**Opsi 2: Compress & Upload (Lebih Mudah)**
1. **Compress folder `build/`:**
   ```powershell
   Compress-Archive -Path "public\build" -DestinationPath "build.zip" -Force
   ```
2. **Upload `build.zip`** ke server
3. **Extract** di `public_html/`
4. **Pastikan struktur:** `public_html/build/`

---

## 🚀 Opsi B: Build via SSH (Jika Node.js Tersedia)

Jika di server ada Node.js:

1. **Connect via SSH**
2. **Navigate ke root:**
   ```bash
   cd ~/public_html
   ```
3. **Install Dependencies:**
   ```bash
   npm install
   ```
4. **Build:**
   ```bash
   npm run build
   ```

---

## ✅ Checklist Step 6

- [ ] Sudah build assets di local (`npm run build`)
- [ ] Folder `public/build/` sudah dibuat di local
- [ ] Sudah upload folder `build/` ke server
- [ ] Folder `build/` sudah ada di `public_html/build/`
- [ ] File `manifest.json` ada di `public_html/build/`
- [ ] Folder `assets/` ada di `public_html/build/assets/`

---

## 🐛 Troubleshooting

### Build Error di Local
**Solusi:**
- Pastikan Node.js sudah terinstall
- Pastikan `npm install` sudah dijalankan
- Cek error message di terminal

### Assets Tidak Load di Website
**Solusi:**
- Pastikan folder `build/` ada di root `public_html/`
- Pastikan `APP_URL` di `.env` sudah benar
- Clear browser cache
- Cek file permissions

### Build Folder Tidak Ada
**Solusi:**
- Pastikan `npm run build` sudah dijalankan
- Cek apakah ada error saat build
- Pastikan Vite sudah terkonfigurasi dengan benar

---

## 📝 Catatan Penting

1. **Folder Build:**
   - Harus ada di `public_html/build/`
   - Berisi CSS dan JS yang sudah di-compile
   - Diperlukan agar website bisa tampil dengan styling

2. **Manifest.json:**
   - File penting untuk Vite
   - Harus ada di `public_html/build/manifest.json`

3. **Assets:**
   - File CSS & JS sudah di-minify dan optimize
   - Ukuran lebih kecil untuk loading cepat

---

## ➡️ Next Step

Setelah Step 6 selesai, lanjut ke:
**STEP 7: Testing** - Test website apakah sudah berjalan dengan benar

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Pastikan `npm run build` sudah dijalankan tanpa error
2. Pastikan folder `build/` sudah di-upload dengan benar
3. Cek browser console untuk error JavaScript
4. Pastikan `APP_URL` di `.env` sudah benar

