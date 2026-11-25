FROM php:8.4-cli

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    APP_ENV=production \
    APP_DEBUG=false \
    RUN_MIGRATIONS=true \
    RUN_SEEDERS=true \
    SESSION_DRIVER=file \
    CACHE_STORE=file \
    QUEUE_CONNECTION=sync \
    FILESYSTEM_DISK=local \
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
    libpq-dev \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql pdo_pgsql mbstring bcmath zip \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies first for better layer caching
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-scripts --no-autoloader

# Copy app files
COPY . .

# Generate optimized autoload only after complete source is present
RUN composer dump-autoload --no-dev --optimize --no-interaction

# Run Laravel package discovery after full source is available
RUN php artisan package:discover --ansi

# Ensure runtime dirs are writable
RUN mkdir -p storage/framework/{cache,sessions,views} bootstrap/cache /tmp/views \
    && chown -R www-data:www-data storage bootstrap/cache /tmp/views

# Container startup script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose Render's dynamic port
EXPOSE 10000

# Start Laravel on Render-assigned port
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
