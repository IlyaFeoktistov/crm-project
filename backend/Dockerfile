FROM php:7.4-fpm

WORKDIR /var/www/html

# Установка зависимостей PHP
RUN set -xe \
    && docker-php-ext-install -j$(nproc) pdo \
    && docker-php-ext-install -j$(nproc) pdo_mysql

# RUN chmod -R 755 /var/www/html

# RUN chown -R www-data:www-data /var/www/html/

EXPOSE 9000

CMD ["php-fpm"]
