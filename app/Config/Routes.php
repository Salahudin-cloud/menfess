<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/halaman_utama', 'Home::index');
 $routes->get('/artikel', 'Artikel::article');
 $routes->get('/menfess', 'Menfess::menfes');
 $routes->get('/confess', 'Confess::confes');
 $routes->get('/profil', 'Profil::profile');

 $routes->get('/login', 'Login::log');
 $routes->get('/register', 'Register::regis');

// backend 
//backend admin : homepage dashboard
$routes->get('/dashboard', 'HomeAdmin::admin');

// backend admin : user Management 
$routes->get('/user_management', 'UserManagementAdmin::usermanage');

// backend admin : categoru
$routes->get('/category', 'CategoryAdmin::categori');

// backend admin : artcle 
$routes->get('/article', 'ArticleAdmin::artikeladmin');

