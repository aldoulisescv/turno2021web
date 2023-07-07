# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Establece una etiqueta con el nombre de la imagen
LABEL nombre="turno-back-end"

# Instala dependencias y utilidades
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Copia el código de Laravel al contenedor
COPY ./ /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql

# Ejecuta composer install para instalar dependencias
RUN composer install --no-scripts

# Ejecuta composer update para actualizar dependencias
RUN composer update

# Establece el directorio raíz de documentos para Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APACHE_LOG_DIR /var/log/apache2


# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite