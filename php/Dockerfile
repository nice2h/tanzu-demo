FROM php:8-fpm

# ENV COMPOSER_ALLOW_SUPERUSER 1
# ENV COMPOSER_HOME /composer
# ENV PATH $PATH:/composer/vendor/bin

# COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get install -y git \
&& docker-php-ext-install pdo_mysql mysqli

WORKDIR /var/www