FROM composer:2
FROM php:8.1.0RC5-cli as base
WORKDIR /var/www
ENTRYPOINT ["make"]
CMD ["benchmark"]

# Setup to install stuff
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install unzip libzip-dev make \
	&& docker-php-ext-install zip \
    && docker-php-ext-install opcache \
    && docker-php-ext-enable opcache

# Fetch sources
COPY routers ./routers
COPY benchmark ./benchmark
COPY ./phpbench.json ./Makefile ./composer.json ./composer.lock ./

ARG ROUTES=100
ENV ROUTES=${ROUTES}
RUN make prepare

ENV APP_ENV=prod

# Setup PHP + Apache
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && echo "opcache.enable=1" >> "$PHP_INI_DIR/php.ini" \
    && echo "opcache.enable_cli=1" >> "$PHP_INI_DIR/php.ini" \
    && echo "opcache.validate_timestamp=0" >> "$PHP_INI_DIR/php.ini" \
    && echo "opcache.max_accelerated_files=4096" >> "$PHP_INI_DIR/php.ini"
