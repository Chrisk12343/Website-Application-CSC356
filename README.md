# Website Application — CSC356

## Overview

This is a simple PHP web application created for the CSC356 course. It includes a basic login flow, page routing, and some client-side JavaScript/CSS assets.

## Project structure

- `app.php` — application entry/helper
- `index.php` — main landing page
- `Login.php` — login handling page
- `db_connection.php` — database connection settings (edit to match your DB)
- `menu.php` — site menu/partials
- `redirct.php` / `Redirct.json` — redirection helper and data
- `jquery.js`, `jquery.css`, `jquery.php` — jQuery assets (project-specific)
- `Java.js`, `loginjs.js` — custom JavaScript
- `main.css` — styles

## Requirements

- PHP 7.4+ (or compatible)
- Web server (Apache, Nginx, or PHP built-in server)
- MySQL / MariaDB (if the app uses a database)

## Setup & Run (development)

1. Place the project folder inside your web server document root (e.g., XAMPP `htdocs`).
2. Update database credentials in `db_connection.php`.
3. If needed, create the database and import any SQL schema required by your app.
4. Start a local PHP server from the project directory:

   php -S localhost:8000

5. Open http://localhost:8000 in your browser.

## Notes

- `db_connection.php` likely contains sensitive credentials. Do not commit real secrets to version control.
- If you use XAMPP, put the inner folder `Website-Application-CSC356-main` into `htdocs` and visit `http://localhost/Website-Application-CSC356-main`.

## Contact

For changes or questions, edit files directly in the project folder or reach out and i will help as best as i can.
