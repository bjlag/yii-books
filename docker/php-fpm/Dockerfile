FROM php:7.2-fpm

ENV XDEBUG_VER 2.7.1

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        zlib1g-dev \
        libicu-dev g++ \
        libpq-dev \
        libmemcached-dev \
        libmagickwand-dev --no-install-recommends \
        zip \
        unzip \
        git \

    && pecl install \
        xdebug-$XDEBUG_VER \
        memcached \
        imagick \
    && docker-php-ext-enable \
        xdebug \
        memcached \
        imagick \

    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        opcache \
        intl \
        iconv \
        pdo \
        pgsql \
        pdo_pgsql -j$(nproc) \
        mysqli \
        pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \

    && docker-php-source delete \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/cache/apt/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN echo 'alias app="cd /var/www/html"' >> ~/.bashrc

WORKDIR /var/www/html
EXPOSE 9000
CMD ["php-fpm"]