FROM php:8.3-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

COPY --chown=www-data:www-data . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]