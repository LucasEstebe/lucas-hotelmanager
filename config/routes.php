<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/new', 'RoomsController@new');
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room
$router->get('/rooms/(\d+)/delete', 'RoomsController@delete'); // Affichage de 1 room
$router->post('/rooms/(\d+)/assign_guest', 'RoomsController@assignGuest');

/**
 * Routes CLIENT
 */
$router->get('/guests/new', 'GuestsController@new');
$router->post('/guests/create', 'GuestsController@create');
$router->get('/guests', 'GuestsController@index');

$router->run();