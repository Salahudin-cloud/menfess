<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



// backend 
//backend homepage 
$routes->get('/homepage', 'HomeBackend::index');