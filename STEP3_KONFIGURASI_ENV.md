# ⚙️ STEP 3: Konfigurasi .env di Rumahweb - Panduan Detail

## 🎯 Tujuan
Membuat dan mengkonfigurasi file `.env` dengan database credentials dan setting production.

---

## 📋 Informasi yang Diperlukan

Dari Step 2, pastikan kamu punya:
- ✅ Database Name (dengan prefix)
- ✅ Database Username (dengan prefix)
- ✅ Database Password
- ✅ Domain name yang akan digunakan

---

## 🚀 Langkah-Langkah Konfigurasi .env

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
4. **Pastikan kamu di folder yang benar** (harus ada file `index.php`, `composer.json`, dll)

---

### C. Buat File .env

1. **Klik "New File"** di toolbar File Manager
2. **Nama file:** `.env`
   - **PENTING:** Pastikan nama file dimulai dengan titik (`.`)
   - Jika tidak bisa, coba: `env.txt` lalu rename menjadi `.env`
3. **Klik "Create"**
4. File `.env` akan muncul di File Manager

---

### D. Edit File .env

1. **Klik kanan file `.env`**
2. **Pilih "Edit"** atau **"Code Editor"**
3. **Copy-paste isi berikut** dan sesuaikan dengan data kamu:

```env
APP_NAME="ACV Management"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=nama_database_lengkap_dari_step2
DB_USERNAME=username_database_lengkap_dari_step2
DB_PASSWORD=password_database_dari_step2

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=ayuthiacv@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=ayuthiacv@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

4. **Sesuaikan bagian berikut:**

   **a. Database Credentials:**
   ```
   DB_DATABASE=nama_database_lengkap_dari_step2
   DB_USERNAME=username_database_lengkap_dari_step2
   DB_PASSWORD=password_database_dari_step2
   ```
   
   Contoh:
   ```
   DB_DATABASE=john_acv_website
   DB_USERNAME=john_acv_user
   DB_PASSWORD=Abc123!@#
   ```

   **b. APP_URL:**
   ```
   APP_URL=https://yourdomain.com
   ```
   
   Contoh:
   ```
   APP_URL=https://acvmanagement.com
   ```

   **c. APP_KEY:**
   - Biarkan kosong dulu: `APP_KEY=`
   - Akan di-generate di Step 5

5. **Klik "Save Changes"** atau **"Save"**

---

### E. Set File Permissions

1. **Klik kanan file `.env`**
2. **Pilih "Change Permissions"**
3. **Set permissions ke `644`:**
   - Owner: Read + Write (centang)
   - Group: Read (centang)
   - Public: Read (centang)
   - Execute: Jangan centang
4. **Klik "Change Permissions"**

---

## ✅ Checklist Step 3

Setelah konfigurasi .env selesai:

- [ ] File `.env` sudah dibuat di root `public_html/`
- [ ] `DB_DATABASE` sudah diisi dengan nama database lengkap
- [ ] `DB_USERNAME` sudah diisi dengan username lengkap
- [ ] `DB_PASSWORD` sudah diisi dengan password database
- [ ] `APP_URL` sudah diisi dengan domain kamu
- [ ] `APP_ENV=production`
- [ ] `APP_DEBUG=false`
- [ ] File permissions sudah di-set ke 644

---

## 🐛 Troubleshooting

### File .env Tidak Bisa Dibuat
**Solusi:**
- Coba buat dengan nama `env.txt` dulu
- Lalu rename menjadi `.env`
- Atau buat via FTP client

### File .env Tidak Bisa Diedit
**Solusi:**
- Pastikan file permissions benar (644)
- Coba edit via Code Editor di cPanel
- Atau edit via FTP client

### Lupa Database Credentials
**Solusi:**
- Buka cPanel → MySQL Databases
- Lihat di bagian "Current Databases" untuk nama database
- Lihat di bagian "Current Users" untuk username
- Untuk password, harus reset jika lupa

---

## 📝 Template .env Lengkap

Berikut template lengkap yang bisa di-copy:

```env
APP_NAME="ACV Management"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=ayuthiacv@gmail.com
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=ayuthiacv@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
```

---

## ➡️ Next Step

Setelah Step 3 selesai, lanjut ke:
**STEP 4: Setup Folder Permissions** - Set permissions untuk storage dan bootstrap/cache

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Pastikan semua informasi database sudah benar
2. Pastikan format .env sudah benar (tidak ada spasi di sekitar `=`)
3. Pastikan `APP_URL` menggunakan `https://` jika SSL sudah aktif

