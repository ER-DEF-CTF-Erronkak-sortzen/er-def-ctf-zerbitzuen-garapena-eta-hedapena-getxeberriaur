#FROM python:3.8-slim
#WORKDIR /app
#COPY app /app
#RUN pip install flask
#CMD ["python", "service.py"]

FROM php:8.1-apache

# Copiar archivos del reto
COPY app /var/www/html

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads

# Habilitar módulos necesarios
RUN docker-php-ext-install pdo pdo_mysql && a2enmod rewrite

