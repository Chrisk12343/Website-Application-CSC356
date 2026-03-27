# Website Application — CSC356

## Overview
This project is a PHP web application developed for the CSC356 course. It demonstrates core full-stack concepts including user authentication, page routing, and integration of client-side technologies.

## Features
- User login functionality  
- Page redirection and routing  
- MySQL database connection  
- Frontend interaction using JavaScript and jQuery  
- Basic responsive styling with CSS  

## Project Structure
- `app.php` — application entry/helper  
- `index.php` — main landing page  
- `Login.php` — login handling page  
- `db_connection.php` — database connection settings  
- `menu.php` — site menu/partials  
- `redirct.php` / `Redirct.json` — redirection helper and data  
- `jquery.js`, `jquery.css`, `jquery.php` — jQuery assets  
- `Java.js`, `loginjs.js` — custom JavaScript  
- `main.css` — styles  

## Requirements
- PHP 7.4+  
- Web server (Apache, Nginx, or PHP built-in server)  
- MySQL / MariaDB  

## Setup & Run (Development)

1. Place the project folder inside your web server document root (e.g., XAMPP `htdocs`)  
2. Update database credentials in `db_connection.php`  
3. Create the database and import any required schema  
4. Start a local PHP server:

```bash
php -S localhost:8000
