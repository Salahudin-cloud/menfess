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

$routes->post('/auth', 'Login::auth');

$routes->get('/logout', 'Login::logout');


$routes->get('/register', 'Register::regis');

$routes->post('/registerProcess', 'Register::proccessRegister');


$routes->get('/dashboard', 'HalamanAdmin::admin');


$routes->get('/user_management', 'PengelolaUser::usermanage');

$routes->get('/tambahuser', 'PengelolaUser::tambahusr');
$routes->post('/prosestambahuser', 'PengelolaUser::prosestambahusr');

$routes->get('edituser/(:any)', 'PengelolaUser::editusr/$1');

$routes->post('prosesedituser/(:any)', 'PengelolaUser::proseseditusr/$1');

$routes->get('/hapususer/(:any)', 'PengelolaUser::hapususr/$1');



// backend admin : artcle 
$routes->get('/article', 'PengelolaArtikel::artikeladmin');
$routes->get('/tambahartikel', 'PengelolaArtikel::tambahartik');
$routes->post('/prosestambahartikel', 'PengelolaArtikel::prosestambahartik');
$routes->get('editartikel/(:any)', 'PengelolaArtikel::editartik/$1');
$routes->post('/proseseditartikel', 'PengelolaArtikel::proseseditartik');
$routes->get('/hapusartikel/(:any)', 'PengelolaArtikel::hapusartik/$1');


// backend render : kategori 
// halaman kategori 
$routes->get('/kategori', 'Kategori::index');
