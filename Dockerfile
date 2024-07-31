# Usa una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala extensiones adicionales de PHP si es necesario
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia los archivos de configuración de Apache
COPY my-httpd.conf /etc/apache2/sites-available/000-default.conf

# Copia los archivos de tu aplicación
COPY . /var/www/html/

# Define un volumen que será utilizado en tiempo de ejecución
VOLUME /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Exponer el puerto 447
EXPOSE 447

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]