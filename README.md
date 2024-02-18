# Projet Crèche - API Overview

Ce projet Laravel sert de backend pour une application de gestion de crèche. Voici un aperçu des fonctionnalités disponibles via l'API.

## Fonctionnalités disponibles

- **Gestion des utilisateurs** : Inscription, authentification, et mise à jour des informations utilisateur.
- **Gestion des enfants** : Ajout, mise à jour, et récupération des informations des enfants inscrits dans la crèche.
- **Gestion des nouvelles** : Publication, mise à jour, et récupération des nouvelles et annonces importantes.
- **Gestion des menus** : Création et mise à jour des menus alimentaires pour les enfants.
- **Gestion du personnel** : Ajout et mise à jour des informations relatives au personnel de la crèche.
- **Gestion des propriétaires** : Gestion des informations relatives aux propriétaires de la crèche.
- **Gestion des plannings** : Organisation et mise à jour des plannings d'activités.

## Routes API

### Utilisateurs
- **GET `/users`** : Récupérer la liste de tous les utilisateurs.
- **POST `/user`** : Récupérer les informations d'un utilisateur par son ID.
- **POST `/user-by-username`** : Récupérer les informations d'un utilisateur par son nom d'utilisateur.

### Enfants
- **GET `/enfants`** : Récupérer la liste de tous les enfants.
- **POST `/enfant`** : Récupérer les informations d'un enfant par son ID.

### Nouvelles
- **GET `/nouvelles`** : Récupérer toutes les nouvelles publiées.
- **POST `/nouvelle`** : Récupérer une nouvelle spécifique par son ID.

### Menus
- **GET `/menus`** : Récupérer la liste de tous les menus.
- **POST `/menu`** : Récupérer les détails d'un menu par son ID.

### Personnel
- **GET `/personnels`** : Récupérer la liste de tout le personnel.
- **POST `/personnel`** : Récupérer les informations d'un membre du personnel par son ID.
- **PUT `/personnel`** : Mettre à jour les informations d'un membre du personnel.
- **DELETE `/personnel`** : Supprimer un membre du personnel.

### Propriétaires
- **GET `/owners`** : Récupérer la liste de tous les propriétaires.
- **POST `/owner`** : Récupérer les informations d'un propriétaire par son ID.

### Plannings
- **GET `/plannings`** : Récupérer tous les plannings.
- **POST `/planning`** : Récupérer un planning spécifique par son ID.

# Bibliothèques et Dépendances Utilisées

Ce projet utilise plusieurs bibliothèques et paquets clés, comme indiqué dans le fichier `composer.json`. Voici une liste des principales dépendances et leur objectif :

## Laravel Framework et ses composants :
- **`laravel/framework`** : Le cadre principal de Laravel qui fournit la majorité des fonctionnalités de base de Laravel.
- **`laravel/fortify`** : Un backend léger pour l'authentification et l'enregistrement dans les applications Laravel.
- **`laravel/passport`** : Un package complet pour l'authentification OAuth2, permettant la sécurisation des API.
- **`laravel/sanctum`** : Un package pour la gestion des tokens d'API et des sessions mobiles/web simples.
- **`laravel/tinker`** : Un outil de ligne de commande REPL pour interagir avec votre application Laravel.
- **`laravel/ui`** : Un package pour générer des éléments d'interface utilisateur, tels que des réponses d'authentification et des modèles de vue.

## Développement et tests :
- **`fakerphp/faker`** : Une bibliothèque pour générer de fausses données pour vos bases de données pendant le développement.
- **`laravel/pint`** : Un outil de formatage de code pour les applications Laravel.
- **`laravel/sail`** : Une interface de ligne de commande pour interagir avec l'environnement de développement Docker par défaut de Laravel.
- **`mockery/mockery`** : Une bibliothèque de simulation pour les tests unitaires en PHP.
- **`nunomaduro/collision`** : Un gestionnaire d'erreurs pour les applications console, utilisé pour une meilleure expérience de débogage.
- **`phpunit/phpunit`** : Le framework de test unitaire pour PHP.
- **`spatie/laravel-ignition`** : Un magnifique gestionnaire d'erreurs pour les applications Laravel.

## Autres dépendances importantes :
- **`guzzlehttp/guzzle`** : Un client HTTP robuste pour PHP, utilisé pour effectuer des requêtes HTTP.
