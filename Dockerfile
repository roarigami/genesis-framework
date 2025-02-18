FROM php:8.2-cli
WORKDIR /GenesisFramework
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . .
CMD [ "php", "./SourceFiles/public/index.php" ]
EXPOSE 3000
