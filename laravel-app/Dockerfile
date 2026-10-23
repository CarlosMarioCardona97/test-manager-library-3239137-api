FROM php:8.4-cli
RUN apt-get update && apt-get install -y libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_pgsql mbstring xml \
    && rm -rf /var/lib/apt/lists/*
WORKDIR /app