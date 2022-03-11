
Procédure d'installation du projet :

git clone https://github.com/VinceGrayle/gestion_casiers_remise_projet.git
cd gestion_casiers_remise_projet/
composer install
Création de la base de données correspondante
Création d'un fichier .env et lier la base de données précédemment créée
Effectuer un "php artisan migrate" pour insérer les données du projet dans la base de données
Effectuer un "php artisan serve" pour lancer le serveur
