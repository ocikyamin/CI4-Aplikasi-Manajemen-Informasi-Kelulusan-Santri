<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->post('/', 'Home::CekStatus');


// Login Admin 
$routes->get('/auth', 'Auth::index');
$routes->post('/auth', 'Auth::CekLogin');


$routes->group('admin', static function ($routes) {
    $routes->get('/', 'Admin\Users::index');
});
$routes->group('admin/sekolah', static function ($routes) {
    $routes->get('/', 'Admin\Sekolah::index');
});

$routes->group('admin/periode', static function ($routes) {
    $routes->get('/', 'Admin\Periode::index');
    $routes->get('list', 'Admin\Periode::ListPeriode');
    $routes->get('add', 'Admin\Periode::Add');
});

$routes->group('admin/siswa', static function ($routes) {
    $routes->get('/', 'Admin\Siswa::index');
    $routes->get('list', 'Admin\Siswa::ListSiswa');
    $routes->get('add', 'Admin\Siswa::Add');
    $routes->post('add', 'Admin\Siswa::PreviewCSV');
    $routes->post('upload', 'Admin\Siswa::Upload');
    $routes->get('status', 'Admin\Siswa::FormStatus');
    $routes->post('status', 'Admin\Siswa::UpdateStatus');
    $routes->post('del', 'Admin\Siswa::HapusSiswa');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
