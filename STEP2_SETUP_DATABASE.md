# 🗄️ STEP 2: Setup Database di Rumahweb - Panduan Detail

## 🎯 Tujuan
Membuat database MySQL dan user untuk aplikasi Laravel di Rumahweb.

---

## 📋 Informasi yang Diperlukan

Sebelum mulai, siapkan:
- ✅ cPanel username & password Rumahweb
- ✅ Nama database yang diinginkan (contoh: `acv_website`)
- ✅ Username database yang diinginkan (contoh: `acv_user`)
- ✅ Password database yang kuat

---

## 🚀 Langkah-Langkah Setup Database

### A. Login ke cPanel Rumahweb

1. **Buka Browser**
2. **Akses cPanel:**
   - `https://yourdomain.com/cpanel`
   - Atau `https://cpanel.rumahweb.com`
3. **Login** dengan username & password Rumahweb

---

### B. Buka MySQL Databases

1. **Cari icon "MySQL Databases"** di cPanel
   - Biasanya di bagian "Databases"
   - Icon seperti database/server
2. **Klik "MySQL Databases"**
3. Akan muncul halaman "MySQL Databases"

---

### C. Buat Database Baru

1. **Scroll ke bagian "Create New Database"**
2. **Masukkan nama database:**
   - Contoh: `acv_website`
   - **PENTING:** Nama database akan otomatis ditambahkan prefix username
   - Contoh jika username cPanel adalah `username`: `username_acv_website`
   - **Catat nama database lengkap ini!**
3. **Klik "Create Database"**
4. **Konfirmasi:** Akan muncul pesan "Database Created Successfully"
5. **Catat nama database lengkap** (dengan prefix)

---

### D. Buat Database User

1. **Scroll ke bagian "Add New User"**
2. **Masukkan username:**
   - Contoh: `acv_user`
   - **PENTING:** Username akan otomatis ditambahkan prefix
   - Contoh: `username_acv_user`
   - **Catat username lengkap ini!**
3. **Masukkan password:**
   - Klik "Generate Password" untuk password random (recommended)
   - Atau buat password sendiri yang kuat
   - **Catat password ini!**
4. **Klik "Create User"**
5. **Konfirmasi:** Akan muncul pesan "User Created Successfully"

---

### E. Assign User ke Database

1. **Scroll ke bagian "Add User To Database"**
2. **Pilih User:**
   - Dropdown "User": Pilih user yang baru dibuat
   - Contoh: `username_acv_user`
3. **Pilih Database:**
   - Dropdown "Database": Pilih database yang baru dibuat
   - Contoh: `username_acv_website`
4. **Klik "Add"**
5. **Set Permissions:**
   - Akan muncul halaman "Manage User Privileges"
   - **Centang "ALL PRIVILEGES"** (semua checkbox akan tercentang otomatis)
   - **Klik "Make Changes"**
6. **Konfirmasi:** Akan muncul pesan "User Added To Database Successfully"

---

### F. Catat Informasi Database

**PENTING:** Catat informasi berikut untuk digunakan di Step 3 (.env):

```
Database Name: username_acv_website
Database User: username_acv_user
Database Password: [password yang kamu buat]
Database Host: localhost
```

---

## ✅ Checklist Step 2

Setelah setup database selesai:

- [ ] Database sudah dibuat
- [ ] Database user sudah dibuat
- [ ] User sudah di-assign ke database
- [ ] User memiliki ALL PRIVILEGES
- [ ] Sudah mencatat nama database lengkap (dengan prefix)
- [ ] Sudah mencatat username lengkap (dengan prefix)
- [ ] Sudah mencatat password database

---

## 🐛 Troubleshooting

### Error: Database Name Already Exists
**Solusi:**
- Gunakan nama database yang berbeda
- Atau hapus database lama jika tidak digunakan

### Error: Username Already Exists
**Solusi:**
- Gunakan username yang berbeda
- Atau hapus user lama jika tidak digunakan

### Lupa Password Database
**Solusi:**
- Di cPanel → MySQL Databases
- Scroll ke bagian "Current Users"
- Klik "Change Password" di user yang ingin diubah

### Tidak Bisa Assign User ke Database
**Solusi:**
- Pastikan user dan database sudah dibuat
- Pastikan memilih user dan database yang benar
- Coba refresh halaman dan ulangi

---

## 📝 Catatan Penting

1. **Prefix Otomatis:**
   - Rumahweb biasanya menambahkan prefix username cPanel
   - Contoh: Jika username cPanel `john`, maka:
     - Database: `john_acv_website`
     - User: `john_acv_user`

2. **Password Database:**
   - Gunakan password yang kuat
   - Simpan password dengan aman
   - Jangan share password ke orang lain

3. **Host Database:**
   - Biasanya: `localhost`
   - Atau: `127.0.0.1`
   - Cek di cPanel jika berbeda

---

## ➡️ Next Step

Setelah Step 2 selesai, lanjut ke:
**STEP 3: Konfigurasi .env** - Setup file environment dengan database credentials

---

## 🆘 Butuh Bantuan?

Jika ada masalah:
1. Screenshot error message
2. Pastikan semua step sudah diikuti
3. Hubungi support Rumahweb jika masalah server-related

