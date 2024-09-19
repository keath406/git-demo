# 使用 PHP 8.1 作為基礎映像
FROM php:8.1-fpm

# 安裝系統依賴和 PHP 擴展
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# 安裝 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 設置工作目錄
WORKDIR /var/www

# 複製當前專案的代碼到容器
COPY . /var/www

# 安裝 Laravel 依賴
RUN composer install --prefer-dist --no-scripts --no-progress --optimize-autoloader

# 賦予 storage 和 bootstrap/cache 正確的權限
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
