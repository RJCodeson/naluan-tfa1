# SimplePOS

SimplePOS is a four-page CodeIgniter 4 website created for IT0049 Technical Formative Assessment 1. It demonstrates routes, controllers, views, basic data passing, and `foreach` loops using static PHP arrays. No database is used in this version of the project.

## Required pages

- `/` - landing page
- `/about` - project information and basic MVC flow
- `/customers` - five customer records from a static PHP array
- `/users` - five user/staff records from a static PHP array

## Requirements

- PHP 8.2 or newer
- PHP `intl` extension enabled
- Composer
- XAMPP, or CodeIgniter's local development server

## Setup with XAMPP

1. Place the project folder inside `C:\xampp\htdocs`.
2. Open a terminal in the project folder.
3. Run `composer install`.
4. Copy the `env` file and rename the copy to `.env` if `.env` is not present.
5. In `.env`, set:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost/naluan-tfa1/public/'
   app.indexPage = ''
   ```

6. Start Apache from the XAMPP Control Panel.
7. Visit `http://localhost/naluan-tfa1/public/`.

If the project folder has a different name, update `app.baseURL` to match it.
If `intl` was just enabled in `php.ini`, stop and start Apache once so it loads the change.

## Alternative: CodeIgniter development server

1. Run `composer install`.
2. Change `app.baseURL` in `.env` to `http://localhost:8080/`.
3. Run `php spark serve`.
4. Visit `http://localhost:8080/`.

## Project structure

- `app/Config/Routes.php` contains the four routes.
- `app/Controllers/Pages.php` handles the landing and about pages.
- `app/Controllers/Customers.php` contains and passes the customer array.
- `app/Controllers/Users.php` contains and passes the user array.
- `app/Views` contains the HTML/PHP views and shared header/footer.
- `public/css/style.css` contains the website styles.

## Testing

Run the tests made for the four required pages:

```text
vendor\bin\phpunit tests\feature\PagesTest.php
```

## Database note

The assessment instructions specify that no database is involved yet, so this project has no database export. The Customer Accounts and User Accounts pages use static PHP arrays as their temporary data sources, ready to be replaced by database results in the next module.
