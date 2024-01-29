FROM php:8.2-apache

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    libicu-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . /app

# Update and install PHP dependencies before running composer install
RUN composer update

# Print more information during composer install for debugging
RUN composer install --verbose

# Install and build npm dependencies
RUN npm install

# Run npm production build
RUN npm run production

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
