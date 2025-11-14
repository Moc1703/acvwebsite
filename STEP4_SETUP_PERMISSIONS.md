# 🔧 STEP 4: Setup Folder Permissions di Rumahweb - Panduan Detail

## 🎯 Tujuan
Mengatur permissions folder `storage/` dan `bootstrap/cache/` agar Laravel bisa menulis file (logs, cache, sessions).

---

## 📋 Folder yang Perlu Di-set Permissions

1. **`storage/`** - Folder untuk menyimpan file upload, logs, cache
2. **`bootstrap/cache/`** - Folder untuk menyimpan cache Laravel
3. **`.env`** - File environment (sudah di-set di Step 3)

---

## 🚀 Langkah-Langkah Setup Permissions

### A. Login ke cPanel Rumahweb

1. **Buka Browser**
2. **Akses cPanel:**
   - `https://yourdomain.com/cpanel`
   - Atau `https://cpanel.rumahweb.com`
3. **Login** dengan username & password Rumahweb

---

### B. Buka File Manager

1. **Cari icon "File Manager"** di cPanel
2. **Klik "File Manager"**
3. **Navigate ke `public_html/`** (root website)
4. **Pastikan kamu di folder yang benar**

---

### C. Set Permissions untuk Folder `storage/`

1. **Cari folder `storage/`** di File Manager
2. **Klik kanan folder `storage/`**
3. **Pilih "Change Permissions"**
4. **Set permissions ke `755`:**
   - **Owner:** Read + Write + Execute (centang semua)
   - **Group:** Read + Execute (centang Read dan Execute)
   - **Public:** Read + Execute (centang Read dan Execute)
   - **Write untuk Group/Public:** Jangan centang
5. **Klik "Change Permissions"**
6. **Konfirmasi:** Permissions berubah menjadi `755`

---

### D. Set Permissions untuk Folder `bootstrap/cache/`

1. **Buka folder `bootstrap/`**
2. **Cari folder `cache/`** di dalam `bootstrap/`
3. **Klik kanan folder `cache/`**
4. **Pilih "Change Permissions"**
5. **Set permissions ke `755`:**
   - **Owner:** Read + Write + Execute (centang semua)
   - **Group:** Read + Execute (centang Read dan Execute)
   - **Public:** Read + Execute (centang Read dan Execute)
   - **Write untuk Group/Public:** Jangan centang
6. **Klik "Change Permissions"**
7. **Konfirmasi:** Permissions berubah menjadi `755`

---

### E. Verifikasi Permissions

1. **Cek folder `storage/`:**
   - Klik kanan → "Change Permissions"
   - Pastikan menunjukkan `755`
   
2. **Cek folder `bootstrap/cache/`:**
   - Klik kanan → "Change Permissions"
   - Pastikan menunjukkan `755`

3. **Cek file `.env`:**
   - Klik kanan → "Change Permissions"
   - Pastikan menunjukkan `644`

---

## ✅ Checklist Step 4

Setelah setup permissions selesai:

- [ ] Folder `storage/` permissions = `755`
- [ ] Folder `bootstrap/cache/` permissions = `755`
- [ ] File `.env` permissions = `644`
- [ ] Semua permissions sudah benar

---

## 📊 Penjelasan Permissions

### Permission `755` (untuk folder):
- **Owner (7):** Read + Write + Execute
- **Group (5):** Read + Execute
- **Public (5):** Read + Execute
- **Digunakan untuk:** Folder yang perlu bisa diakses dan ditulis oleh Laravel

### Permission `644` (untuk file):
- **Owner (6):** Read + Write
- **Group (4):** Read
- **Public (4):** Read
- **Digunakan untuk:** File konfigurasi seperti `.env`

---

## 🐛 Troubleshooting

### Permission Tidak Bisa Diubah
**Solusi:**
- Pastikan kamu login sebagai owner domain
- Coba ubah via SSH jika File Manager tidak bisa
- Hubungi support Rumahweb jika masih bermasalah

### Folder Masih Tidak Bisa Ditulis
**Solusi:**
- Pastikan permissions benar (`755`)
- Pastikan folder `storage/` dan subfoldernya permissions `755`
- Cek apakah disk space masih tersedia

### Error: Permission Denied
**Solusi:**
- Pastikan semua subfolder di `storage/` juga permissions `755`
- Pastikan folder `bootstrap/cache/` permissions `755`
- Clear cache setelah ubah permissions

---

## ➡️ Next Step

Setelah Step 4 selesai, lanjut ke:
**STEP 5: Install Dependencies & Run Migrations** - Install Composer dependencies dan setup database

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Pastikan semua step sudah diikuti
2. Cek permissions dengan benar
3. Hubungi support Rumahweb jika masalah server-related

