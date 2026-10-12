# Install PHPMailer and its autoloader via Composer
FROM composer:2 AS composer
WORKDIR /app
COPY composer.json ./
RUN composer install --no-dev --no-interaction --no-progress

FROM ghcr.io/laniksj/docker-php-alpine:master

# PHPMailer from Composer (kept outside the web root)
COPY --from=composer /app/vendor /var/www/vendor

# Copy Test Page
COPY html/ /var/www/html
