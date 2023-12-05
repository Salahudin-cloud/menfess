<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/halaman_utama', 'HalamanUtama::index');
 $routes->get('/artikel', 'Artikel::article');
 $routes->get('/menfess', 'Menfess::menfes');
 $routes->get('/confess', 'Confess::confes');
 $routes->get('/profil', 'Profil::profile');

 $routes->get('/isiartikel', 'IsiArtikel::artikel');

 $routes->get('/login', 'Login::log');
 $routes->get('/register', 'Register::regis');

// backend 
//backend admin : homepage dashboard
$routes->get('/dashboard', 'HalamanAdmin::admin');

// backend admin : user Management 
$routes->get('/user_management', 'MengelolaUser::usermanage');

// backend admin : tambah user 
$routes->get('/tambahuser', 'HalamanTambahUser::tambahusr');

// backend admin : tambah user 
$routes->get('/tambahartikel', 'HalamanTambahArtikel::tambahartik');

// backend admin : tambah user 
$routes->get('/editartikel', 'HalamanEditArtikel::editartik');

// backend admin : edit user 
$routes->get('/edituser', 'HalamanEditUser::editusr');

// backend admin : artcle 
$routes->get('/article', 'MengelolaArtikel::artikeladmin');

