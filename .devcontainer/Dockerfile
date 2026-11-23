FROM php:8.3-cli-alpine

RUN apk add --no-cache \
    autoconf \
    bash \
    chromium \
    curl-dev \
    curl \
    g++ \
    gcc \
    git \
    icu-dev \
    libcurl \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    make \
    oniguruma-dev \
    pkgconf \
    sqlite-dev \
    unzip

RUN docker-php-ext-install -j"$(nproc)" \
    bcmath \
    intl \
    mysqli \
    pdo_mysql \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN git config --system --add safe.directory '*'

WORKDIR /workspace

EXPOSE 8080

CMD ["sleep", "infinity"]
