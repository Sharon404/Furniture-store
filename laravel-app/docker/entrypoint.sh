#!/bin/sh
set -eu

if [ -z "${APP_KEY:-}" ]; then
  export APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
fi

if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
  if [ "${RUN_SEEDERS:-true}" = "true" ]; then
    php artisan migrate --force --seed
  else
    php artisan migrate --force
  fi
fi

php artisan config:cache
php artisan route:cache || true
php artisan view:cache

exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
