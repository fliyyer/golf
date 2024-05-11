<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection 
 */
// $routes->get('/', 'Home::index');
// $routes->get('/about', 'About::index');
// $routes->get('/account', 'Account::index');
// $routes->get('/facilities', 'Facilities::index');
// $routes->get('facilities/(:num)', 'Facilities::detail/$1');
$routes->get('/logout', 'Auth::logout');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::processRegister');
$routes->group('', ['namespace' => 'App\Controllers', 'middleware' => 'authentication'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/about', 'About::index');
    $routes->get('/account', 'Account::index');
    $routes->get('/facilities', 'Facilities::index');
    $routes->get('facilities/(:num)', 'Facilities::detail/$1');
});
