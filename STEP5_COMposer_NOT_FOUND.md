# 🔧 Solusi: Composer Not Found di Rumahweb

## 🎯 Masalah
Error: `bash: composer: command not found`

Ini berarti Composer belum terinstall di server atau tidak ada di PATH.

---

## ✅ Solusi: Upload Vendor Folder Manual

Karena Composer tidak tersedia, kita akan upload folder `vendor/` dari local komputer.

---

## 🚀 Langkah-Langkah

### Langkah 1: Install Composer di Local Komputer

1. **Download Composer:**
   - Windows: https://getcomposer.org/Composer-Setup.exe
   - Atau pakai Composer yang sudah terinstall

2. **Buka Terminal/PowerShell** di folder project kamu

3. **Install Dependencies:**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```
   
   **Waktu:** 2-5 menit
   
   **Output yang diharapkan:**
   - Installing dependencies...
   - Package operations: X installs
   - Writing lock file
   - Generating optimized autoload files

4. **Pastikan folder `vendor/` sudah dibuat** di folder project

---

### Langkah 2: Compress Folder Vendor

**Opsi A: Via PowerShell**
```powershell
Compress-Archive -Path "vendor" -DestinationPath "vendor.zip" -Force
```

**Opsi B: Manual**
1. Right-click folder `vendor/`
2. Pilih "Send to" → "Compressed (zipped) folder"
3. Tunggu sampai compress selesai
4. File `vendor.zip` akan dibuat

**Ukuran:** ~50-100 MB (tergantung dependencies)

---

### Langkah 3: Upload Vendor.zip ke Server

1. **Login ke cPanel Rumahweb**
2. **Buka File Manager**
3. **Navigate ke `public_html/`**
4. **Upload `vendor.zip`:**
   - Klik "Upload"
   - Pilih file `vendor.zip`
   - Tunggu sampai upload selesai (10-30 menit tergantung koneksi)

---

### Langkah 4: Extract Vendor.zip di Server

1. **Klik kanan file `vendor.zip`**
2. **Pilih "Extract"** atau **"Extract Here"**
3. **Tunggu sampai extract selesai** (2-5 menit)
4. **Pastikan folder `vendor/` sudah muncul** di `public_html/`
5. **Hapus file `vendor.zip`** setelah extract selesai

---

### Langkah 5: Generate APP_KEY Manual

1. **Buka online tool:**
   - https://generate-random.org/api-key-generator
   - Atau: https://www.random.org/strings/

2. **Generate 32 karakter random:**
   - Length: 32
   - Characters: Alphanumeric
   - Klik "Generate"

3. **Edit file `.env`** di server:
   ```
   APP_KEY=base64:generated_32_characters_here
   ```
   
   Contoh:
   ```
   APP_KEY=base64:AbC123XyZ789QwE456RtYuI890OpLmN
   ```

4. **Save** file

---

### Langkah 6: Run Migrations via phpMyAdmin

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

### Langkah 7: Create Admin User Manual

1. **Buka phpMyAdmin** → Pilih database → Table `users`
2. **Klik tab "Insert"**
3. **Generate password hash:**
   - Buka: https://bcrypt-generator.com/
   - Password: `admin123`
   - Rounds: `10`
   - Klik "Generate"
   - Copy hash yang dihasilkan (contoh: `$2y$10$...`)

4. **Insert data:**
   - Klik tab "SQL" di phpMyAdmin
   - Copy-paste SQL berikut (ganti `$2y$10$...` dengan hash yang di-generate):
   
   ```sql
   INSERT INTO users (name, email, password, created_at, updated_at) 
   VALUES ('ACV Admin', 'admin@acvmanagement.com', '$2y$10$hash_dari_bcrypt_generator', NOW(), NOW());
   ```
   
   Contoh lengkap:
   ```sql
   INSERT INTO users (name, email, password, created_at, updated_at) 
   VALUES ('ACV Admin', 'admin@acvmanagement.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW());
   ```

5. **Klik "Go"**

---

## ✅ Checklist Step 5 (Tanpa Composer)

- [ ] Sudah install dependencies di local (`composer install`)
- [ ] Sudah compress folder `vendor/` menjadi ZIP
- [ ] Sudah upload `vendor.zip` ke server
- [ ] Sudah extract `vendor.zip` di server
- [ ] Folder `vendor/` sudah ada di `public_html/`
- [ ] Sudah generate `APP_KEY` manual
- [ ] Sudah update `.env` dengan `APP_KEY`
- [ ] Sudah create tables via phpMyAdmin
- [ ] Sudah create admin user via phpMyAdmin

---

## 🐛 Troubleshooting

### Vendor.zip Terlalu Besar untuk Upload
**Solusi:**
- Upload via FTP (lebih stabil untuk file besar)
- Atau split menjadi beberapa file kecil

### Extract Error di Server
**Solusi:**
- Cek disk space di server
- Cek apakah file ZIP tidak corrupt
- Coba extract via SSH jika File Manager bermasalah

### APP_KEY Tidak Valid
**Solusi:**
- Pastikan format: `APP_KEY=base64:32_karakter_random`
- Pastikan tidak ada spasi
- Generate ulang jika perlu

---

## 📝 Catatan Penting

1. **Vendor Folder:**
   - Ukuran: ~50-100 MB
   - Waktu upload: 10-30 menit
   - Pastikan koneksi internet stabil

2. **Admin Credentials:**
   - Email: `admin@acvmanagement.com`
   - Password: `admin123`
   - **⚠️ GANTI PASSWORD SETELAH LOGIN PERTAMA!**

3. **APP_KEY:**
   - Harus 32 karakter setelah `base64:`
   - Generate random yang kuat
   - Jangan share ke orang lain

---

## ➡️ Next Step

Setelah Step 5 selesai (vendor sudah di-upload, migrations sudah di-run), lanjut ke:
**STEP 6: Build Assets** - Build CSS & JS untuk production

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Pastikan semua step sudah diikuti
2. Cek error message di phpMyAdmin
3. Pastikan database credentials benar
4. Hubungi support Rumahweb jika masalah server-related

