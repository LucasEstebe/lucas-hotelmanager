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
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room

/**
 * Routes CLIENT
 */
$router->get('/guests/new', 'GuestsController@new');
$router->post('/guests/create', 'GuestsController@create');
$router->get('/guests', 'GuestsController@index');

$router->run();