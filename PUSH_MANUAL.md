# 🔄 Push ke GitHub - Manual

## ✅ Status

- ✅ Remote sudah di-add: `https://github.com/Moc1703/acvwebsite.git`
- ✅ Branch sudah di-rename ke `main`
- ⚠️ Push gagal karena koneksi

---

## 🚀 Push Manual

**Coba push lagi via terminal:**

```bash
git push -u origin main
```

**Jika masih error, coba:**

1. **Cek koneksi internet**
2. **Login ke GitHub dulu:**
   ```bash
   git config --global user.name "Moc1703"
   git config --global user.email "your-email@example.com"
   ```

3. **Atau pakai GitHub Desktop / SourceTree** untuk push

---

## 📋 Setelah Push Berhasil

**Langkah berikutnya: Pull di Server Rumahweb**

### Via SSH:
```bash
cd /home/ayap4485/public_html
git clone https://github.com/Moc1703/acvwebsite.git .
```

**Atau jika sudah ada file:**
```bash
cd /home/ayap4485/public_html
git init
git remote add origin https://github.com/Moc1703/acvwebsite.git
git fetch origin
git checkout -b main origin/main
```

---

## ✅ Checklist

- [ ] Push ke GitHub sudah berhasil
- [ ] File sudah di-pull di server
- [ ] Website sudah berjalan

---

**Coba push lagi via terminal kamu, atau pakai GitHub Desktop!**
