FROM php:8.1-apache

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Configuración personalizada del host virtual
COPY ./uploads /var/www/html/uploads
COPY ./index.php /var/www/html/index.php

# Cambiar permisos de la carpeta uploads
RUN chmod -R 777 /var/www/html/uploads
