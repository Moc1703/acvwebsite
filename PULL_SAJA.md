# 🔄 Pull dari GitHub - Langsung Aja

## ✅ Status

- ✅ File sudah di-push ke GitHub: `https://github.com/Moc1703/acvwebsite.git`
- ✅ Siap untuk pull di server!

---

## 🚀 Pull di Server (Via SSH)

### Opsi A: Clone Baru (Jika Folder Masih Kosong)

```bash
cd /home/ayap4485/public_html
git clone https://github.com/Moc1703/acvwebsite.git .
```

---

### Opsi B: Pull ke Folder yang Sudah Ada

```bash
cd /home/ayap4485/public_html

# Initialize git (jika belum ada)
git init

# Add remote
git remote add origin https://github.com/Moc1703/acvwebsite.git

# Fetch dan checkout
git fetch origin
git checkout -b main origin/main
```

**Atau jika sudah ada git:**
```bash
cd /home/ayap4485/public_html
git pull origin main
```

---

## ⚠️ PENTING: Backup .env Dulu!

**Sebelum pull, backup `.env` kalau sudah ada:**

```bash
cd /home/ayap4485/public_html
cp .env .env.backup
```

**Setelah pull, restore `.env` kalau ter-overwrite:**
```bash
cp .env.backup .env
```

---

## 📋 Setelah Pull

### 1. Set Permission

```bash
chmod -R 755 storage bootstrap/cache
chmod 644 .env 2>/dev/null || true
```

### 2. Clear Cache

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

---

## ✅ Checklist

- [ ] File sudah di-pull dari GitHub
- [ ] `.env` sudah di-backup (jika sudah ada)
- [ ] Permission sudah di-set
- [ ] Cache sudah di-clear
- [ ] Website sudah di-test

---

## 🆘 Troubleshooting

### Error: "Permission denied"

```bash
chmod -R 755 /home/ayap4485/public_html
chmod -R 644 /home/ayap4485/public_html/*.php
```

---

### Error: "Git not found"

**Solusi:** Download ZIP dari GitHub dan upload manual via File Manager

---

## 🆘 Langkah Selanjutnya

1. **Pull dari GitHub** (pilih Opsi A atau B di atas)
2. **Backup `.env`** (jika sudah ada)
3. **Set permission**
4. **Clear cache**
5. **Test website**
6. **Setup `.env` nanti** (kalau perlu)

**Beri tahu hasilnya setelah pull!**
