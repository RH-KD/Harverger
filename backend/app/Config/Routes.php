<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// End point
// Format: $routes-><request type>('endpoint name', 'ControllerName::ControllerFunction')
$routes->get('/', 'Users::index');
