# 1. Stage untuk kompilasi Tailwind CSS / Vite (Node.js)
FROM node:20 AS node-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# 2. Stage utama untuk server PHP + Laravel
FROM php:8.2-cli

# Install dependencies sistem & ekstensi PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copy Composer dari official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy seluruh source code proyek
COPY . .

# Copy hasil build Tailwind/Vite dari stage Node.js
COPY --from=node-builder /app/public/build ./public/build

# Install dependency PHP tanpa dev-tools
RUN composer install --no-dev --optimize-autoloader

# Expose port dan jalankan Laravel
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}