<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/registro', 'Login::registro');

$routes->post('/auth/login', 'Login::login');

$routes->post('/auth/register', 'Login::register');