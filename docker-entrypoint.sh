#!/bin/bash
set -e

# Parse DATABASE_URL if provided (Render Postgres format)
if [ -n "$DATABASE_URL" ]; then
    export DB_CONNECTION=pgsql
    export DB_HOST=$(echo $DATABASE_URL | sed -e 's|^.*@||' -e 's|:.*||' -e 's|/.*||')
    export DB_PORT=$(echo $DATABASE_URL | sed -e 's|^[^:]*:[^:]*:[^:]*:||' -e 's|/.*||')
    export DB_DATABASE=$(echo $DATABASE_URL | sed -e 's|^.*/||')
    export DB_USERNAME=$(echo $DATABASE_URL | sed -e 's|^[^/]*/||' -e 's|://||' | cut -d: -f1 | sed 's|.*://||')
    export DB_PASSWORD=$(echo $DATABASE_URL | sed -e 's|^[^:]*://[^:]*:||' -e 's|@.*||')
fi

# Write .env from environment variables
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

SESSION_DRIVER=file
SESSION_LIFETIME=120
CACHE_STORE=file
QUEUE_CONNECTION=sync
FILESYSTEM_DISK=local

MAIL_MAILER=${MAIL_MAILER:-log}
MAIL_FROM_ADDRESS=${MAIL_FROM_ADDRESS:-noreply@theniace.com}
MAIL_FROM_NAME="${APP_NAME:-THE NIACE}"
EOF

# Clear and rebuild caches
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Seed admin if no admin exists
php artisan db:seed --class=AdminSeeder --force 2>/dev/null || echo "Admin seeder skipped"

# Storage link
php artisan storage:link 2>/dev/null || echo "Storage link exists"

# Fix permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Start Apache
exec "$@"
