# VulnZone

VulnZone is a deliberately vulnerable web application built with PHP and MySQL for educational purposes. It helps security enthusiasts practice and understand common web vulnerabilities.

## Features

- **Login page** with SQL Injection vulnerability  
- **Search page** vulnerable to reflected Cross-Site Scripting (XSS)  
- **File upload page** with insecure file upload vulnerability  
- Simple dashboard and logout functionality  
- Unified modern design  

## Requirements

- PHP 7.4 or higher  
- MySQL 5.7 or higher  
- Web server (e.g., Apache, Nginx)  

## Setup Instructions

1. Import the database using the `db.sql` file.  
2. Configure the database connection in `config.php`.  
3. Place all files in your web server directory.  
4. Access the application via `login.php`.  

## Usage

- Use the login page to access the dashboard.  
- Explore the search page to practice XSS attacks.  
- Upload files on the upload page to test file upload vulnerabilities.  

## Disclaimer

This application is intended only for educational and testing purposes. Do NOT use it in production environments.

## License

MIT License
