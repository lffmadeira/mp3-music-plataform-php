# Usando a imagem PHP oficial
FROM php:7.4-apache

# Habilitar mod_rewrite para Apache (se necessário)
RUN a2enmod rewrite

# Instalar dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o contêiner
COPY . .

# Rodar composer para instalar as dependências
RUN composer install

# Expor a porta padrão do Apache
EXPOSE 80

# Iniciar o servidor Apache
CMD ["apache2-foreground"]