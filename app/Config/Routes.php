<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/logout', 'Auth::logout');

$routes->get('/user', 'Dashboard::user');       // user dashboard
$routes->get('/admin', 'Dashboard::admin');     // admin dashboard