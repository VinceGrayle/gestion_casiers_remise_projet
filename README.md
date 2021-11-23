# Gestion des casiers

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

