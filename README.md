# KOL Specialist - Landing Page

Professional landing page for KOL (Key Opinion Leader) Specialist business built with Laravel.

## 🚀 Features

### Frontend
- **Responsive Design**: Mobile-first approach using Bootstrap 5
- **Hero Section**: Compelling headline with gradient design and CTA buttons
- **Services Section**: 6 core service offerings with hover effects
- **Portfolio Section**: Success stories and case studies
- **Testimonials**: Client testimonials with ratings
- **Contact Form**: Multi-field contact form with validation
- **WhatsApp Integration**: Direct WhatsApp contact buttons
- **SEO Optimized**: Meta tags and structured data

### Backend
- **Laravel Framework**: Modern PHP framework
- **Database**: SQLite for simplicity (easily switchable to MySQL/PostgreSQL)
- **Inquiry Management**: Full CRUD system for customer inquiries
- **Admin Panel**: Simple admin interface to manage inquiries
- **Form Validation**: Server-side validation with error handling
- **Status Tracking**: Inquiry status management (New → Contacted → Qualified → Closed)

## 🛠️ Quick Start

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- Laravel Vite

### Installation

1. **Clone the project**
   ```bash
   git clone <your-repo-url>
   cd kol-specialist-website
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

7. **Visit your website**
   - Main website: http://localhost:8000
   - Admin panel: http://localhost:8000/admin

## 📁 Project Structure

```
kol-specialist-website/
├── app/
│   ├── Http/Controllers/
│   │   ├── LandingPageController.php
│   │   └── AdminController.php
│   └── Models/
│       └── Inquiry.php
├── database/
│   ├── migrations/
│   │   └── 2025_11_12_064955_create_inquiries_table.php
│   └── database.sqlite
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── landing.blade.php
│   │   ├── thank-you.blade.php
│   │   └── admin/
│   │       ├── inquiries.blade.php
│   │       └── inquiry-detail.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
└── routes/
    └── web.php
```

## 🌐 Available Routes

### Public Routes
- `GET /` - Landing page
- `POST /contact` - Contact form submission
- `GET /thank-you` - Thank you page

### Admin Routes
- `GET /admin` - Inquiry management dashboard
- `GET /admin/inquiries/{id}` - Inquiry details
- `PUT /admin/inquiries/{id}/status` - Update inquiry status

## ⚙️ Configuration

### WhatsApp Integration
Your WhatsApp number is already configured as: **+62 851-6168-2748**
To change it, update in:
- `resources/views/layouts/app.blade.php` (footer and floating button)
- `resources/views/landing.blade.php` (contact section)
- `resources/views/thank-you.blade.php` (thank you page)

### Email Configuration
Update mail settings in `.env` file for email notifications:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-mail-server
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_FROM_ADDRESS=ayathacreativeventures@gmail.com
MAIL_FROM_NAME=KOL Specialist
```

### Database (Optional)
To switch from SQLite to MySQL:
1. Update `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. Create database and run migrations:
```bash
php artisan migrate:fresh
```

## 📋 Features in Detail

### Contact Form
- Name, Email, Phone, Company fields
- Service interest dropdown
- Message textarea
- Client and server-side validation
- Success/error notifications

### Admin Panel
- View all inquiries in a table
- Filter by status (New, Contacted, Qualified, Closed)
- Quick action buttons (Email, WhatsApp)
- Detailed inquiry view
- Status management

### WhatsApp Integration
- Floating WhatsApp button
- Pre-filled message templates
- Quick reply from admin panel

## 🔒 Security Notes

- CSRF protection enabled
- Input validation and sanitization
- SQL injection prevention via Eloquent ORM
- XSS protection via Blade templating

## 🚀 Deployment

### Production Setup
1. Set environment variables:
```env
APP_ENV=production
APP_DEBUG=false
```

2. Optimize application:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize --no-dev
```

3. Build production assets:
```bash
npm run build
```

## 🎨 Customization

### Colors and Styling
Main colors defined in `resources/css/app.css`:
- `--primary-color`: #6366f1 (Indigo)
- `--secondary-color`: #f97316 (Orange)
- `--dark-color`: #1f2937 (Dark gray)

### Content Updates
- Update company information in layouts
- Modify service offerings in landing page
- Replace placeholder images with real ones
- Update contact information and WhatsApp number

## 📞 Support

This project is ready for production use. For any customization or additional features, you can extend the existing Laravel structure.

---

**Built with ❤️ using Laravel**
