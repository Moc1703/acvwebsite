-- Create Admin User untuk ACV Management
-- Copy-paste SQL ini ke phpMyAdmin → SQL tab setelah table users sudah dibuat

-- Password: admin123
-- Hash ini untuk password "admin123"
-- Jika ingin password berbeda, generate di: https://bcrypt-generator.com/

INSERT INTO users (name, email, password, created_at, updated_at) 
VALUES (
  'ACV Admin', 
  'admin@acvmanagement.com', 
  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
  NOW(), 
  NOW()
);

-- Catatan: Password default adalah "admin123"
-- ⚠️ GANTI PASSWORD SETELAH LOGIN PERTAMA!

