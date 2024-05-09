<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection 
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::processRegister');
