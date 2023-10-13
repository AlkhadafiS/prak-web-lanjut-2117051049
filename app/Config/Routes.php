<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/(:any)/(:any)/(:any)', 'UserController::profile/$1/$2/$3');

#form
$routes->get('/user/create', 'UserController::create');

$routes->post('/user/store', 'UserController::store');
// $routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
$routes->get('/user', 'UserController::index');

$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

$routes->get('/user/(:any)', [UserController::class, 'show']);