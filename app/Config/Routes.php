<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



// backend 
//backend admin : homepage dashboard
$routes->get('/dashboard', 'HomeAdmin::index');

// backend admin : user Management 
$routes->get('/user_management', 'UserManagementAdmin::index');

// backend admin : categoru
$routes->get('/category', 'CategoryAdmin::index');

// backend admin : artcle 
$routes->get('/article', 'ArticleAdmin::index');

