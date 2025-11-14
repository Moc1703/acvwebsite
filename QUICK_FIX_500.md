# ⚡ QUICK FIX: Error 500

## 🎯 Langkah Cepat (5 Menit)

### 1️⃣ Cek Error Log

**Via File Manager:**
1. Buka `error_log` di root
2. Scroll ke **bawah** (error terbaru)
3. Copy **error message terakhir**
4. Kirim ke saya untuk analisis

**Atau via cPanel:**
- cPanel → **"Error Logs"**
- Lihat error terbaru

---

### 2️⃣ Cek File `.env`

**Jika belum ada:**
1. File Manager → **"New File"**
2. Nama: `.env`
3. Copy isi dari file ini dan edit database credentials

**Jika sudah ada:**
- Pastikan `APP_KEY` sudah diisi
- Pastikan database credentials benar

---

### 3️⃣ Generate APP_KEY

**Opsi A: Via SSH (jika ada)**
```bash
cd public_html
php artisan key:generate
```

**Opsi B: Manual Generate**
1. Buka: https://generate-random.org/api-key-generator?count=1&length=32&type=mixed-numbers-symbols&prefix=base64
2. Copy hasil generate
3. Edit `.env`, tambahkan:
   ```
   APP_KEY=base64:hasil_generate_di_sini
   ```

**Opsi C: Via PHP Script**
Buat file `generate-key.php` di root:

```php
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
Artisan::call('key:generate');
echo "APP_KEY generated!";
```

Akses: `https://ayathacreativeventures.com/generate-key.php`
Setelah berhasil, hapus file ini!

---

### 4️⃣ Fix Path di `index.php`

1. **Edit `index.php`** di root
2. **Ganti 3 baris ini:**

**Dari:**
```php
__DIR__.'/../storage/framework/maintenance.php'
__DIR__.'/../vendor/autoload.php'
__DIR__.'/../bootstrap/app.php'
```

**Menjadi:**
```php
__DIR__.'/storage/framework/maintenance.php'
__DIR__.'/vendor/autoload.php'
__DIR__.'/bootstrap/app.php'
```

3. **Save**

---

### 5️⃣ Cek Permissions

**Via File Manager:**
1. Klik kanan `storage/` → **"Change Permissions"** → `755`
2. Klik kanan `bootstrap/cache/` → **"Change Permissions"** → `755`
3. Klik kanan `.env` → **"Change Permissions"** → `644`

---

## ✅ Checklist Cepat

- [ ] File `.env` sudah dibuat
- [ ] `APP_KEY` sudah di-generate
- [ ] Path di `index.php` sudah benar (tanpa `../`)
- [ ] Permissions `storage/` = `755`
- [ ] Database credentials di `.env` benar

---

## 🆘 Kirimkan Info Ini:

1. **Error message** dari `error_log` (yang terakhir)
2. **Status checklist** di atas
3. **Screenshot** jika perlu

Setelah itu saya akan bantu analisis lebih lanjut!

