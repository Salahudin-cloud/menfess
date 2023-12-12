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

// halaman login 
// render halaman awal
$routes->get('/login', 'Login::log');
// proses validasi 
$routes->post('/auth', 'Login::auth');

// log out
$routes->get('/logout', 'Login::logout');

// register 
// render halaman register
$routes->get('/register', 'Register::regis');
// process register 
$routes->post('/registerProcess', 'Register::proccessRegister');

// backend 
//backend admin : homepage dashboard
$routes->get('/dashboard', 'HalamanAdmin::admin');

// backend admin : user Management 
$routes->get('/user_management', 'MengelolaUser::usermanage');
// tambah pengguna
$routes->get('/tambahuser', 'MengelolaUser::tambahusr');
$routes->post('/prosestambahuser', 'MengelolaUser::prosestambahusr');

// update pengguna
$routes->get('edituser/(:any)', 'MengelolaUser::editusr/$1');

$routes->post('prosesedituser/(:any)', 'MengelolaUser::proseseditusr/$1');

//hapus pengguna
$routes->get('/hapususer/(:any)', 'MengelolaUser::hapususr/$1');



// backend admin : artcle 
$routes->get('/article', 'PengelolaArtikel::artikeladmin');
$routes->get('/tambahartikel', 'PengelolaArtikel::tambahartik');
$routes->post('/prosestambahartikel', 'PengelolaArtikel::prosestambahartik');
$routes->get('/editartikel/(:any)', 'PengelolaArtikel::editartik/$1');
$routes->post('/proseseditartikel', 'PengelolaArtikel::proseseditartik');
$routes->get('/hapusartikel/(:any)', 'PengelolaArtikel::hapusartik/$1');
