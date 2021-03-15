FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
  curl \
  wget \
  memcached \
  git \
  libmemcached-dev \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libmcrypt-dev \
  libpng-dev

RUN docker-php-ext-install -j$(nproc) iconv mcrypt mbstring mysqli pdo_mysql zip

# install memcache extension from repo - https://www.php.net/manual/en/book.memcache.php
RUN git clone https://github.com/websupport-sk/pecl-memcache /usr/src/php/ext/memcache \
  && cd /usr/src/php/ext/memcache && git checkout -b php7 origin/php7 \
  && docker-php-ext-configure memcache \
  && docker-php-ext-install memcache

# install gd extension - https://www.php.net/manual/en/book.image.php
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

# add custom php config
ADD ./php.ini /usr/local/etc/php/conf.d/custom.ini

WORKDIR /var/www

CMD ["php-fpm"]
