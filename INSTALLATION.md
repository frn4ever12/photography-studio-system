INSTALLATION GUIDE FOR PHOTOGRAPHY STUDIO MANAGEMENT SYSTEM

=== SYSTEM REQUIREMENTS ===

1. PHP 8.3 or higher
2. Composer (Latest version)
3. MySQL 5.7 or higher
4. Node.js 16+ and npm 8+
5. Git

=== STEP-BY-STEP INSTALLATION ===

1. CLONE THE REPOSITORY
   =====================
   git clone https://github.com/frn4ever12/photography-studio-system.git
   cd photography-studio-system

2. INSTALL COMPOSER DEPENDENCIES
   ==============================
   composer install

3. INSTALL NPM DEPENDENCIES
   ==========================
   npm install

4. SETUP ENVIRONMENT FILE
   =======================
   cp .env.example .env

5. GENERATE APPLICATION KEY
   ==========================
   php artisan key:generate

6. CONFIGURE DATABASE
   ====================
   Edit .env file and update these values:
   
   DB_DATABASE=photography_studio
   DB_USERNAME=root
   DB_PASSWORD=your_password

7. CREATE DATABASE
   ================
   mysql> CREATE DATABASE photography_studio;

8. RUN MIGRATIONS
   ===============
   php artisan migrate

9. SEED THE DATABASE
   ==================
   php artisan db:seed

10. BUILD FRONTEND ASSETS
    =====================
    npm run build

11. START THE DEVELOPMENT SERVER
    ============================
    php artisan serve

12. ACCESS THE APPLICATION
    =======================
    Open browser and go to: http://localhost:8000

=== DEFAULT LOGIN CREDENTIALS ===

ADMIN PANEL:
Email: admin@photostudio.local
Password: password

CLIENT PANEL:
Email: client@photostudio.local
Password: password

MANAGER:
Email: manager@photostudio.local
Password: password

PHOTOGRAPHER:
Email: photographer@photostudio.local
Password: password

VIDEOGRAPHER:
Email: videographer@photostudio.local
Password: password

=== DIRECTORY STRUCTURE ===

photography-studio-system/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   ├── Services/
│   └── Events/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
├── storage/
├── tests/
└── public/

=== POST-INSTALLATION SETUP ===

1. Configure Mail (Optional)
   Edit .env:
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=465
   MAIL_USERNAME=your_username
   MAIL_PASSWORD=your_password

2. Setup Storage Link
   php artisan storage:link

3. Publish Configuration Files (Optional)
   php artisan vendor:publish

4. Run Tests (Optional)
   php artisan test

=== TROUBLESHOOTING ===

1. "No application encryption key has been specified"
   Solution: Run php artisan key:generate

2. "SQLSTATE[HY000]: General error: 1030"
   Solution: Check database configuration in .env

3. "Call to undefined function" errors
   Solution: Run composer dump-autoload

4. Permission errors in storage
   Solution: chmod -R 775 storage bootstrap/cache

5. Node modules issues
   Solution: Delete node_modules folder and run npm install again

=== FEATURES OVERVIEW ===

✅ Online Booking System (9 categories)
✅ Customer Management
✅ Photography Project Management
✅ Employee Management
✅ Invoice & Billing System
✅ Accounting Module
✅ Gallery Management
✅ Client Delivery System
✅ Reports & Analytics
✅ Nepali Date Support
✅ Notification System (Email & SMS)
✅ Role-based Permissions
✅ Admin Dashboard
✅ REST API Ready

=== SUPPORT ===

For issues or questions:
GitHub Issues: https://github.com/frn4ever12/photography-studio-system/issues
Email: frn4ever12@example.com

=== LICENSE ===

MIT License - Free to use for your photography studio

Happy coding! 🎉
