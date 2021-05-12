# Utilisation de l'image php avec le tag apache car l'extension mod_php est préinstallée et gère le php 
FROM php:apache

# Installation de l'extension PDO qui permet de se connecter à la bdd 
RUN docker-php-ext-install pdo pdo_mysql

# Copie du site dynamique dans le fichier www d'apache création d'un dossier b2b  
COPY ./projet/ /var/www/html/
COPY ./apache2.conf /etc/apache2/apache2.conf

# Désactiver la configuration des virtualhosts par défaut
#RUN a2dissite 000-default.conf
