FROM php:8.3-cli

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    APP_ENV=production \
    APP_DEBUG=false \
    RUN_MIGRATIONS=false \
    LOG_CHANNEL=stderr \
    APP_CONFIG_CACHE=/tmp/config.php \
    APP_EVENTS_CACHE=/tmp/events.php \
    APP_ROUTES_CACHE=/tmp/routes.php \
    APP_SERVICES_CACHE=/tmp/services.php \
    VIEW_COMPILED_PATH=/tmp/views

WORKDIR /var/www/html

# System dependencies and PHP extensions needed by Laravel
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql mbstring bcmath zip \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies first for better layer caching
COPY composer.json composer.lock ./
COPY app/Helpers/currency.php ./app/Helpers/currency.php
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts

# Copy app files
COPY . .

# Run Laravel package discovery after full source is available
RUN php artisan package:discover --ansi

# Ensure runtime dirs are writable
RUN mkdir -p storage/framework/{cache,sessions,views} bootstrap/cache /tmp/views \
    && chown -R www-data:www-data storage bootstrap/cache /tmp/views

# Expose Render's dynamic port
EXPOSE 10000

# Start Laravel on Render-assigned port
CMD ["sh", "-lc", "if [ \"${RUN_MIGRATIONS}\" = \"true\" ]; then php artisan migrate --force ; fi ; php artisan config:cache ; php artisan route:cache ; php artisan view:cache ; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
