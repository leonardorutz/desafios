FROM php:7.4

WORKDIR /var/www

RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

COPY ./index.php /var/www

ENTRYPOINT [ "php", "-S", "0.0.0.0:8000"]


