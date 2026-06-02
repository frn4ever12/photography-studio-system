# Photography Studio Management and Online Booking System

**A complete professional photography studio management and online booking system built with Laravel 12, PHP 8.3, MySQL, Bootstrap 5, jQuery, and AdminLTE Dashboard.**

## 🎯 Features

### 1. Frontend Website
- Modern responsive photography portfolio
- Home, About, Services, Packages pages
- Gallery with categories & Video portfolio
- Client testimonials & Blog section
- Contact page with Google Maps
- Team members & FAQ section

### 2. Online Booking System
- Customer online booking for 9 service categories
- Wedding, Engagement, Event, Passport, Baby, Product, Drone, Videography, Live Streaming
- Complete booking form validation
- Real-time confirmation

### 3. Customer Management
- Client profile management
- Photo uploads & booking history
- Payment records & due tracking
- Client notes system

### 4. Project Management
- Project creation & tracking
- Staff assignments (Photographer, Videographer, Editor)
- 6 Project statuses: Pending, Confirmed, Shooting, Editing, Delivered, Completed
- Timeline management

### 5. Employee Management
- Department-wise employee management
- Salary management
- Attendance tracking
- Role-based assignments

### 6. Invoice & Billing
- Automatic invoice generation
- Advance/Full/Due payments
- PDF export & printing
- Payment receipts

### 7. Accounting Module
- Income & Expense management
- Daily cash book
- Ledger & P&L reports
- Account head management

### 8. Gallery Management
- Image & video uploads
- Categorized gallery
- Featured galleries
- Client access control

### 9. Delivery System
- Upload final photos/videos
- Share download links
- Client login panel
- Download history

### 10. Reports Module
- Dashboard analytics
- Booking & Financial reports
- Project reports
- Employee performance

### 11. Nepali Date Support
- Full Nepali Calendar (Bikram Sambat)
- English to Nepali conversion
- Nepali date picker
- Multi-language support

### 12. Notifications
- Email & SMS notifications
- Booking confirmations
- Payment reminders
- Event reminders

### 13. User Roles & Permissions
- Super Admin, Manager, Receptionist
- Photographer, Videographer, Editor
- Accountant, Client roles

### 14. Admin Dashboard
- Dynamic widgets
- Revenue & booking charts
- Client growth analytics
- Activity logs

## 📋 Tech Stack

- **Backend**: Laravel 12, PHP 8.3
- **Database**: MySQL 5.7+
- **Frontend**: Bootstrap 5, jQuery, AJAX
- **Admin Dashboard**: AdminLTE/Gentella
- **Authentication**: Laravel Breeze
- **Permissions**: Spatie Laravel Permission

## 🚀 Quick Start

### Prerequisites
- PHP 8.3+
- Composer
- MySQL 5.7+
- Node.js & npm

### Installation

```bash
# Clone repository
git clone https://github.com/frn4ever12/photography-studio-system.git
cd photography-studio-system

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure database in .env
DB_DATABASE=photography_studio

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start server
php artisan serve
```

### Default Credentials
- Admin: admin@photostudio.local / password
- Client: client@photostudio.local / password

## 📁 Project Structure

```
photography-studio-system/
├── app/
│   ├── Http/
│   ├── Models/
│   ├── Services/
│   └── Events/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   └── css/js/
├── routes/
└── config/
```

## 📝 License

MIT License

## 👥 Support

For issues, create an issue on GitHub.

---

**Built with ❤️ for Photography Studios**
