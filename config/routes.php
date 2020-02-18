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
$router->post('/rooms/create', 'RoomsController@create');

$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room

$router->get('/rooms/(\d+)/delete', 'RoomsController@delete'); // Supprimer 1 room

$router->post('/rooms/(\d+)/assign_guest', 'RoomsController@assignGuest');
$router->get('/rooms/(\d+)/unassign_guest', 'RoomsController@unassignGuest');

/**
 * Routes CLIENT
 */
$router->get('/guests/new', 'GuestsController@new');
$router->post('/guests/create', 'GuestsController@create');
$router->get('/guests/(\d+)', 'GuestsController@show');
$router->get('/guests/(\d+)/delete', 'GuestsController@delete');
$router->get('/guests', 'GuestsController@index');

$router->run();