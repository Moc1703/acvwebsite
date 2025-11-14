# 🔧 STEP 4: Setup Folder Permissions via SSH - Lebih Cepat!

## 🎯 Tujuan
Mengatur permissions folder `storage/` dan `bootstrap/cache/` via SSH (lebih cepat daripada manual).

---

## 🚀 Langkah-Langkah via SSH

### A. Buka SSH Terminal

**Opsi 1: Via cPanel**
1. **Login ke cPanel Rumahweb**
2. **Cari icon "Terminal"** atau **"SSH Access"** di cPanel
3. **Klik untuk buka Terminal**

**Opsi 2: Via SSH Client**
1. **Download SSH Client:**
   - **PuTTY** (Windows): https://www.putty.org/
   - **Terminal** (Mac/Linux): Built-in
2. **Connect ke Server:**
   - Host: `yourdomain.com` atau IP server dari Rumahweb
   - Port: `22` (SSH)
   - Username: cPanel username
   - Password: cPanel password
   - Klik "Connect" atau "Open"

---

### B. Navigate ke Root Directory

Setelah connect via SSH, jalankan:

```bash
cd ~/public_html
```

Atau jika Laravel di subfolder:

```bash
cd ~/public_html/laravel
```

---

### C. Set Permissions via Command

Jalankan command berikut satu per satu:

```bash
# Set permissions untuk storage/
chmod -R 755 storage/

# Set permissions untuk bootstrap/cache/
chmod -R 755 bootstrap/cache/

# Set permissions untuk .env
chmod 644 .env

# Verifikasi permissions
ls -la storage/
ls -la bootstrap/cache/
ls -la .env
```

---

### D. Verifikasi

Setelah command selesai, cek output:

- Folder `storage/` harus menunjukkan `drwxr-xr-x` (755)
- Folder `bootstrap/cache/` harus menunjukkan `drwxr-xr-x` (755)
- File `.env` harus menunjukkan `-rw-r--r--` (644)

---

## ✅ Checklist Step 4 (via SSH)

Setelah setup permissions selesai:

- [ ] Sudah connect via SSH
- [ ] Sudah navigate ke `public_html/`
- [ ] Sudah jalankan `chmod -R 755 storage/`
- [ ] Sudah jalankan `chmod -R 755 bootstrap/cache/`
- [ ] Sudah jalankan `chmod 644 .env`
- [ ] Sudah verifikasi permissions

---

## 🐛 Troubleshooting

### SSH Tidak Tersedia di Rumahweb
**Solusi:**
- Gunakan cara manual via File Manager (Step 4 manual)
- Atau hubungi support Rumahweb untuk enable SSH

### Permission Denied
**Solusi:**
- Pastikan login sebagai owner domain
- Pastikan di folder yang benar (`public_html/`)

### Command Tidak Dikenal
**Solusi:**
- Pastikan menggunakan command yang benar
- Cek apakah di folder yang benar

---

## 💡 Keuntungan Pakai SSH

1. **Lebih Cepat** - Hanya beberapa detik
2. **Lebih Mudah** - Copy-paste command saja
3. **Bisa Batch** - Set semua sekaligus
4. **Lebih Akurat** - Tidak perlu klik manual

---

## ➡️ Next Step

Setelah Step 4 selesai (via SSH atau manual), lanjut ke:
**STEP 5: Install Dependencies & Run Migrations** - Install Composer dependencies dan setup database

---

## 📝 Catatan

Jika SSH tidak tersedia di Rumahweb:
- Gunakan cara manual via File Manager
- Atau hubungi support Rumahweb untuk enable SSH access

