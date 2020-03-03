FROM php:7.3-cli


# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    sqlite3 \
    libzip-dev \
    libxml2-dev \
    zip \
    wget \
    curl

# Install extensions
RUN docker-php-ext-install pdo mbstring zip
RUN pecl install xdebug \
    && docker-php-ext-enable --ini-name 20-xdebug.ini xdebug \
    && printf "xdebug.remote_enable=1\nxdebug.remote_connect_back=0\nxdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/20-xdebug.ini

# Install composer
RUN mkdir /composer
COPY ./docker/composer.sh /composer/install.sh
RUN cd /composer && sh install.sh
RUN curl -o /usr/local/bin/security-checker -sS https://get.sensiolabs.org/security-checker.phar
RUN chmod +x /usr/local/bin/security-checker

WORKDIR /app
CMD ["php"]