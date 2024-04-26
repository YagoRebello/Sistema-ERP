# Use a imagem do PHP com Apache
FROM php:8.1-apache

# Restante do Dockerfile permanece inalterado

# Habilitar módulos do Apache
RUN a2enmod rewrite

# Instalar dependências do Laravel
RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install zip pdo_mysql

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar arquivos do aplicativo para o contêiner
COPY . /var/www/html/

# Ajustar as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expor a porta 80
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
