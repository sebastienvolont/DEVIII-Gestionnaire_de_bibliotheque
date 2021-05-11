# Utilisation de l'image php avec le tag apache car l'extension mod_php est préinstallée et gère le php 
FROM php:apache
RUN apt-get update
RUN apt-get install curl vim nano npm nodejs -y
RUN cd /var/www/html && npm install --global yarn && yarn install && composer require symfony/web-server-bundle --dev

# Installation de l'extension PDO qui permet de se connecter à la bdd 
RUN docker-php-ext-install pdo pdo_mysql

# Copie du site dynamique dans le fichier www d'apache création d'un dossier b2b  
COPY ./projet/ /var/www/html/

# Désactiver la configuration des virtualhosts par défaut
#RUN a2dissite 000-default.conf
