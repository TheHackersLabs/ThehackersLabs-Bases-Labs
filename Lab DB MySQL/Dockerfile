FROM labs/php-apache-base:1.0

USER root
RUN apt-get update && apt-get install -y --no-install-recommends \
    libzip-dev \
 && docker-php-ext-install mysqli pdo pdo_mysql \
 && rm -rf /var/lib/apt/lists/*
USER appuser
