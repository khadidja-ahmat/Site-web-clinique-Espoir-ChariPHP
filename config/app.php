<?php

declare(strict_types=1);

// Carte Google Maps (facultatif) : décommentez et mettez votre clé.
// define('GOOGLE_MAPS_KEY', 'votre-clé');

/*
|--------------------------------------------------------------------------
| Configuration générale du projet
|--------------------------------------------------------------------------
|
| Ce fichier contient les informations générales de l'application.
| Il peut être modifié pour adapter ChariPHP à n'importe quel projet.
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Identité du projet
    |--------------------------------------------------------------------------
    */

    'name' => 'Clinique_espoir',

    'description' => '',

    'public_title' => 'Clinique_espoir',

    'admin_title' => 'Administration - Clinique_espoir',


    /*
    |--------------------------------------------------------------------------
    | Navigation par défaut
    |--------------------------------------------------------------------------
    */

    'default_public_page' => 'accueil',

    'default_admin_module' => 'dashboard',


    /*
    |--------------------------------------------------------------------------
    | Sessions
    |--------------------------------------------------------------------------
    |
    | Durée d'inactivité maximale avant déconnexion.
    | Valeur exprimée en secondes.
    | 1800 secondes = 30 minutes.
    |
    */

    'session_lifetime' => 1800,

];