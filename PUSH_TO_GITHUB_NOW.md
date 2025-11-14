# 🚀 Push ke GitHub - Langkah Selanjutnya

## ✅ Status

- ✅ Git repository sudah di-initialize
- ✅ File sudah di-commit
- ⏳ **Tunggu: Push ke GitHub**

---

## 📋 Step 1: Buat Repository di GitHub

1. **Buka:** https://github.com/new
2. **Isi form:**
   - **Repository name:** `kol-specialist-website` (atau nama lain)
   - **Description:** `Laravel KOL Specialist Website`
   - **Visibility:** Public atau Private (terserah)
   - **JANGAN centang** "Initialize with README"
   - **JANGAN centang** "Add .gitignore"
   - **JANGAN centang** "Choose a license"
3. **Klik "Create repository"**

---

## 📋 Step 2: Push ke GitHub

**Copy URL repository** yang muncul (misal: `https://github.com/username/kol-specialist-website.git`)

### Via HTTPS (Paling Mudah):

```bash
git remote add origin https://github.com/username/kol-specialist-website.git
git branch -M main
git push -u origin main
```

**Ganti `username/kol-specialist-website` dengan URL repository kamu!**

### Via SSH (Jika sudah setup SSH key):

```bash
git remote add origin git@github.com:username/kol-specialist-website.git
git branch -M main
git push -u origin main
```

---

## 📋 Step 3: Pull di Server Rumahweb

### Via SSH (Paling Mudah):

```bash
# Masuk ke folder public_html
cd /home/ayap4485/public_html

# Clone repository (jika belum ada file)
git clone https://github.com/username/kol-specialist-website.git .

# Atau jika sudah ada file, pull update:
git init
git remote add origin https://github.com/username/kol-specialist-website.git
git fetch origin
git checkout -b main origin/main
```

### Via File Manager (Manual):

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

## 📋 Step 4: Setup di Server

### Setelah pull/clone:

```bash
cd /home/ayap4485/public_html

# Setup .env (jika belum ada)
cp .env.example .env
# Edit .env dengan konfigurasi server

# Clear cache
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan optimize:clear
```

---

## ✅ Checklist

- [ ] Repository sudah dibuat di GitHub
- [ ] File sudah di-push ke GitHub
- [ ] File sudah di-pull di server
- [ ] `.env` sudah di-setup di server
- [ ] Cache sudah di-clear
- [ ] Website sudah berjalan

---

## 🆘 Langkah Selanjutnya

1. **Buat repository di GitHub** (Step 1)
2. **Push ke GitHub** (Step 2)
3. **Pull di server** (Step 3)
4. **Setup `.env`** (Step 4)
5. **Test website**
6. **Beri tahu hasilnya**

**Kirimkan URL repository GitHub kamu, nanti saya bantu pull di server!**

