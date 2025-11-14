# 🚀 Clone Fresh di Server (public_html Sudah Kosong)

## ✅ Status

- ✅ `public_html` sudah dikosongkan
- ✅ Semua file sudah di-push ke GitHub
- ✅ Siap untuk clone fresh!

---

## 🚀 Clone Fresh via SSH

### Step 1: Clone ke public_html

```bash
cd /home/ayap4485/public_html
git clone https://github.com/Moc1703/acvwebsite.git .
```

**Catatan:** Titik (`.`) di akhir berarti clone langsung ke folder `public_html`, bukan ke subfolder.

---

### Step 2: Setup .env

```bash
cd /home/ayap4485/public_html
cp .env.example .env
nano .env
```

**Isi `.env` dengan konfigurasi server:**
```env
APP_NAME="ACV Management"
APP_ENV=production
APP_KEY=base64:... (generate baru atau copy dari backup)
APP_DEBUG=false
APP_URL=https://ayathacreativeventures.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=nama_user
DB_PASSWORD=password_database
```

---

### Step 3: Set Permission

```bash
chmod -R 755 storage bootstrap/cache
chmod 644 .env
```

---

### Step 4: Clear Cache

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

---

### Step 5: Run Migrations (Jika Perlu)

```bash
php artisan migrate --force
```

---

### Step 6: Create Admin User (Jika Perlu)

**Via phpMyAdmin:**
- Import `create-admin-user.sql` atau
- Insert manual ke tabel `users`

**Via SSH:**
```bash
php artisan db:seed --class=AdminUserSeeder
```

---

## ✅ Checklist

- [ ] File sudah di-clone dari GitHub
- [ ] `.env` sudah di-setup dengan konfigurasi server
- [ ] Permission sudah di-set (`755` untuk folder, `644` untuk file)
- [ ] Cache sudah di-clear
- [ ] Migrations sudah di-run (jika perlu)
- [ ] Admin user sudah dibuat (jika perlu)
- [ ] Website sudah di-test

---

## 🐛 Troubleshooting

### Error: "Permission denied"

```bash
chmod -R 755 /home/ayap4485/public_html
chmod -R 644 /home/ayap4485/public_html/*.php
```

---

### Error: "Git not found"

**Solusi:** Download ZIP dari GitHub dan extract ke `public_html`

---

### Error: "APP_KEY not set"

**Generate APP_KEY:**
```bash
php artisan key:generate
```

---

## 🆘 Langkah Selanjutnya

1. **Clone dari GitHub** (Step 1)
2. **Setup `.env`** (Step 2)
3. **Set permission** (Step 3)
4. **Clear cache** (Step 4)
5. **Run migrations** (Step 5)
6. **Create admin user** (Step 6)
7. **Test website**

**Beri tahu hasilnya setelah clone!**

