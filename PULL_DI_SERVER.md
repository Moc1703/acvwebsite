# 🔄 Pull di Server Rumahweb

## ✅ Status

-   ✅ File sudah di-push ke GitHub: `https://github.com/Moc1703/acvwebsite.git`
-   ✅ Siap untuk pull di server!

---

## 🚀 Pull di Server (Via SSH)

### Opsi A: Clone Baru (Jika Folder Masih Kosong)

```bash
cd /home/ayap4485/public_html
git clone https://github.com/Moc1703/acvwebsite.git .
```

**Atau clone ke folder baru dulu:**

```bash
cd /home/ayap4485
git clone https://github.com/Moc1703/acvwebsite.git public_html_new
# Cek dulu, kalau OK baru rename
mv public_html public_html_backup
mv public_html_new public_html
```

---

### Opsi B: Pull ke Folder yang Sudah Ada

```bash
cd /home/ayap4485/public_html

# Initialize git (jika belum ada)
git init

# Add remote
git remote add origin https://github.com/Moc1703/acvwebsite.git

# Fetch dan checkout
git fetch origin
git checkout -b main origin/main
```

**Atau jika sudah ada git:**

```bash
cd /home/ayap4485/public_html
git pull origin main
```

---

## ⚠️ PENTING: Backup File Penting!

**Sebelum pull, backup file penting:**

1. **`.env`** - Konfigurasi server (JANGAN di-overwrite!)
2. **`storage/`** - File upload dan logs
3. **`bootstrap/cache/`** - Cache files

**Cara backup:**

```bash
cd /home/ayap4485/public_html
cp .env .env.backup
cp -r storage storage_backup
```

---

## 📋 Setelah Pull

### 1. Setup .env (Jika Belum Ada)

```bash
cd /home/ayap4485/public_html
cp .env.example .env
# Edit .env dengan konfigurasi server
nano .env
```

### 2. Set Permission

```bash
chmod -R 755 storage bootstrap/cache
chmod 644 .env
```

### 3. Clear Cache

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

### 4. Run Migrations (Jika Perlu)

```bash
php artisan migrate --force
```

---

## ✅ Checklist

-   [ ] File sudah di-pull dari GitHub
-   [ ] `.env` sudah di-setup (tidak ter-overwrite)
-   [ ] Permission sudah di-set (`755` untuk folder, `644` untuk file)
-   [ ] Cache sudah di-clear
-   [ ] Website sudah di-test

---

## 🐛 Troubleshooting

### Error: "Permission denied"

**Solusi:**

```bash
chmod -R 755 /home/ayap4485/public_html
chmod -R 644 /home/ayap4485/public_html/*.php
```

---

### Error: "Git not found"

**Solusi:** Install git di server atau pakai manual upload (download ZIP dari GitHub)

---

### File `.env` Ter-overwrite

**Solusi:**

```bash
# Restore dari backup
cp .env.backup .env
```

---

## 🆘 Langkah Selanjutnya

1. **Masuk ke server via SSH**
2. **Pull dari GitHub** (pilih Opsi A atau B di atas)
3. **Setup `.env`** (jika belum ada)
4. **Set permission**
5. **Clear cache**
6. **Test website**

**Beri tahu hasilnya setelah pull!**
