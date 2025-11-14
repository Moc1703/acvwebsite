# ⚡ Quick Deploy Guide - Rumah123

## 🎯 Langkah Cepat (5 Menit)

### 1️⃣ Upload Files
```
1. Login cPanel → File Manager
2. Buka folder public_html
3. Upload semua file Laravel (kecuali node_modules, .git)
4. Copy isi folder public/ ke public_html/
```

### 2️⃣ Setup Database
```
1. cPanel → MySQL Databases
2. Buat database baru
3. Buat user baru
4. Assign user ke database
```

### 3️⃣ Konfigurasi .env
```
1. Buat file .env di root
2. Copy dari .env.example atau buat manual
3. Isi database credentials
4. Set APP_ENV=production
5. Set APP_DEBUG=false
6. Generate APP_KEY
```

### 4️⃣ Set Permissions
```
storage/ → 755
bootstrap/cache/ → 755
.env → 644
```

### 5️⃣ Install & Migrate (Via SSH)
```bash
cd ~/public_html
composer install --optimize-autoloader --no-dev
php artisan key:generate
php artisan migrate --force
php artisan db:seed --class=AdminUserSeeder
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 6️⃣ Build Assets
```bash
npm install
npm run build
# Atau upload folder build/ dari local
```

### 7️⃣ Test
```
✅ https://yourdomain.com
✅ https://yourdomain.com/admin/login
✅ https://yourdomain.com/sitemap.xml
```

---

## 🔑 Default Admin Login
```
Email: admin@acvmanagement.com
Password: admin123
⚠️ GANTI PASSWORD SETELAH LOGIN PERTAMA!
```

---

## 📞 Butuh Bantuan?
Lihat file `DEPLOYMENT_RUMAH123.md` untuk panduan lengkap!

