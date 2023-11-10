FROM composer:2.6 AS vendor

WORKDIR /var/www/html/

COPY ./app/ .

RUN composer install

FROM php:8.1-apache

WORKDIR /var/www/html/

COPY --from=vendor /var/www/html/ .

RUN curl -sS https://get.symfony.com/cli/installer | bash && \
	mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

EXPOSE 8000

CMD ["symfony", "server:start"]