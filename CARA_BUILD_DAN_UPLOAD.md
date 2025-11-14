# 🎨 Cara Build Assets & Upload ke Server - Panduan Praktis

## 🎯 Apa itu Build?

Build adalah proses meng-compile file CSS dan JavaScript dari source code menjadi file yang siap digunakan di production. File hasil build akan lebih kecil dan cepat.

---

## 📋 File yang Perlu Di-build

- **CSS:** `resources/css/app.css` → menjadi `public/build/assets/app-XXXXX.css`
- **JavaScript:** `resources/js/app.js` → menjadi `public/build/assets/app-XXXXX.js`
- **Manifest:** `public/build/manifest.json` (file mapping)

---

## 🚀 Cara Build (Step by Step)

### Langkah 1: Buka Terminal di Folder Project

1. **Buka folder project** di File Explorer
2. **Klik kanan di folder** → "Open in Terminal" atau "Open PowerShell here"
3. Atau buka Terminal/PowerShell dan:
   ```bash
   cd "E:\New folder (6)\kol-specialist-website"
   ```

---

### Langkah 2: Install Dependencies (Jika Belum)

```bash
npm install
```

**Waktu:** 1-3 menit

**Output yang diharapkan:**
- added X packages
- found X vulnerabilities (biasanya aman)

---

### Langkah 3: Build Assets

```bash
npm run build
```

**Waktu:** 30 detik - 2 menit

**Output yang diharapkan:**
```
VITE v5.x.x  building for production...
✓ 2 modules transformed.
dist/index.html                   0.52 kB │ gzip: 0.30 kB
dist/assets/index-XXXXX.css        XX kB │ gzip: XX kB
dist/assets/index-XXXXX.js         XX kB │ gzip: XX kB
✓ built in XXXms
```

**Atau:**
```
VITE v5.x.x  building for production...
✓ built in XXXms
```

---

### Langkah 4: Verifikasi Build

Setelah build selesai, cek folder `public/build/`:

```
public/build/
├── assets/
│   ├── app-XXXXX.css    ← File CSS yang sudah di-build
│   └── app-XXXXX.js     ← File JS yang sudah di-build
└── manifest.json        ← File mapping
```

**Pastikan file-file ini ada!**

---

## 📤 Cara Upload Build ke Server

### Opsi 1: Upload Folder build/ Langsung

1. **Login ke cPanel Rumahweb**
2. **Buka File Manager**
3. **Navigate ke `public_html/`**
4. **Upload folder `build/`:**
   - Buka folder `public/build/` di local komputer
   - **Select All** (Ctrl+A) semua file di dalamnya:
     - Folder `assets/`
     - File `manifest.json`
   - **Drag & Drop** ke File Manager
   - Atau klik "Upload" → pilih file
5. **Pastikan struktur di server:**
   ```
   public_html/build/
   ├── assets/
   │   ├── app-XXXXX.css
   │   └── app-XXXXX.js
   └── manifest.json
   ```

---

### Opsi 2: Compress & Upload (Lebih Mudah)

1. **Compress folder `build/`:**
   
   **Via PowerShell:**
   ```powershell
   Compress-Archive -Path "public\build" -DestinationPath "build.zip" -Force
   ```
   
   **Atau Manual:**
   - Right-click folder `public/build/`
   - "Send to" → "Compressed (zipped) folder"
   - File `build.zip` akan dibuat

2. **Upload `build.zip` ke server:**
   - Login cPanel → File Manager → `public_html/`
   - Upload `build.zip`
   - Extract di server
   - Hapus `build.zip` setelah extract

---

## ✅ Checklist Build & Upload

- [ ] Sudah jalankan `npm install` (jika belum)
- [ ] Sudah jalankan `npm run build`
- [ ] Folder `public/build/` sudah dibuat
- [ ] File `manifest.json` ada
- [ ] Folder `assets/` ada dengan CSS & JS
- [ ] Sudah upload folder `build/` ke server
- [ ] Folder `build/` sudah ada di `public_html/build/`

---

## 🐛 Troubleshooting

### Error: npm not found
**Solusi:**
- Install Node.js: https://nodejs.org/
- Restart terminal setelah install

### Error: npm run build failed
**Solusi:**
- Pastikan `npm install` sudah dijalankan
- Cek error message di terminal
- Pastikan koneksi internet stabil

### Build Sudah Ada Tapi Website Masih Error
**Solusi:**
- Pastikan folder `build/` sudah di-upload ke server
- Pastikan `APP_URL` di `.env` sudah benar
- Clear browser cache (Ctrl + Shift + R)
- Cek browser console untuk error

---

## 💡 Tips

1. **Build Setiap Kali Update CSS/JS:**
   - Setelah edit CSS atau JS, jalankan `npm run build` lagi
   - Upload ulang folder `build/` ke server

2. **Ukuran Build:**
   - Biasanya 100-500 KB
   - Sudah di-minify dan optimize

3. **Manifest.json:**
   - File penting untuk mapping
   - Jangan dihapus atau diubah

---

## 📝 Quick Command Reference

```bash
# Install dependencies
npm install

# Build untuk production
npm run build

# Build dan watch (untuk development)
npm run dev
```

---

## ➡️ Setelah Build & Upload Selesai

Lanjut ke **STEP 7: Testing** - Test website apakah sudah berjalan dengan benar.

