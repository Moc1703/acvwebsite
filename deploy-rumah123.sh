#!/bin/bash

# Script untuk Deploy Laravel ke Rumah123 Hosting
# Jalankan script ini via SSH di server Rumah123

echo "🚀 Starting Deployment to Rumah123..."
echo ""

# Navigate to public_html
cd ~/public_html || cd ~/domains/*/public_html

# Check if .env exists
if [ ! -f .env ]; then
    echo "❌ File .env tidak ditemukan!"
    echo "📝 Silakan buat file .env terlebih dahulu"
    exit 1
fi

# Install Composer Dependencies
echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction

# Generate Application Key (if not set)
echo "🔑 Checking APP_KEY..."
if ! grep -q "APP_KEY=base64:" .env; then
    php artisan key:generate --force
    echo "✅ APP_KEY generated"
else
    echo "✅ APP_KEY already set"
fi

# Run Migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

# Seed Admin User
echo "👤 Seeding admin user..."
php artisan db:seed --class=AdminUserSeeder --force

# Clear and Cache Configuration
echo "⚙️ Optimizing application..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set Permissions
echo "🔒 Setting folder permissions..."
chmod -R 755 storage bootstrap/cache
chmod 644 .env

echo ""
echo "✅ Deployment completed!"
echo ""
echo "📋 Next steps:"
echo "1. Test website: https://yourdomain.com"
echo "2. Login admin: https://yourdomain.com/admin/login"
echo "3. Change admin password immediately!"
echo ""
echo "🔑 Default Admin Credentials:"
echo "Email: admin@acvmanagement.com"
echo "Password: admin123"
echo ""

