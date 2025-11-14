# 🔧 FIX: Controller Not Found Error

## ❌ Error yang Terjadi

```
Target class [App\Http\Controllers\LandingPageController] does not exist.
```

**Penyebab:** File controller belum di-upload ke server atau ada masalah autoload.

---

## ✅ Solusi

### Step 1: Pastikan File Controller Sudah Di-upload

1. **Buka File Manager di cPanel**
2. **Masuk ke folder `app/Http/Controllers/`**
3. **Cek apakah file `LandingPageController.php` ada**
4. **Jika TIDAK ADA**, upload file dari local:
   - Path local: `app/Http/Controllers/LandingPageController.php`
   - Upload ke: `app/Http/Controllers/LandingPageController.php` di server

---

### Step 2: Clear Autoload Cache

**Via SSH/Terminal:**
```bash
cd /home/ayap4485/public_html
composer dump-autoload
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

**Atau via PHP Script (jika tidak ada SSH):**

1. **Buat file `clear-cache.php`** di root:

```php
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Clearing caches...<br>";

// Clear config cache
try {
    Artisan::call('config:clear');
    echo "✅ Config cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ Config cache: " . $e->getMessage() . "<br>";
}

// Clear route cache
try {
    Artisan::call('route:clear');
    echo "✅ Route cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ Route cache: " . $e->getMessage() . "<br>";
}

// Clear view cache
try {
    Artisan::call('view:clear');
    echo "✅ View cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ View cache: " . $e->getMessage() . "<br>";
}

// Dump autoload
try {
    exec('cd ' . __DIR__ . ' && composer dump-autoload 2>&1', $output);
    echo "✅ Autoload dumped<br>";
    echo "<pre>" . implode("\n", $output) . "</pre>";
} catch (Exception $e) {
    echo "⚠️ Autoload: " . $e->getMessage() . "<br>";
}

echo "<br>✅ Done! Now delete this file (clear-cache.php) for security.";
```

2. **Akses via browser:**
   ```
   https://ayathacreativeventures.com/clear-cache.php
   ```

3. **Setelah berhasil, HAPUS file `clear-cache.php`** untuk keamanan!

---

### Step 3: Verifikasi File Controller

**Cek file `app/Http/Controllers/LandingPageController.php` di server:**

1. **Buka File Manager**
2. **Masuk ke `app/Http/Controllers/`**
3. **Buka file `LandingPageController.php`**
4. **Pastikan isinya seperti ini:**

```php
<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact(Request $request)
    {
        // ... rest of the code
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
```

**Pastikan:**
- ✅ Namespace: `App\Http\Controllers`
- ✅ Class name: `LandingPageController`
- ✅ Extends: `Controller`

---

### Step 4: Cek Controller Base Class

**Pastikan file `app/Http/Controllers/Controller.php` ada:**

1. **Buka File Manager**
2. **Cek apakah file `app/Http/Controllers/Controller.php` ada**
3. **Jika tidak ada**, buat file baru dengan isi:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
```

---

## 🐛 Jika Masih Error

### Cek Semua Controller Files

Pastikan semua controller sudah di-upload:

- ✅ `app/Http/Controllers/Controller.php` (base class)
- ✅ `app/Http/Controllers/LandingPageController.php`
- ✅ `app/Http/Controllers/AdminController.php`
- ✅ `app/Http/Controllers/AuthController.php`
- ✅ `app/Http/Controllers/SitemapController.php`

---

### Cek Folder Structure

Pastikan struktur folder benar:

```
app/
└── Http/
    └── Controllers/
        ├── Controller.php
        ├── LandingPageController.php
        ├── AdminController.php
        ├── AuthController.php
        └── SitemapController.php
```

---

### Regenerate Autoload Files

**Via SSH:**
```bash
cd /home/ayap4485/public_html
composer dump-autoload -o
```

**Manual:**
- Hapus folder `vendor/composer/` (jika ada)
- Upload ulang folder `vendor/` dari local

---

## ✅ Checklist

- [ ] File `LandingPageController.php` ada di `app/Http/Controllers/`
- [ ] File `Controller.php` (base class) ada
- [ ] Namespace dan class name benar
- [ ] Autoload cache sudah di-clear
- [ ] Config cache sudah di-clear
- [ ] Route cache sudah di-clear
- [ ] Website sudah di-refresh

---

## 🆘 Langkah Selanjutnya

1. **Cek apakah file controller sudah di-upload**
2. **Clear semua cache** (Step 2)
3. **Refresh website**
4. **Beri tahu hasilnya**

Jika masih error, kirimkan:
- Screenshot struktur folder `app/Http/Controllers/` di server
- Error message baru (jika ada)

