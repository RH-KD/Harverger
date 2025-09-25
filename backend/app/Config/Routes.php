<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// End point
// Format: $routes-><request type>('endpoint name', 'ControllerName::ControllerFunction')
$routes->get('/', 'Users::index');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Login::dashboard');
$routes->get('/signup', 'Users::signup');
