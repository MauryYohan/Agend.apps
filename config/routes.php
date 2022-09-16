<?php

const ROUTES = [
    'home' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'home',
    ],
    'legal-term' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'legal_term',
    ],
    'contact' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'contact',
    ],
    'test' => [
        'controller' => App\Controller\OfferController::class,
        'method' => 'test',
    ],
];
