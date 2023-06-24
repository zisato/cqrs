FROM php:8.1-cli AS php-cli

# Install
RUN apt update && apt install -y \
    curl \
    git \
    libcurl4-openssl-dev \
    libssl-dev \
    pkg-config \
    unzip \
    vim \
    wget

# Install composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN usermod -u 1000 www-data