# Usando a imagem oficial do PHP
FROM php:8.3-apache

# Copiar todos os arquivos do seu projeto para o diretório de trabalho no Docker
COPY . /var/www/html/

# Instalar dependências, como o Composer (caso necessário)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Expor a porta 80 para o Apache
EXPOSE 80

# Iniciar o Apache no Docker
CMD ["apache2-foreground"]
