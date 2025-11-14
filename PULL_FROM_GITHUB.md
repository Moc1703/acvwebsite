# 🔄 Pull dari GitHub di Server Rumahweb

## 🎯 Quick Guide

Jika project sudah ada di GitHub, cukup **pull di server** untuk update semua file sekaligus!

---

## 📋 Step 1: Setup Git di Server (Sekali Saja)

### Via SSH:

```bash
# Masuk ke folder public_html
cd /home/ayap4485/public_html

# Initialize git (jika belum ada)
git init

# Add remote repository
git remote add origin https://github.com/username/kol-specialist-website.git

# Fetch dan checkout
git fetch origin
git checkout -b main origin/main
```

**Ganti `username/kol-specialist-website` dengan URL repository GitHub kamu!**

---

## 📋 Step 2: Pull Update

### Setiap kali ada perubahan di GitHub:

```bash
cd /home/ayap4485/public_html
git pull origin main

# Clear cache
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

---

## 📋 Step 3: Clone Baru (Jika Belum Ada File)

### Jika folder masih kosong atau mau fresh start:

```bash
# Backup dulu (opsional)
cd /home/ayap4485
mv public_html public_html_backup

# Clone repository
git clone https://github.com/username/kol-specialist-website.git public_html

# Masuk ke folder
cd public_html

# Setup .env
cp .env.example .env
# Edit .env dengan konfigurasi server

# Install dependencies (jika perlu)
composer install --no-dev --optimize-autoloader

# Run migrations
php artisan migrate --force

# Clear cache
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

---

## ⚠️ PENTING: File yang Tidak Boleh Di-Overwrite

### File yang harus di-backup sebelum pull:

1. **`.env`** - Konfigurasi server (jangan di-overwrite!)
2. **`storage/`** - File upload dan logs
3. **`bootstrap/cache/`** - Cache files

### Solusi: Gunakan `.gitignore`

Pastikan `.gitignore` sudah include:
```
.env
storage/*
!storage/.gitignore
bootstrap/cache/*
!bootstrap/cache/.gitignore
```

---

## 🔒 Setup .gitignore untuk Production

Pastikan file `.gitignore` sudah benar:

```gitignore
/node_modules
/public/build
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.env.production
.phpunit.result.cache
Homestead.json
Homestead.yaml
auth.json
npm-debug.log
yarn-error.log
/.idea
/.vscode
```

---

## 📋 Step 4: Update di Masa Depan

### Workflow:

1. **Edit di lokal** → Commit → Push ke GitHub
2. **Pull di server** → Clear cache → Test

### Script Otomatis (Opsional):

Buat file `update.sh` di server:

```bash
#!/bin/bash
cd /home/ayap4485/public_html
git pull origin main
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
echo "✅ Update selesai!"
```

**Set permission:**
```bash
chmod +x update.sh
```

**Jalankan:**
```bash
./update.sh
```

---

## ✅ Checklist

- [ ] Git sudah di-setup di server
- [ ] Remote repository sudah di-add
- [ ] File sudah di-pull dari GitHub
- [ ] `.env` sudah di-setup (tidak ter-overwrite)
- [ ] Cache sudah di-clear
- [ ] Website sudah berjalan

---

## 🐛 Troubleshooting

### Error: "Git not found"

**Solusi:** Install git di server atau gunakan manual upload

---

### Error: "Permission denied"

**Solusi:**
```bash
chmod -R 755 /home/ayap4485/public_html
chmod -R 644 /home/ayap4485/public_html/*.php
```

---

### File `.env` Ter-overwrite

**Solusi:**
1. Backup `.env` sebelum pull
2. Pastikan `.env` ada di `.gitignore`
3. Restore `.env` setelah pull

---

### Conflict saat Pull

**Solusi:**
```bash
# Stash perubahan lokal
git stash

# Pull update
git pull origin main

# Apply stash (jika perlu)
git stash pop
```

---

## 🆘 Langkah Selanjutnya

1. **Setup git di server** (Step 1)
2. **Pull dari GitHub** (Step 2)
3. **Setup `.env`** (jika belum ada)
4. **Clear cache**
5. **Test website**
6. **Beri tahu hasilnya**

Jika ada masalah, kirimkan:
- URL repository GitHub
- Error message
- Screenshot (jika perlu)

