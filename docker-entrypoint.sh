#!/bin/bash
set -e

# Parse DATABASE_URL if provided (Render Postgres format)
# postgresql://user:password@host:port/dbname
if [ -n "$DATABASE_URL" ]; then
    export DB_CONNECTION=pgsql
    export DB_HOST=$(echo $DATABASE_URL | sed -e 's/^.*@//' -e 's/:.*//' -e 's/\/.*//')
    export DB_PORT=$(echo $DATABASE_URL | sed -e 's/^.*://' -e 's/\/.*//')
    export DB_DATABASE=$(echo $DATABASE_URL | sed -e 's/^.*\///')
    export DB_USERNAME=$(echo $DATABASE_URL | sed -e 's/^.*:\/\///' -e 's/:.*//')
    export DB_PASSWORD=$(echo $DATABASE_URL | sed -e 's/^[^:]*:[^:]*://' -e 's/@.*//')
fi

# Write env file from environment variables
cat > /var/www/html/.env << EOF
APP_NAME="${APP_NAME:-THE NIACE}"
APP_ENV=${APP_ENV:-production}
APP_KEY=${APP_KEY}
APP_DEBUG=${APP_DEBUG:-false}
APP_URL=${APP_URL:-http://localhost}

LOG_CHANNEL=${LOG_CHANNEL:-stderr}
LOG_LEVEL=error

DB_CONNECTION=${DB_CONNECTION:-pgsql}
DB_HOST=${DB_HOST:-127.0.0.1}
DB_PORT=${DB_PORT:-5432}
DB_DATABASE=${DB_DATABASE:-niace_db}
DB_USERNAME=${DB_USERNAME:-postgres}
DB_PASSWORD=${DB_PASSWORD}

SESSION_DRIVER=${SESSION_DRIVER:-file}
SESSION_LIFETIME=120
CACHE_STORE=${CACHE_STORE:-file}
QUEUE_CONNECTION=${QUEUE_CONNECTION:-sync}
FILESYSTEM_DISK=local

MAIL_MAILER=${MAIL_MAILER:-log}
MAIL_FROM_ADDRESS=${MAIL_FROM_ADDRESS:-hello@example.com}
MAIL_FROM_NAME="${APP_NAME:-THE NIACE}"
EOF

# Cache config
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force 2>&1 || echo "Migration failed or already done"

# Fix permissions after startup
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Start Apache
exec "$@"
