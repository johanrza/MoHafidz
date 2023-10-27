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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// PINDAH" HALAMAN :
$routes->get('/', 'Main::index');
$routes->get('/login', 'Main::login');
$routes->get('/logout', 'Main::logout');
$routes->get('/profile/(:num)', 'Main::profile/$1');
$routes->get('/settings', 'Main::settings');
$routes->get('/dashboard', 'Main::dashboard');
$routes->get('/data-santri', 'Main::dataSantri');
$routes->get('/masterLogin', 'Main::masterLogin');
$routes->get('/data-prestasi', 'Main::dataPrestasi');
$routes->get('/masterDashboard', 'Main::masterDashboard');


// DELETE DATA
$routes->get('/masterDashboard/deletePengajar/(:num)', 'Main::deletePengajar/$1');
$routes->get('/data-santri/deleteSantri/(:num)', 'Main::deleteSantri/$1');
$routes->get('/profile/deleteSantri/(:num)', 'Main::deleteSantri/$1');
$routes->get('/profile/deleteHafalan/(:num)', 'Main::deleteHafalan/$1');
$routes->get('/settings/deleteFoto', 'Main::deleteFotoPengajar');
$routes->get('/data-santri/deleteFotoSantri/(:num)', 'Main::deleteFotoSantri/$1');

// POST DATA
$routes->post('/pencarian', 'Main::indexPencarian');
$routes->post('/pencarianRekomendasi', 'Main::pencarianRekomendasi');
$routes->get('/pencarianRedirect/(:num)', 'Main::pencarianRedirect/$1');
$routes->post('/login/pengajar', 'Main::loginPengajar');
$routes->post('/login/master', 'Main::loginMaster');
$routes->post('/masterDashboard/addPengajar', 'Main::addPengajar');
$routes->post('/masterDashboard/updatePengajar/(:num)', 'Main::updatePengajar/$1');
$routes->post('/data-santri/addSantri', 'Main::addSantri');
$routes->post('/data-santri/updateSantri/(:num)', 'Main::updateSantri/$1');
$routes->post('/data-prestasi/short-by-date', 'Main::dataPrestasiSort');
$routes->post('/profile/updateProfile/(:num)', 'Main::updateProfile/$1');
$routes->post('/profile/addHafalan/(:num)', 'Main::addHafalan/$1');
$routes->post('/profile/updateHafalan/(:num)', 'Main::updateHafalan/$1');
$routes->post('/settings/updatePengajar/(:num)', 'Main::settingsUpdatePengajar/$1');

// PDF
$routes->get('profile/(:num)/pdf/(:any)', 'Main::generatepdf/$1/$2');
$routes->get('data-prestasi/pdf/', 'Main::generatepdfPrestasi/');

//cuntom
$routes->add('pencarianPilihan', 'Main::indexPencarian');




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
