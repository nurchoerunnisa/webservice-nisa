<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/petshop', 'Petshop::index');
$routes->get('/petshop/json', 'petshop::getPetShopDataJson');
$routes->get('/petshop/simpel-json', 'Petshop::showSimpleJson');
$routes->get('/petshop/data-petshop', 'Petshop::getAdminDataJson');
$routes->get('/petshop/hapus/(:num)', 'Petshop::delete/$1');

