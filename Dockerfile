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

# Run nginx and PHP-FPM as the unprivileged nginx user.
# nginx listens on 8080 (unprivileged) with its pid in /tmp.
COPY config/nginx.conf /etc/nginx/nginx.conf
COPY config/php-fpm.conf /etc/php-fpm.conf
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 8080
USER nginx

# Ensure nginx is serving the app on port 8080
HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
    CMD curl -fsS http://127.0.0.1:8080/ || exit 1
