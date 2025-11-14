# 🔧 Fix Folder Structure - File Ada di Subfolder

## ⚠️ Masalah

Setelah clone, file ada di folder `acvwebsite` dan `app` terpisah, bukan di root `public_html`.

**Struktur sekarang:**
```
public_html/
  ├── acvwebsite/  (isi dari GitHub)
  └── app/         (folder terpisah?)
```

**Harusnya:**
```
public_html/
  ├── app/
  ├── bootstrap/
  ├── config/
  ├── public/
  ├── resources/
  ├── routes/
  ├── .env
  └── index.php
```

---

## 🚀 Solusi: Pindahkan File ke Root

### Opsi A: Pindahkan dari Folder acvwebsite

```bash
cd /home/ayap4485/public_html

# Pindahkan semua file dari acvwebsite ke root
mv acvwebsite/* .
mv acvwebsite/.* . 2>/dev/null || true

# Hapus folder acvwebsite (kalau sudah kosong)
rmdir acvwebsite
```

---

### Opsi B: Clone Ulang dengan Benar

```bash
cd /home/ayap4485/public_html

# Hapus folder acvwebsite dulu
rm -rf acvwebsite

# Clone langsung ke root (pakai titik di akhir)
git clone https://github.com/Moc1703/acvwebsite.git .
```

---

### Opsi C: Jika Sudah Ada File di Root

```bash
cd /home/ayap4485/public_html

# Backup dulu (opsional)
cp -r acvwebsite acvwebsite_backup

# Copy file yang belum ada
cp -r acvwebsite/app app 2>/dev/null || true
cp -r acvwebsite/bootstrap bootstrap 2>/dev/null || true
cp -r acvwebsite/config config 2>/dev/null || true
cp -r acvwebsite/database database 2>/dev/null || true
cp -r acvwebsite/public public 2>/dev/null || true
cp -r acvwebsite/resources resources 2>/dev/null || true
cp -r acvwebsite/routes routes 2>/dev/null || true
cp -r acvwebsite/storage storage 2>/dev/null || true
cp acvwebsite/*.php . 2>/dev/null || true
cp acvwebsite/.env.example .env.example 2>/dev/null || true

# Hapus folder acvwebsite
rm -rf acvwebsite
```

---

## 📋 Setelah Fix Struktur

### 1. Pastikan File di Root

```bash
cd /home/ayap4485/public_html
ls -la
```

**Harus ada:**
- `app/`
- `bootstrap/`
- `config/`
- `public/` (atau isinya sudah di root)
- `resources/`
- `routes/`
- `.env.example`
- `index.php`

---

### 2. Setup .env

```bash
cp .env.example .env
nano .env
```

---

### 3. Set Permission

```bash
chmod -R 755 storage bootstrap/cache
chmod 644 .env
```

---

### 4. Clear Cache

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
```

---

## ✅ Checklist

- [ ] File sudah dipindahkan ke root `public_html`
- [ ] Folder `acvwebsite` sudah dihapus
- [ ] Struktur folder sudah benar
- [ ] `.env` sudah di-setup
- [ ] Permission sudah di-set
- [ ] Cache sudah di-clear
- [ ] Website sudah di-test

---

## 🐛 Troubleshooting

### Error: "Permission denied"

```bash
chmod -R 755 /home/ayap4485/public_html
```

---

### File Masih Terpisah

**Cek struktur:**
```bash
cd /home/ayap4485/public_html
ls -la
tree -L 2  # jika ada tree command
```

---

## 🆘 Langkah Selanjutnya

1. **Pilih salah satu opsi** (A, B, atau C di atas)
2. **Pindahkan file ke root**
3. **Setup `.env`**
4. **Set permission**
5. **Clear cache**
6. **Test website**

**Beri tahu hasilnya setelah fix struktur folder!**

