FROM labs/php-apache-base:1.0

USER root

# Dependencias para compilar PECL mongodb
RUN apt-get update && apt-get install -y --no-install-recommends \
      git \
      unzip \
      pkg-config \
      libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && rm -rf /var/lib/apt/lists/*

USER appuser
