# SimplePOS Database Application

SimplePOS is a CodeIgniter 4 project developed for the IT0049 Web System Technologies Technical Formative Assessment 2. It extends the original TFA1 application by replacing temporary PHP-array data with records stored in a MySQL database.

The project demonstrates CodeIgniter database configuration, models, Query Builder retrieval through `findAll()`, controllers, views, routing, and safe output using `esc()`.

## Features

- Home and About pages
- Customer Accounts page
- User Accounts page
- MySQL storage for customer and user records
- CodeIgniter models for database access
- Responsive table styling
- Escaped database output for safer display

## Technology used

- PHP 8.2 or newer
- CodeIgniter 4.7
- MySQL or MariaDB
- XAMPP and phpMyAdmin
- HTML and CSS

## Initial database plan

The database is named `naluan_tfa2` and contains two tables.

### `customers`

The `customers` table stores customer contact information.

| Field | Type | Description |
| --- | --- | --- |
| `id` | `INT` | Auto-incrementing primary key |
| `full_name` | `VARCHAR(100)` | Customer's complete name |
| `email` | `VARCHAR(100)` | Customer's email address |
| `phone` | `VARCHAR(20)` | Customer's phone number |
| `created_at` | `DATETIME` | Date and time the record was created |

Sample records:

| Full name | Email | Phone |
| --- | --- | --- |
| Angela Cruz | angela.cruz@example.com | 0917 123 4567 |
| Marco Santos | marco.santos@example.com | 0918 234 5678 |
| Beatrice Reyes | beatrice.reyes@example.com | 0919 345 6789 |
| Joshua Garcia | joshua.garcia@example.com | 0920 456 7890 |
| Nicole Mendoza | nicole.mendoza@example.com | 0921 567 8901 |

### `users`

The `users` table stores the accounts of staff members who use the POS system.

| Field | Type | Description |
| --- | --- | --- |
| `id` | `INT` | Auto-incrementing primary key |
| `username` | `VARCHAR(50)` | Unique account username |
| `full_name` | `VARCHAR(100)` | User's complete name |
| `created_at` | `DATETIME` | Date and time the account was created |

Sample records:

| Username | Full name |
| --- | --- |
| `admin01` | Paolo Dela Cruz |
| `manager01` | Sofia Ramos |
| `cashier01` | Miguel Torres |
| `cashier02` | Andrea Flores |
| `staff01` | Daniel Lim |

## Local setup

### 1. Install the project dependencies

Open a terminal in the project directory and run:

```powershell
composer install
```

### 2. Create the environment file

Copy the provided `env` template to `.env`:

```powershell
Copy-Item env .env
```

Configure the application and database settings in `.env`:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'
app.indexPage = ''

database.default.hostname = localhost
database.default.database = naluan_tfa2
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

The blank database password matches the default XAMPP MySQL configuration. Change it if the local MySQL account uses a password. Do not commit `.env` because it contains machine-specific configuration.

### 3. Create and populate the database

Start Apache and MySQL from XAMPP, open `http://localhost/phpmyadmin`, and run:

```sql
CREATE DATABASE IF NOT EXISTS naluan_tfa2;
USE naluan_tfa2;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Angela Cruz', 'angela.cruz@example.com', '0917 123 4567', NOW()),
('Marco Santos', 'marco.santos@example.com', '0918 234 5678', NOW()),
('Beatrice Reyes', 'beatrice.reyes@example.com', '0919 345 6789', NOW()),
('Joshua Garcia', 'joshua.garcia@example.com', '0920 456 7890', NOW()),
('Nicole Mendoza', 'nicole.mendoza@example.com', '0921 567 8901', NOW());

INSERT INTO users (username, full_name, created_at) VALUES
('admin01', 'Paolo Dela Cruz', NOW()),
('manager01', 'Sofia Ramos', NOW()),
('cashier01', 'Miguel Torres', NOW()),
('cashier02', 'Andrea Flores', NOW()),
('staff01', 'Daniel Lim', NOW());
```

Run the insert statements only once because each username must be unique.

### 4. Run the application

Start the CodeIgniter development server:

```powershell
php spark serve
```

Open `http://localhost:8080/` in a browser.

## Application routes

| Route | Page |
| --- | --- |
| `/` | Home |
| `/about` | About |
| `/customers` | Customer Accounts |
| `/users` | User Accounts |

Database changes become visible after refreshing the corresponding account page.

## Project structure

- `app/Config/Routes.php` defines the application routes.
- `app/Controllers` contains the page, customer, and user controllers.
- `app/Models/CustomerModel.php` maps to the `customers` table.
- `app/Models/UserModel.php` maps to the `users` table.
- `app/Views` contains the pages and shared templates.
- `public/css/style.css` contains the site styling.

## Security note

The application displays database values with CodeIgniter's `esc()` helper. Local credentials remain in `.env`, which is excluded from Git.

## Course information

- Course: IT0049 – Web System Technologies
- Activity: Technical Formative Assessment 2 – From Arrays to a Real Database
