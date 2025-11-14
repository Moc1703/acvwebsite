# 🗃️ STEP 5: Install Dependencies & Run Migrations - Panduan Detail

## 🎯 Tujuan
Install Composer dependencies, generate APP_KEY, run migrations, dan seed admin user.

---

## 📋 Persiapan

Pastikan sudah selesai:
- ✅ Step 1: Files sudah di-upload
- ✅ Step 2: Database sudah dibuat
- ✅ Step 3: File `.env` sudah dikonfigurasi
- ✅ Step 4: Permissions sudah di-set

---

## 🚀 Opsi A: Via SSH (Recommended - Lebih Mudah)

### Langkah 1: Buka SSH Terminal

**Via cPanel:**
1. Login ke cPanel Rumahweb
2. Cari icon **"Terminal"** atau **"SSH Access"**
3. Klik untuk buka Terminal

**Via SSH Client:**
1. Download **PuTTY** (Windows): https://www.putty.org/
2. Connect dengan:
   - Host: `yourdomain.com` atau IP server
   - Port: `22`
   - Username: cPanel username
   - Password: cPanel password

---

### Langkah 2: Navigate ke Root Directory

```bash
cd ~/public_html
```

Atau jika Laravel di subfolder:
```bash
cd ~/public_html/laravel
```

---

### Langkah 3: Install Composer Dependencies

```bash
composer install --optimize-autoloader --no-dev --no-interaction
```

**Waktu:** 2-5 menit (tergantung koneksi)

**Output yang diharapkan:**
- Installing dependencies...
- Package operations: X installs
- Writing lock file
- Generating optimized autoload files

---

### Langkah 4: Generate Application Key

```bash
php artisan key:generate --force
```

**Output yang diharapkan:**
- Application key set successfully.

**Catatan:** Key akan otomatis masuk ke file `.env`

---

### Langkah 5: Run Migrations

```bash
php artisan migrate --force
```

**Output yang diharapkan:**
- Migrating: 2025_11_12_064955_create_inquiries_table
- Migrated: 2025_11_12_064955_create_inquiries_table
- Migrating: 2025_11_13_085209_add_user_type_to_inquiries_table
- Migrated: 2025_11_13_085209_add_user_type_to_inquiries_table
- dll...

---

### Langkah 6: Seed Admin User

```bash
php artisan db:seed --class=AdminUserSeeder --force
```

**Output yang diharapkan:**
- Seeding: AdminUserSeeder
- Database seeding completed successfully.

**Admin User yang dibuat:**
- Email: `admin@acvmanagement.com`
- Password: `admin123`
- **⚠️ GANTI PASSWORD SETELAH LOGIN PERTAMA!**

---

### Langkah 7: Optimize Application

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

**Output yang diharapkan:**
- Configuration cached successfully.
- Routes cached successfully.
- Blade templates cached successfully.

---

## 🚀 Opsi B: Via Manual (Jika SSH Tidak Tersedia)

### Langkah 1: Upload Vendor Folder

1. **Di Local Komputer:**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```
2. **Upload folder `vendor/`** ke server:
   - Via FTP atau File Manager
   - Upload ke `public_html/vendor/`
   - **Waktu:** 10-30 menit (folder besar ~50-100 MB)

---

### Langkah 2: Generate APP_KEY Manual

1. **Buka online tool:** https://generate-random.org/api-key-generator
2. **Generate 32 karakter random**
3. **Edit file `.env`** di server:
   ```
   APP_KEY=base64:generated_key_here
   ```
4. **Save** file

---

### Langkah 3: Run Migrations via phpMyAdmin

1. **Buka phpMyAdmin** di cPanel
2. **Pilih database** yang sudah dibuat
3. **Klik tab "SQL"**
4. **Copy-paste SQL berikut:**

```sql
-- Create users table
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create inquiries table
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `service_interest` varchar(255) DEFAULT NULL,
  `user_type` enum('brand','kol') NOT NULL,
  `status` varchar(50) DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create cache table
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create cache_locks table
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create jobs table
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create job_batches table
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create failed_jobs table
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

5. **Klik "Go"** untuk execute SQL

---

### Langkah 4: Create Admin User Manual

1. **Buka phpMyAdmin** → Pilih database → Table `users`
2. **Klik tab "Insert"**
3. **Generate password hash:**
   - Buka: https://bcrypt-generator.com/
   - Password: `admin123`
   - Klik "Generate"
   - Copy hash yang dihasilkan
4. **Insert data:**
   ```sql
   INSERT INTO users (name, email, password, created_at, updated_at) 
   VALUES ('ACV Admin', 'admin@acvmanagement.com', '$2y$10$generated_hash_here', NOW(), NOW());
   ```
5. **Klik "Go"**

---

## ✅ Checklist Step 5

Via SSH:
- [ ] Sudah connect via SSH
- [ ] Sudah navigate ke `public_html/`
- [ ] Sudah jalankan `composer install`
- [ ] Sudah jalankan `php artisan key:generate`
- [ ] Sudah jalankan `php artisan migrate`
- [ ] Sudah jalankan `php artisan db:seed`
- [ ] Sudah jalankan optimize commands

Via Manual:
- [ ] Folder `vendor/` sudah di-upload
- [ ] `APP_KEY` sudah di-generate dan di-set
- [ ] Tables sudah di-create via phpMyAdmin
- [ ] Admin user sudah di-create

---

## 🐛 Troubleshooting

### Composer Command Not Found
**Solusi:**
- Pastikan Composer sudah terinstall di server
- Atau upload `vendor/` folder manual

### Migration Error
**Solusi:**
- Cek database credentials di `.env`
- Pastikan database sudah dibuat
- Pastikan user sudah di-assign ke database

### APP_KEY Error
**Solusi:**
- Pastikan `APP_KEY=` ada di `.env`
- Generate manual jika perlu

---

## 📝 Catatan Penting

1. **Admin Credentials:**
   - Email: `admin@acvmanagement.com`
   - Password: `admin123`
   - **⚠️ GANTI PASSWORD SETELAH LOGIN PERTAMA!**

2. **Vendor Folder:**
   - Jika SSH tidak tersedia, upload manual
   - Ukuran: ~50-100 MB
   - Waktu upload: 10-30 menit

---

## ➡️ Next Step

Setelah Step 5 selesai, lanjut ke:
**STEP 6: Build Assets** - Build CSS & JS untuk production

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Cek error message di terminal
2. Pastikan database credentials benar
3. Pastikan permissions sudah benar
4. Hubungi support Rumahweb jika masalah server-related

