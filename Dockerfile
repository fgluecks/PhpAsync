FROM php:7.3.9-apache-stretch AS phpasync_build

# Timezone

RUN echo "Europe/Berlin" > /etc/timezone
RUN rm /etc/localtime
RUN dpkg-reconfigure -f noninteractive tzdata

# Apache

RUN mkdir /var/www/html/web

COPY ./docker/php/000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY ./docker/php/apache2.conf /etc/apache2/apache2.conf

RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod headers
RUN a2enmod deflate
RUN a2enmod mime_magic

RUN apachectl restart
