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

# Install composer
RUN mkdir /composer
COPY ./docker/composer.sh /composer/install.sh
RUN cd /composer && sh install.sh
RUN curl -o /usr/local/bin/security-checker -sS https://get.sensiolabs.org/security-checker.phar
RUN chmod +x /usr/local/bin/security-checker

WORKDIR /app
CMD ["php"]