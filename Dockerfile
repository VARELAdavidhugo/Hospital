FROM php:8.2-cli

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Créer le dossier de l'app
WORKDIR /var/www/hospital_app

# Cloner ton dépôt depuis GitHub
RUN apt-get update && apt-get install -y git \
  && git clone https://github.com/VARELAdavidhugo/Hospital . \
  && rm -rf .git

# Lancer le serveur PHP natif sur le port 8000
CMD ["php", "-S", "0.0.0.0:8000"]
