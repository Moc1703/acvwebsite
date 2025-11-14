# 🚀 Setup GitHub & Pull di Server

## 🎯 Tujuan

Daripada upload manual file per file, lebih baik **push ke GitHub** lalu **pull di server**. Lebih cepat dan mudah!

---

## 📋 Step 1: Setup Git Lokal (Sekali Saja)

### 1.1 Initialize Git Repository

```bash
cd "E:\New folder (6)\kol-specialist-website"
git init
```

### 1.2 Add All Files

```bash
git add .
```

### 1.3 Commit

```bash
git commit -m "Initial commit - Laravel KOL Specialist Website"
```

---

## 📋 Step 2: Push ke GitHub

### 2.1 Buat Repository Baru di GitHub

1. **Login ke GitHub**
2. **Klik "+" → "New repository"**
3. **Isi:**
   - Repository name: `kol-specialist-website` (atau nama lain)
   - Description: `Laravel KOL Specialist Website`
   - **Public** atau **Private** (terserah)
   - **JANGAN centang** "Initialize with README"
4. **Klik "Create repository"**

### 2.2 Push ke GitHub

**Copy URL repository** (misal: `https://github.com/username/kol-specialist-website.git`)

```bash
git remote add origin https://github.com/username/kol-specialist-website.git
git branch -M main
git push -u origin main
```

**Jika pakai SSH:**
```bash
git remote add origin git@github.com:username/kol-specialist-website.git
git branch -M main
git push -u origin main
```

---

## 📋 Step 3: Pull di Server (Rumahweb)

### Opsi A: Via SSH (Paling Mudah)

**Jika server punya SSH access:**

```bash
# Masuk ke folder public_html
cd /home/ayap4485/public_html

# Clone repository (jika belum ada)
git clone https://github.com/username/kol-specialist-website.git temp_repo

# Copy file yang diperlukan
cp -r temp_repo/* .
cp -r temp_repo/.* . 2>/dev/null || true

# Hapus folder temp
rm -rf temp_repo

# Atau jika sudah ada git, cukup pull:
git pull origin main
```

**Atau setup git di folder yang sudah ada:**

```bash
cd /home/ayap4485/public_html
git init
git remote add origin https://github.com/username/kol-specialist-website.git
git fetch origin
git checkout -b main origin/main
```

---

### Opsi B: Via File Manager (Manual)

**Jika tidak ada SSH:**

1. **Download ZIP dari GitHub:**
   - Buka repository di GitHub
   - Klik "Code" → "Download ZIP"
   - Extract ZIP di lokal

2. **Upload via File Manager:**
   - Upload semua file ke `public_html/`
   - **Jangan upload:** `.git/`, `node_modules/`, `.env` (buat baru di server)

3. **Setup `.env` di server:**
   - Copy dari `.env.example`
   - Isi dengan konfigurasi server

---

## 📋 Step 4: Update di Masa Depan

**Setiap kali ada perubahan:**

### Lokal:
```bash
git add .
git commit -m "Update: deskripsi perubahan"
git push origin main
```

### Server (Via SSH):
```bash
cd /home/ayap4485/public_html
git pull origin main
php artisan config:clear
php artisan route:clear
php artisan cache:clear
```

---

## ✅ Checklist

- [ ] Git repository sudah di-initialize lokal
- [ ] Repository sudah dibuat di GitHub
- [ ] File sudah di-push ke GitHub
- [ ] File sudah di-pull di server
- [ ] `.env` sudah di-setup di server
- [ ] Website sudah berjalan

---

## 🐛 Troubleshooting

### Error: "Permission denied"

**Solusi:**
```bash
chmod -R 755 /home/ayap4485/public_html
chmod -R 644 /home/ayap4485/public_html/*.php
```

---

### Error: "Git not found"

**Solusi:** Install git di server atau gunakan Opsi B (Manual)

---

### File `.env` Ter-overwrite

**Solusi:** 
- Jangan commit `.env` ke GitHub (sudah ada di `.gitignore`)
- Buat `.env` manual di server

---

## 🆘 Langkah Selanjutnya

1. **Setup git lokal** (Step 1)
2. **Push ke GitHub** (Step 2)
3. **Pull di server** (Step 3)
4. **Test website**
5. **Beri tahu hasilnya**

Jika ada masalah, kirimkan:
- Error message
- Screenshot (jika perlu)

