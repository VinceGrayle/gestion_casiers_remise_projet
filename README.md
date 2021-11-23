# Gestion des casiers

## Installation 

### Cloner le repo 

Ouvrir git bash et se placer dans un répertoire de travail.
Puis faire la commande:

`git clone https://github.com/ETML-INF/gest-casier`

Se déplacer dans le répertoire :

`cd gest-casier/`

### Installer les dépendances

`composer install`

### Créer le .env

Pour cela, il vous suffit de copier/coller le fichier `.env.example`
Puis de le renommer en `.env`

Puis de modifier la section `database` ainsi:

```
DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=
```

Puis de générer une nouvelle `APP_KEY` via la commande suivante:

`php artisan key:generate`

Cette commande va modifier votre fichier `.env` et ajouter une clé dans `APP_KEY`

### Créer la Database

Dans le répertoire `database`, créer le fichier `database.sqlite`

puis lancer les migration :

`php artisan migrate`

### Lancer le serveur 

Tout est prêt pour lancer le serveur.

`php artisan serve`

Ouvrir votre navigateur et saisir l'URL `http://127.0.0.1:8000`

Vous pouvez créer un nouveau casier en vous rendant dans le menu Casier > Créer un nouveau casier

Pour le reste à vous de jouer :-) 

## Casier

Un casier possède un numéro de casier
Exemple: 501 => indique que le casier est situé au 5ème étage

## Générer les migrations

```
php artisan make:migration create_lockers_table
```

### Modifier les fichiers de migrations

Ajout du champ number

### Lancer la création de la table locker

```
php artisan migrate
```

### Générer le modèle Locker

```
php artisan make:model Locker
```

### Générer le controller

```
php artisan make:controller Locker
```

