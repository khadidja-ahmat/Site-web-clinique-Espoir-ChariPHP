# Clinique Espoir – version ChariPHP (PHP natif)

Gestion d'une clinique (patients, médecins, rendez-vous, consultations, ordonnances, employés, historiques) avec un **site public** et un **back-office en PHP natif** généré avec mon outil [ChariPHP](https://github.com/khadidja-ahmat/ChariPHP).

La même clinique existe en **Laravel pur** : [site-web-clinique_espoir](https://github.com/khadidja-ahmat/site-web-clinique_espoir). Les deux versions montrent deux manières de travailler : un framework d'un côté, du PHP natif de l'autre.

## Fonctionnalités

- Site public : accueil, à propos, équipe médicale (nom et spécialité), contact
- Connexion du personnel (mot de passe haché en bcrypt, session renouvelée à la connexion, déconnexion automatique après 30 minutes d'inactivité, déconnexion manuelle)
- Toutes les pages de gestion sont protégées : sans connexion, on est renvoyé vers `login.php`
- Gestion complète (liste, ajout, modification, suppression) des patients, médecins, rendez-vous, consultations, ordonnances, employés et historiques, en AJAX
- Protection CSRF sur toutes les écritures et requêtes SQL préparées (PDO)
- Installation guidée du premier administrateur (`config/install.php`) et fichier `schema.sql` pour les tables

## Technologies

PHP 8+, PDO / MySQL, Bootstrap, jQuery, DataTables, ChariPHP.

## Installation

Prérequis : PHP 8+ (`pdo_mysql`), MySQL ou MariaDB, un serveur local (XAMPP, WAMP, Laragon…).

1. Copiez ce dossier dans `htdocs` (ou équivalent).
2. Créez une base vide `clinique`, puis importez `schema.sql` :
   ```bash
   mysql -u root -p clinique < schema.sql
   ```
3. Vérifiez la connexion dans `config/database.php` (hôte, base, utilisateur, mot de passe).
4. Ouvrez `http://localhost/<dossier>/config/install.php` : créez le compte administrateur (8 caractères minimum). Cette page ne fonctionne que tant qu'aucun administrateur n'existe.
5. Connectez-vous sur `http://localhost/<dossier>/login.php`.

### Carte Google Maps (facultatif)

Ajoutez dans `config/app.php` : `define('GOOGLE_MAPS_KEY', 'votre-clé');`. Sans clé, la carte n'est pas chargée.

## Structure

```
index.php, pages/     Site public
login.php, admin/     Connexion et back-office (un dossier par module)
config/               Base de données, routes, menu, installation
includes/             Morceaux de pages communs
schema.sql            Tables de la clinique
```

## Différences avec la version Laravel

Les deux versions ont les mêmes tables et les mêmes pages. La version Laravel va plus loin sur ces points : limitation des tentatives de connexion, validation détaillée des formulaires, envoi de photos contrôlé, API JSON, tests automatisés et données fictives. Cette version-ci montre ce qu'on peut faire en PHP natif avec ChariPHP.

## Remarques

- Les dossiers `config/` et `includes/` sont protégés par `.htaccess` (Apache). Avec Nginx, interdisez l'accès à ces dossiers dans la configuration.
- Supprimez `config/install.php` une fois l'administrateur créé.
- Supprimer un patient supprime aussi ses rendez-vous, consultations, ordonnances et historiques.

## Auteur

Projet réalisé par **Khadidja Ahmat Hassan**.