<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/PenilaianPerusahaan', 'PenilaianPerusahaan::index');
$routes->post('PenilaianPerusahaan/tambah', 'PenilaianPerusahaan::tambah');

