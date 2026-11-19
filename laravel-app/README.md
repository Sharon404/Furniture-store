# BEDS - TREND FURNITURE

A Laravel 13 furniture storefront for BEDS - TREND FURNITURE.

## Features

- Responsive furniture storefront and product catalog
- Shared product data and dynamic product detail routes
- Account, cart, checkout, wishlist, blog, policy, and contact pages
- Sticky desktop header and mobile hamburger navigation
- Docker support for Render deployment
- Centralized currency formatting in `app/Helpers/currency.php`

## Requirements

- PHP 8.4+
- Composer
- Node.js 20+
- npm

The Docker and production setup use PHP 8.4 because Laravel 13 dependencies require PHP 8.4-compatible releases.

## Local Development

```bash
cd laravel-app
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Open `http://127.0.0.1:8000`.

To run frontend asset commands:

```bash
npm install
npm run dev
```

## Environment

Important production variables:

```dotenv
APP_NAME="BEDS - TREND FURNITURE"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-render-url.onrender.com
APP_KEY=base64:...
LOG_CHANNEL=stderr
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
FILESYSTEM_DISK=local
RUN_MIGRATIONS=false
```

Database variables are optional for the current static storefront. If database-backed pages or migrations are enabled later, configure `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.

## Routes

Main storefront routes include:

- `/` — Home
- `/products` — Product catalog
- `/products/{slug}` — Product detail
- `/about` — About
- `/contact` — Contact
- `/cart` — Cart
- `/checkout` — Checkout
- `/wishlist` — Wishlist
- `/profile` — Account area
- `/blog` — Blog
- `/privacy-policy`, `/delivery-policy`, `/refund-return`, `/faqs` — Policies and support

## Testing

```bash
php artisan test
php artisan route:list
php artisan view:cache
```

## Render Deployment

The repository includes:

- `Dockerfile` — Production PHP 8.4 container
- `render.yaml` — Render Blueprint service configuration
- `.dockerignore` — Excludes local/generated files from Docker builds

Deploy with Render using the `Docker` runtime or create a Blueprint service from `render.yaml`. Set database variables in the Render dashboard if database-backed features are enabled.

## Project Structure

```text
app/                  Application classes and helpers
resources/views/      Blade layouts, pages, and partials
routes/web.php        Storefront routes and product catalog
public/css/           Stylesheets
public/js/            Frontend scripts
public/images/        Storefront images
public/fonts/         Local font assets
```

## License

This project is maintained for BEDS - TREND FURNITURE. Third-party theme assets retain their original licenses where applicable.
