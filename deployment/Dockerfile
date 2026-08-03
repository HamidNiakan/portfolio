# =========================
# Stage 1: Composer (vendor/)
# =========================
FROM php:8.4-cli AS php_vendor
ENV COMPOSER_ALLOW_SUPERUSER=1
WORKDIR /app

RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip ca-certificates && \
    rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY ../composer.json ../composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --no-scripts --no-autoloader

# =========================
# Stage 2: Node (public/build)
# =========================
FROM node:22-bookworm-slim AS node_build
WORKDIR /app

COPY ../package.json ../package-lock.json ./
RUN npm ci
COPY . .
COPY --from=php_vendor /app/vendor ./vendor
RUN if npm run | grep -q "build"; then npm run build; else echo "No build script, skipping."; fi

# =========================
# Stage 3: Runtime (PHP-FPM)
# =========================
FROM php:8.4-fpm AS app
WORKDIR /var/www

ARG REDIS_VER=6.1.0
ARG user=app
ARG uid=1000

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
      vim \
      libpng-dev libjpeg-dev libfreetype6-dev libxml2-dev \
      libzip-dev libicu-dev zlib1g-dev libonig-dev \
      git unzip ca-certificates wget autoconf make gcc pkg-config \
      mariadb-client; \
    docker-php-ext-configure gd --with-freetype --with-jpeg; \
    docker-php-ext-install -j"$(nproc)" pdo_mysql mbstring exif pcntl gd bcmath opcache intl zip; \
    tmpdir="$(mktemp -d)"; cd "$tmpdir"; \
    wget -qO phpredis.tar.gz "https://github.com/phpredis/phpredis/archive/refs/tags/${REDIS_VER}.tar.gz" || \
      wget -qO phpredis.tar.gz "https://github.com/phpredis/phpredis/archive/refs/heads/develop.tar.gz"; \
    tar -xzf phpredis.tar.gz && cd phpredis-*; \
    phpize && ./configure && make -j"$(nproc)" && make install; \
    docker-php-ext-enable redis; \
    apt-get purge -y autoconf make gcc pkg-config; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./deployment/php.ini  /usr/local/etc/php/conf.d/99-production.ini
COPY ./deployment/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./deployment/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

COPY . .

COPY --from=php_vendor /app/vendor ./vendor
COPY --from=node_build  /app/public/build ./public/build

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer dump-autoload -o --no-dev
# Build a clean, production (--no-dev) package manifest inside the image so a
# dev-only provider (e.g. laravel/pail) can never poison the runtime container.
RUN php artisan package:discover --ansi || true

RUN chmod +x /entrypoint.sh

RUN useradd -u ${uid} -ms /bin/bash -g www-data ${user} && \
    chown -R ${user}:www-data /var/www && \
    find storage bootstrap/cache -type d -exec chmod 0775 {} \; 2>/dev/null || true && \
    find storage bootstrap/cache -type f -exec chmod 0664 {} \; 2>/dev/null || true

USER ${user}
EXPOSE 9000

ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]

# Nginx receives only the public application files from the built image.
FROM nginx:1.28-alpine AS web
COPY ./deployment/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY --from=app /var/www/public /var/www/public
