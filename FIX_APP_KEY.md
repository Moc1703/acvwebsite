# 🔧 FIX: APP_KEY Error - Unsupported cipher

## ❌ Error yang Terjadi

```
RuntimeException
Unsupported cipher or incorrect key length. 
Supported ciphers are: aes-128-cbc, aes-256-cbc, aes-128-gcm, aes-256-gcm.
```

**Penyebab:** `APP_KEY` di `.env` belum di-generate atau formatnya salah.

---

## ✅ Solusi: Generate APP_KEY

### Opsi 1: Via SSH/Terminal (Paling Mudah)

1. **Buka Terminal/SSH di cPanel**
   - cPanel → **"Terminal"** atau **"SSH Access"**

2. **Jalankan command:**
```bash
cd /home/ayap4485/public_html
php artisan key:generate
```

3. **Hasilnya akan seperti ini:**
```
Application key set successfully.
```

4. **Refresh website** - Error sudah hilang!

---

### Opsi 2: Via PHP Script (Jika Tidak Ada SSH)

1. **Buka File Manager**
2. **Buat file baru:** `generate-key.php` di root
3. **Paste kode ini:**

```php
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
Artisan::call('key:generate');
echo "✅ APP_KEY generated successfully!<br>";
echo "Now delete this file (generate-key.php) for security.";
```

4. **Save file**

5. **Akses via browser:**
   ```
   https://ayathacreativeventures.com/generate-key.php
   ```

6. **Setelah berhasil, HAPUS file `generate-key.php`** untuk keamanan!

---

### Opsi 3: Manual Generate (Jika Opsi 1 & 2 Tidak Bisa)

1. **Buka website generator:**
   - https://generate-random.org/api-key-generator?count=1&length=32&type=mixed-numbers-symbols&prefix=base64

2. **Copy hasil generate** (akan seperti: `base64:xxxxx...`)

3. **Edit file `.env`** di root

4. **Cari baris:**
   ```
   APP_KEY=
   ```

5. **Ganti menjadi:**
   ```
   APP_KEY=base64:hasil_generate_di_sini
   ```
   (Paste hasil generate di sini)

6. **Save**

7. **Refresh website**

---

### Opsi 4: Generate via Online Tool

1. **Buka:** https://laravel-key-generator.com/
2. **Klik "Generate"**
3. **Copy hasilnya**
4. **Edit `.env`**, paste di `APP_KEY=`
5. **Save**

---

## ✅ Verifikasi

Setelah generate `APP_KEY`:

1. **Refresh website:**
   ```
   https://ayathacreativeventures.com
   ```

2. **Pastikan:**
   - ✅ Tidak ada error 500
   - ✅ Website Laravel muncul
   - ✅ Tidak ada "Unsupported cipher" error

---

## 🐛 Jika Masih Error

### Cek Format APP_KEY

**Format yang benar:**
```
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

**Format yang salah:**
```
APP_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
APP_KEY=
APP_KEY=base64:
```

### Clear Config Cache

Jika masih error setelah generate `APP_KEY`:

**Via SSH:**
```bash
cd /home/ayap4485/public_html
php artisan config:clear
php artisan cache:clear
```

**Atau edit `.env`**, tambahkan di bawah `APP_KEY`:
```
APP_CIPHER=aes-256-cbc
```

---

## 📝 Checklist

- [ ] `APP_KEY` sudah di-generate di `.env`
- [ ] Format `APP_KEY` benar: `base64:xxxxx...`
- [ ] File `.env` sudah di-save
- [ ] Website sudah di-refresh
- [ ] Error sudah hilang

---

## 🆘 Langkah Selanjutnya

1. **Pilih salah satu opsi di atas** (disarankan Opsi 1 jika ada SSH)
2. **Generate `APP_KEY`**
3. **Refresh website**
4. **Beri tahu hasilnya**

Jika masih error, kirimkan:
- Error message baru (jika ada)
- Isi baris `APP_KEY` di `.env` (tanpa menampilkan key lengkap, cukup beberapa karakter pertama)

