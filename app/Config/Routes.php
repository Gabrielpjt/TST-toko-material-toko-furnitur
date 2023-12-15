<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->group('', ['filter' => 'login'], function($routes){
    $routes->get('/', 'Home::index');
    $routes->get('/PenilaianPerusahaan', 'PenilaianPerusahaan::index');
    $routes->post('PenilaianPerusahaan/tambah', 'PenilaianPerusahaan::tambah');
    $routes->get('PenilaianPerusahaan/hapus/(:num)', 'PenilaianPerusahaan::hapus/$1');
    $routes->get('/Rekomendasi', 'Rekomendasi::index');
    $routes->post('/Rekomendasi/cariRekomendasi', 'Rekomendasi::cariRekomendasi');
 });


