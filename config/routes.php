<?php

const ROUTES = [
    'home' => [
        'controller' => App\Controller\AgendaController::class,
        'method' => 'home',
    ],
    'show' => [
        'controller' => App\Controller\AgendaController::class,
        'method' => 'show',
        //'id' => ":id"
    ],
    'add' => [
        'controller' => App\Controller\AgendaController::class,
        'method' => 'add'
    ],
    'edit' => [
        'controller' => App\Controller\AgendaController::class,
        'method' => 'edit'
    ],
    'delete' => [
        'controller' => App\Controller\AgendaController::class,
        'method' => 'delete'
    ],
    'user_register' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'register'
    ],
    'connexion' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'connect'
    ],

    'legal-term' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'legal_term',
    ],
    'contact' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'contact',
    ]
];
