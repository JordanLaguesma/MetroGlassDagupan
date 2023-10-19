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

// For debugging purposes
$routes->get('connect', 'Test::connect');

// Customers
$routes->get('/', 'Index::index');
$routes->get('home', 'GlassMain::index', ['filter' => 'auth']);

/* Admin & Users - Start */
$routes->get('admin/', 'Index::indexAdmin');
$routes->get('admin/register', 'Register::indexAdmin');

$routes->get('admin/dashboard', 'Dashboard::index', ['filter' => 'authadmin']);
$routes->get('admin/dashboard/inventory', 'Dashboard::inInventory', ['filter' => 'authadmin']);
$routes->get('admin/dashboard/users', 'Dashboard::inUsers', ['filter' => 'authadmin']);
$routes->get('admin/dashboard/orders', 'Dashboard::inOrders', ['filter' => 'authadmin']);
$routes->get('admin/dashboard/customers', 'Dashboard::inCustomers', ['filter' => 'authadmin']);
/* Admin & Users - End */

/* CRUD Operations - Start */
$routes->post('admin/dashboard/inventory/read', 'Dashboard::tableProducts');

$routes->post('admin/dashboard/users/read', 'Dashboard::tableUsers');
$routes->post('admin/dashboard/users/save', 'Dashboard::saveUser');

$routes->post('admin/dashboard/orders/read', 'Dashboard::tableOrders');
/* CRUD Operations - End */


/* Index Operations - Start */
$routes->post('/save', 'Register::save');
$routes->post('admin/save', 'Register::saveAdmin');

$routes->post('auth', 'Index::auth');
$routes->post('admin/auth', 'Index::authAdmin');

$routes->get('logout', 'Index::logout');
$routes->get('admin/logout', 'Index::logoutAdmin');
/* Index Operations - End */

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
