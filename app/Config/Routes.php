<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::coba');
$routes->get('/Coba/(:any)/(:num)', 'Coba::index/$1/$2');
$routes->get('/Coba1', function(){
    echo "this call direct function";
});


$routes->get('/users', 'Admin\Users::index');
