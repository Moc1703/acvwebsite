# Deployment Checklist - ACV Management Website

## 🔒 Security Checklist

### ✅ Completed
- [x] CSRF Protection - All forms protected with `@csrf`
- [x] Rate Limiting - Contact form (5 requests/minute), Login (5 requests/minute)
- [x] Input Sanitization - All user inputs sanitized (strip_tags, filter_var, preg_replace)
- [x] SQL Injection Protection - Using Eloquent ORM (parameterized queries)
- [x] XSS Protection - Blade templating with `{{ }}` escaping
- [x] Mass Assignment Protection - Using `$fillable` in models
- [x] Authentication Middleware - Admin routes protected
- [x] Security Headers - X-Frame-Options, X-Content-Type-Options, X-XSS-Protection, CSP
- [x] Input Validation - Server-side validation for all forms

### ⚠️ Before Deploy
- [ ] Change admin password from default (`admin123`)
- [ ] Set `APP_ENV=production` in `.env`
- [ ] Set `APP_DEBUG=false` in `.env`
- [ ] Generate new `APP_KEY` if not set
- [ ] Review and update `ADMIN_EMAIL` in seeder
- [ ] Enable HTTPS/SSL certificate
- [ ] Review Content Security Policy headers
- [ ] Set up database backups
- [ ] Configure email settings for notifications

## 📈 SEO Checklist

### ✅ Completed
- [x] Meta Tags - Title, Description, Keywords
- [x] Open Graph Tags - Complete OG tags for social sharing
- [x] Twitter Card Tags - Summary large image card
- [x] Structured Data (JSON-LD) - Organization and Service schema
- [x] Canonical URLs - Set for all pages
- [x] Sitemap.xml - Generated dynamically
- [x] Robots.txt - Configured with sitemap location
- [x] Mobile-Friendly - Responsive design
- [x] Fast Loading - Optimized assets with Vite

### ⚠️ Before Deploy
- [ ] Add Open Graph image (1200x630px) to `/public/images/og-image.jpg`
- [ ] Update sitemap URL in `robots.txt` with actual domain
- [ ] Submit sitemap to Google Search Console
- [ ] Submit sitemap to Bing Webmaster Tools
- [ ] Verify structured data with Google Rich Results Test
- [ ] Set up Google Analytics
- [ ] Set up Google Tag Manager (optional)
- [ ] Add favicon.ico to `/public/`
- [ ] Test page speed with PageSpeed Insights
- [ ] Add alt text to all images

## 🚀 Deployment Steps

### 1. Environment Configuration
```bash
# Copy .env.example to .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Set production environment
# Edit .env file:
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database configuration
DB_CONNECTION=mysql
DB_HOST=your_host
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Mail configuration (for notifications)
MAIL_MAILER=smtp
MAIL_HOST=your_mail_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=ayuthiacv@gmail.com
MAIL_FROM_NAME="ACV Management"
```

### 2. Database Setup
```bash
# Run migrations
php artisan migrate --force

# Seed admin user
php artisan db:seed --class=AdminUserSeeder

# IMPORTANT: Change admin password after first login!
```

### 3. Asset Compilation
```bash
# Install dependencies
npm install

# Build for production
npm run build

# Or use Vite build
npm run build
```

### 4. Cache Optimization
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### 5. File Permissions
```bash
# Set proper permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 6. Server Configuration
- [ ] Ensure PHP >= 8.2
- [ ] Enable mod_rewrite (Apache) or configure Nginx
- [ ] Set up SSL certificate
- [ ] Configure web server to point to `/public` directory
- [ ] Set up cron job for Laravel scheduler (if needed)

### 7. Post-Deployment
- [ ] Test all forms (contact form, login)
- [ ] Verify admin panel access
- [ ] Check mobile responsiveness
- [ ] Test WhatsApp links
- [ ] Verify email notifications
- [ ] Check sitemap.xml accessibility
- [ ] Test robots.txt
- [ ] Verify structured data
- [ ] Run security scan
- [ ] Monitor error logs

## 📝 Important Notes

1. **Admin Credentials**: Default admin user:
   - Email: `admin@acvmanagement.com`
   - Password: `admin123`
   - **CHANGE THIS IMMEDIATELY AFTER FIRST LOGIN!**

2. **Rate Limiting**: 
   - Contact form: 5 requests per minute per IP
   - Login: 5 attempts per minute per IP

3. **Security Headers**: Already configured in `.htaccess` for Apache. For Nginx, configure separately.

4. **Email Notifications**: Currently commented out. Uncomment and configure in `LandingPageController.php` line 60.

5. **Domain Update**: Update all hardcoded URLs in:
   - `robots.txt` (sitemap URL)
   - `resources/views/layouts/app.blade.php` (structured data URLs)
   - WhatsApp links (if domain changes)

## 🔍 Testing Checklist

- [ ] Contact form submission works
- [ ] Form validation works correctly
- [ ] Rate limiting prevents spam
- [ ] Admin login/logout works
- [ ] Admin can view/manage inquiries
- [ ] Mobile view is responsive
- [ ] All links work correctly
- [ ] Images load properly
- [ ] WhatsApp links open correctly
- [ ] SEO meta tags are present
- [ ] Structured data validates
- [ ] Sitemap is accessible
- [ ] Robots.txt is accessible

## 📞 Support

For issues or questions:
- Email: ayuthiacv@gmail.com
- WhatsApp: +62 859-3945-9783

