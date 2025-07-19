# Nananom Farms

A web based palm oil management system, built with PHP and MySQL.

## Features

- User authentication (login/logout)
- Session management
- Email notifications
- Database migrations
- Frontend and admin interfaces
- Environment-based configuration

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer (for dependency management)
- Web server (Apache/Nginx)
- SMTP server (for email functionality)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/roywalk3r/nananom_farms.git
   cd nananom_farms
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   - Copy `.env.example` to `.env`
   - Update the following variables in `.env`:
     ```
     DB_HOST=localhost
     DB_USER=your_db_user
     DB_PASS=your_db_password
     DB_NAME=nananom
     
     MAIL_HOST=smtp.gmail.com
     MAIL_PORT=587
     MAIL_USERNAME=your-email@gmail.com
     MAIL_PASSWORD=your-app-password
     MAIL_FROM_ADDRESS=your-email@gmail.com
     MAIL_FROM_NAME="Nananom Farms"
     ```

4. **Set up the database**
   - Create a MySQL database named `nananom`
   - Run the migrations:
     ```bash
     php migrate.php
     ```

5. **Configure web server**
   - Point your web server's document root to the `public` directory
   - Ensure mod_rewrite is enabled (for Apache)
   - Set proper file permissions:
     ```bash
     chmod -R 755 storage/
     chmod -R 755 uploads/
     ```

## Project Structure

```
nananom_farms/
├── admin/              # Admin interface
├── config/             # Configuration files
├── core/               # Core application files
│   ├── crf.php         # CSRF protection
│   ├── session.php     # Session management
│   └── logout.php      # Logout functionality
├── frontend/           # Frontend templates and assets
├── migrations/         # Database migrations
├── services/           # Business logic services
├── storage/            # File storage
├── tests/              # Test files
├── vendor/             # Composer dependencies
├── .env.example        # Example environment configuration
├── composer.json       # PHP dependencies
├── database.php        # Database configuration
└── migrate.php         # Migration runner
```

## Email Configuration

For Gmail SMTP, you'll need to:
1. Enable 2-Step Verification on your Google Account
2. Generate an App Password for this application
3. Use the App Password in the `MAIL_PASSWORD` setting

## Security

### CSRF Protection

CSRF (Cross-Site Request Forgery) protection is implemented in `core/csrf.php`. Here's how to use it in your forms:

1. **In your form file (e.g., `form.php`):**
   ```php
   <?php require_once __DIR__ . '/../core/csrf.php'; ?>
   <form method="POST" action="/process.php">
       <?= csrf_field(); ?>
       <!-- Other form fields -->
       <button type="submit">Submit</button>
   </form>
   ```

2. **In your form processor (e.g., `process.php`):**
   ```php
   <?php 
   require_once __DIR__ . '/../core/csrf.php';
   verify_csrf();
   
   // Process the form data here
   ```

### Other Security Measures

- Password hashing using PHP's `password_hash()`
- Environment variables for sensitive data
- Session security measures in place

## Development

### Running Tests

```bash
php tests/mailTest.php
```


### Creating Migrations

1. Create a new migration file in the `migrations` directory
2. Follow the naming convention: `YYYY_MM_DD_description.php`
3. Implement the `up()` and `down()` methods

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

[MIT License](https://opensource.org/licenses/MIT)

## Support

For support, please contact [projectmail811@gmail.com].
