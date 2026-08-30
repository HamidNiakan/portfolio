# =========================
# Stage 1: Composer (vendor/)
# =========================
FROM php:8.4-cli AS php_vendor

ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /app

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    ca-certificates \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --no-autoloader


# =========================
# Stage 2: Node (public/build)
# =========================
FROM node:22-bookworm-slim AS node_build

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm ci

COPY . .

COPY --from=php_vendor /app/vendor ./vendor

RUN npm run build


# =========================
# Stage 3: Runtime (PHP-FPM)
# =========================
FROM php:8.4-fpm AS app

WORKDIR /var/www

ARG REDIS_VER=6.1.0
ARG APP_USER=app
ARG APP_UID=1000

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        vim \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libxml2-dev \
        libzip-dev \
        libicu-dev \
        zlib1g-dev \
        libonig-dev \
        git \
        unzip \
        ca-certificates \
        wget \
        autoconf \
        make \
        gcc \
        pkg-config \
        mariadb-client; \
    docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg; \
    docker-php-ext-install -j"$(nproc)" \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        gd \
        bcmath \
        opcache \
        intl \
        zip; \
    tmpdir="$(mktemp -d)"; \
    cd "$tmpdir"; \
    wget -qO phpredis.tar.gz \
        "https://github.com/phpredis/phpredis/archive/refs/tags/${REDIS_VER}.tar.gz" \
        || wget -qO phpredis.tar.gz \
        "https://github.com/phpredis/phpredis/archive/refs/heads/develop.tar.gz"; \
    tar -xzf phpredis.tar.gz; \
    cd phpredis-*; \
    phpize; \
    ./configure; \
    make -j"$(nproc)"; \
    make install; \
    docker-php-ext-enable redis; \
    apt-get purge -y autoconf make gcc pkg-config; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


# =========================
# PHP configuration
# =========================

COPY deployment/php.ini \
    /usr/local/etc/php/conf.d/99-production.ini

COPY deployment/www.conf \
    /usr/local/etc/php-fpm.d/www.conf

COPY deployment/entrypoint.sh \
    /entrypoint.sh

RUN chmod +x /entrypoint.sh


# =========================
# Application
# =========================

COPY . .

COPY --from=php_vendor \
    /app/vendor \
    ./vendor

COPY --from=node_build \
    /app/public/build \
    ./public/build

COPY --from=composer:2 \
    /usr/bin/composer \
    /usr/bin/composer

RUN composer dump-autoload \
    -o \
    --no-dev


# =========================
# Permissions
# =========================

RUN chmod +x /entrypoint.sh

RUN if getent passwd "${APP_UID}" >/dev/null; then \
        existing_user="$(getent passwd "${APP_UID}" | cut -d: -f1)"; \
        echo "UID ${APP_UID} already belongs to ${existing_user}"; \
    else \
        useradd \
            -u "${APP_UID}" \
            -ms /bin/bash \
            -g www-data \
            "${APP_USER}"; \
    fi

RUN chown -R "${APP_USER}:www-data" /var/www && \
    find storage bootstrap/cache \
        -type d \
        -exec chmod 0775 {} \; 2>/dev/null || true && \
    find storage bootstrap/cache \
        -type f \
        -exec chmod 0664 {} \; 2>/dev/null || true


# =========================
# Runtime
# =========================

USER ${APP_USER}

EXPOSE 9000

ENTRYPOINT ["/entrypoint.sh"]

CMD ["php-fpm"]
