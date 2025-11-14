# ✅ STEP 7: Testing Website - Panduan Detail

## 🎯 Tujuan
Test website apakah sudah berjalan dengan benar setelah deployment.

---

## 🚀 Langkah-Langkah Testing

### Test 1: Test Homepage

1. **Buka Browser** (Chrome/Firefox/Edge)
2. **Akses website:**
   ```
   https://yourdomain.com
   ```
3. **Cek apakah website muncul:**
   - ✅ Homepage tampil dengan benar
   - ✅ Styling CSS sudah load (warna, font, layout benar)
   - ✅ Tidak ada error di browser console
   - ✅ Logo dan gambar muncul

**Jika Error:**
- Cek error message di browser
- Cek Error Logs di cPanel
- Pastikan file `index.php` ada di root
- Pastikan `.htaccess` ada di root

---

### Test 2: Test Contact Form

1. **Scroll ke bagian "Contact Us"** atau klik menu "Kontak"
2. **Isi form contact:**
   - Pilih tab "Saya Brand" atau "Saya KOL"
   - Isi semua field yang required
   - Klik "Submit"
3. **Cek apakah:**
   - ✅ Form bisa di-submit tanpa error
   - ✅ Redirect ke halaman "Thank You"
   - ✅ Data masuk ke database (cek via phpMyAdmin)

**Jika Error:**
- Cek apakah database connection benar
- Cek apakah table `inquiries` sudah dibuat
- Cek Error Logs di cPanel

---

### Test 3: Test Admin Panel

1. **Akses admin login:**
   ```
   https://yourdomain.com/admin/login
   ```
2. **Login dengan credentials:**
   - Email: `admin@acvmanagement.com`
   - Password: `admin123`
3. **Cek apakah:**
   - ✅ Bisa login tanpa error
   - ✅ Redirect ke dashboard inquiries
   - ✅ Bisa melihat list inquiries
   - ✅ Bisa klik detail inquiry
   - ✅ Bisa update status inquiry

**Jika Error:**
- Cek apakah table `users` sudah dibuat
- Cek apakah admin user sudah di-create
- Cek Error Logs di cPanel

---

### Test 4: Test Sitemap

1. **Akses sitemap:**
   ```
   https://yourdomain.com/sitemap.xml
   ```
2. **Cek apakah:**
   - ✅ XML sitemap muncul dengan benar
   - ✅ Tidak ada error

---

### Test 5: Test Robots.txt

1. **Akses robots.txt:**
   ```
   https://yourdomain.com/robots.txt
   ```
2. **Cek apakah:**
   - ✅ File robots.txt muncul
   - ✅ Berisi sitemap URL yang benar

---

### Test 6: Test Mobile Responsiveness

1. **Buka website di mobile** atau **Chrome DevTools** (F12 → Toggle Device Toolbar)
2. **Cek apakah:**
   - ✅ Layout responsive di mobile
   - ✅ Menu bisa di-toggle
   - ✅ Form bisa diisi dengan mudah
   - ✅ Button ukurannya cukup besar untuk touch

---

### Test 7: Test WhatsApp Links

1. **Klik button WhatsApp** di website
2. **Cek apakah:**
   - ✅ WhatsApp app/web terbuka
   - ✅ Pesan pre-filled dengan benar

---

## ✅ Checklist Testing

- [ ] Homepage tampil dengan benar
- [ ] CSS & JS sudah load (styling benar)
- [ ] Contact form bisa di-submit
- [ ] Data masuk ke database
- [ ] Admin login berhasil
- [ ] Admin bisa melihat inquiries
- [ ] Sitemap.xml bisa diakses
- [ ] Robots.txt bisa diakses
- [ ] Mobile responsive
- [ ] WhatsApp links berfungsi
- [ ] Tidak ada error di browser console

---

## 🐛 Troubleshooting Umum

### Error 500 Internal Server Error

**Cek:**
1. Error Logs di cPanel
2. File `.env` sudah benar
3. `APP_KEY` sudah di-set
4. Database credentials benar
5. Permissions folder `storage/` dan `bootstrap/cache/` sudah `755`

**Solusi:**
- Pastikan `APP_DEBUG=false` di `.env`
- Cek Error Logs untuk detail error
- Pastikan semua file sudah di-upload dengan benar

---

### CSS/JS Tidak Load

**Cek:**
1. Folder `build/` sudah di-upload ke server
2. File `manifest.json` ada di `public_html/build/`
3. Folder `assets/` ada di `public_html/build/assets/`
4. `APP_URL` di `.env` sudah benar

**Solusi:**
- Upload ulang folder `build/`
- Clear browser cache (Ctrl + Shift + R)
- Cek browser console untuk error

---

### Database Connection Error

**Cek:**
1. Database credentials di `.env` benar
2. Database sudah dibuat
3. User sudah di-assign ke database
4. `DB_HOST=localhost` (biasanya benar)

**Solusi:**
- Double-check database name dan username (dengan prefix)
- Test connection via phpMyAdmin
- Pastikan password benar

---

### Admin Login Error

**Cek:**
1. Table `users` sudah dibuat
2. Admin user sudah di-create
3. Password hash benar

**Solusi:**
- Create admin user ulang via phpMyAdmin
- Pastikan password hash dari bcrypt-generator.com
- Cek apakah email sudah benar

---

## 📝 Catatan Penting

1. **Setelah Testing Berhasil:**
   - ✅ Ganti password admin dari default (`admin123`)
   - ✅ Update `robots.txt` dengan domain yang benar
   - ✅ Pastikan `APP_DEBUG=false` untuk production

2. **Monitoring:**
   - Cek Error Logs secara berkala
   - Monitor website performance
   - Backup database secara rutin

---

## 🎉 Website Sudah Live!

Jika semua test berhasil, website kamu sudah live dan siap digunakan!

---

## ➡️ Post-Deployment Checklist

Setelah testing selesai:

- [ ] Ganti password admin
- [ ] Update `robots.txt` dengan domain yang benar
- [ ] Submit sitemap ke Google Search Console
- [ ] Setup Google Analytics (opsional)
- [ ] Setup email notifications untuk form (opsional)
- [ ] Backup database pertama kali
- [ ] Monitor error logs

---

## 🆘 Butuh Bantuan?

Jika ada error:
1. Screenshot error message
2. Cek Error Logs di cPanel
3. Pastikan semua step sudah diikuti
4. Hubungi support Rumahweb jika masalah server-related

