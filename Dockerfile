FROM php:8.3-alpine AS base

COPY . /app
WORKDIR /app

RUN apk add unzip \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer --version=2.7.9 \
    && php -r "unlink('composer-setup.php');" \
    && composer install -o --no-interaction

WORKDIR /app/tools/php-cs-fixer

RUN composer install -o --no-interaction

WORKDIR /app

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
