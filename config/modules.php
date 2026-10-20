<?php

declare(strict_types=1);

// Onglets de l'administration (ordre = ordre du menu).
return [

    'dashboard' => [
        'label' => 'Tableau de bord',
        'icon'  => 'fa-solid fa-chart-line',
        'roles' => ['admin'],
    ],

    'patient' => [
        'label' => 'Patients',
        'icon'  => 'fa-solid fa-hospital-user',
        'roles' => ['admin'],
    ],

    'rendezvous' => [
        'label' => 'Rendez-vous',
        'icon'  => 'fa-solid fa-calendar-check',
        'roles' => ['admin'],
    ],

    'consultation' => [
        'label' => 'Consultations',
        'icon'  => 'fa-solid fa-stethoscope',
        'roles' => ['admin'],
    ],

    'ordonnance' => [
        'label' => 'Ordonnances',
        'icon'  => 'fa-solid fa-file-prescription',
        'roles' => ['admin'],
    ],

    'historique' => [
        'label' => 'Historiques',
        'icon'  => 'fa-solid fa-notes-medical',
        'roles' => ['admin'],
    ],

    'medecin' => [
        'label' => 'Médecins',
        'icon'  => 'fa-solid fa-user-doctor',
        'roles' => ['admin'],
    ],

    'employe' => [
        'label' => 'Employés',
        'icon'  => 'fa-solid fa-users',
        'roles' => ['admin'],
    ],

    // CHARI_MODULES_HERE
];
