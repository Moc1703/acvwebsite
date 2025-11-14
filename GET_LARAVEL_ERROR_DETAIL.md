# 🔍 Cara Dapatkan Error Detail Laravel

## 🎯 Langkah-Langkah

### Opsi 1: Enable APP_DEBUG (Paling Cepat)

1. **Buka File Manager**
2. **Edit file `.env`** di root
3. **Ubah baris ini:**
   ```
   APP_DEBUG=true
   ```
4. **Save**
5. **Refresh website** di browser
6. **Error detail akan muncul** di browser (dengan stack trace)
7. **Screenshot atau copy error message**

**⚠️ PENTING:** Setelah dapat error detail, ubah kembali ke:
```
APP_DEBUG=false
```

---

### Opsi 2: Cek Laravel Log File

1. **Buka File Manager**
2. **Masuk ke folder `storage/logs/`**
3. **Buka file `laravel.log`** (atau file log terbaru)
4. **Scroll ke bawah** (error terbaru ada di bawah)
5. **Copy error message terakhir** (bisa beberapa baris)
6. **Kirim ke saya**

**Path lengkap:**
```
storage/logs/laravel.log
```

---

### Opsi 3: Cek Error Log di cPanel

1. **Login ke cPanel**
2. **Cari "Error Logs"** atau **"Errors"**
3. **Filter untuk error PHP/Laravel**
4. **Lihat error terbaru** yang terkait dengan Laravel
5. **Copy error message**

---

### Opsi 4: Cek Browser Console

1. **Buka website** di browser
2. **Tekan F12** (Developer Tools)
3. **Tab "Console"** → lihat error JavaScript
4. **Tab "Network"** → klik request yang gagal → tab "Response" → lihat error dari server
5. **Screenshot atau copy error**

---

## 📝 Error yang Paling Sering Terjadi

### 1. "No application encryption key"
**Solusi:** Generate `APP_KEY` di `.env`

### 2. "Class 'PDO' not found" atau Database Connection Error
**Solusi:** Cek database credentials di `.env`

### 3. "The stream or file could not be opened"
**Solusi:** Set permissions `storage/` = `755`

### 4. "Route [xxx] not defined"
**Solusi:** Clear route cache atau cek routes

### 5. "View [xxx] not found"
**Solusi:** Cek file view ada atau tidak

### 6. "Class 'xxx' not found"
**Solusi:** Run `composer dump-autoload` atau cek namespace

---

## 🆘 Langkah Selanjutnya

**Pilih salah satu opsi di atas** dan kirimkan:
1. **Error message lengkap** (dari log atau browser)
2. **Screenshot** (jika ada)
3. **Stack trace** (jika ada)

Setelah itu saya akan bantu analisis dan fix!

