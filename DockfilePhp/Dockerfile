

FROM php:7.4.1-apache

RUN apt update

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html
RUN docker-php-ext-install mysqli

COPY ./php /var/www/html/

EXPOSE 80
