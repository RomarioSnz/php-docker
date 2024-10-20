FROM php:8.1-apache

COPY . /var/www/html

WORKDIR  /var/www/html

# Установка расширения pgsql и других необходимых пакетов
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql

# Копируем файлы сайта в контейнер
COPY . /var/www/html/

EXPOSE 80