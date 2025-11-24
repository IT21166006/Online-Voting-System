# **Online Voting System**

<img width="1364" height="724" alt="121797542-7cdf9c00-cc3e-11eb-9ede-e6f2a113bb7e" src="https://github.com/user-attachments/assets/75d00ac6-a3fc-4340-b251-a80629c3803f" />

Simple web-based Online Voting System — voter registration, authentication, admin management and vote counting.
Built with PHP, HTML/CSS and JavaScript.

Contents

admin/ — admin panel pages and management tools

auth/ — authentication helpers (login, logout, session handling)

config/ — configuration (database credentials, app settings)

css/, js/, images/, vendor/ — static assets and third-party libs

login/, registration/, voting/ — public-facing voter flows

index.php — app entry point / landing page
(See repo file list for full details.) 
GitHub

Features
<img width="1366" height="728" alt="121797563-9aad0100-cc3e-11eb-9afa-eda12498381e" src="https://github.com/user-attachments/assets/570afc9b-5740-4c35-a490-cd3b5b6f57da" />

Voter registration and login

Admin dashboard to create/manage elections and candidates

Vote casting and vote counting / results pages

Static UI using HTML/CSS/JavaScript and server-side logic in PHP
<img width="1366" height="728" alt="121797598-d3e57100-cc3e-11eb-9a36-0b3bdaae2d25" src="https://github.com/user-attachments/assets/5c783c0b-d4e1-4c90-ba38-f2414b5e802d" />

Configuration centralized in config/ for database and environment settings. 
GitHub
+1

Tech stack

PHP (server-side)

MySQL / MariaDB (recommended) — or other SQL DB supported via PHP

HTML, CSS, JavaScript (frontend)

Optional: Composer (if composer.json is used by the project) 
GitHub

Prerequisites

Make sure you have the following installed on your machine or server:

PHP 7.4+ (or PHP 8.x)

MySQL / MariaDB

Web server (Apache, Nginx) or local dev stack (XAMPP, MAMP, WAMP, Laragon)

Composer (optional — only if repo uses composer packages)

Quick setup (local, using XAMPP / WAMP / similar)

Clone the repository:

git clone https://github.com/IT21166006/Online-Voting-System.git
cd Online-Voting-System


Move the project into your web server's document root:

For XAMPP: place folder into C:\xampp\htdocs\ (Windows)

Or configure your virtual host / document root to point to the project folder.

Create a new MySQL database:

Example: online_voting_db

Configure database credentials:

Open the config/ folder and update the DB settings file (commonly named db.php, config.php or similar) with your DB host / name / user / password.

If you don't see a sample config, create one based on the existing config files or ask me and I can create a template for you. 
GitHub

(If present) Import database schema:

If the repo contains a .sql or database export, import it:

mysql -u root -p online_voting_db < database_dump.sql


If there is no SQL file, you'll need to create the required tables (users/voters, candidates, elections, votes, etc.). Ask and I can generate a starter SQL schema.

Install Composer dependencies (only if composer.json exists and you need packages):

composer install


Open the app in your browser:

http://localhost/Online-Voting-System/  (or your configured vhost)

Usage

Visitor / Voter:

Register via the registration/ page.

Log in via login/ and cast vote from voting/ pages.

Admin:

Access admin/ pages (admin login required).

Create/manage elections, add/remove candidates, view results/statistics.

Paths above are based on repository folders; adjust depending on your routing and server configuration. 
GitHub

Security & Notes

This is a demo / project-grade system. Do not use as-is for real public elections without strong security audits.

Recommended hardening:

Use HTTPS

Proper input validation and prepared statements (prevent SQL injection)

Password hashing (password_hash)

Rate limiting, CSRF protection, session hardening

Audit logs and backup strategy

Consider integrating OTP / 2FA for voter verification if required.

Contributing

If you want to improve this project:

Create an issue describing the change or bug.

Fork the repo, create a feature branch, and open a pull request.

Suggested first improvements:

Add a SQL schema file (database/schema.sql)

Add sample .env or config.sample.php for DB credentials

Add automated tests or static analysis (PHPStan/PHPCS)

Add README screenshots and a quick demo GIF

Troubleshooting

500 server error: check error_log or PHP error display; make sure DB credentials are correct.

Blank pages: enable display_errors (only in dev) or check web server logs.

Database connection refused: ensure MySQL service is running and credentials/host are correct.

License & Author

Author: IT21166006 / Tharindu Dilshan (as listed in the repo). 
GitHub

Add a LICENSE file if you want to open-source it under a known license (MIT, Apache-2.0, etc.)
