<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/PenilaianPerusahaan', 'PenilaianPerusahaan::index');
$routes->post('PenilaianPerusahaan/tambah', 'PenilaianPerusahaan::tambah');
$routes->get('PenilaianPerusahaan/hapus/(:num)', 'PenilaianPerusahaan::hapus/$1');
$routes->get('/Rekomendasi', 'Rekomendasi::index');
$routes->post('/Rekomendasi/cariRekomendasi', 'Rekomendasi::cariRekomendasi');
$routes->get('PenilaianPelanggan', 'PenilaianPelanggan::index');
$routes->get('/form', 'PenilaianPelanggan::form');
$routes->post('/PenilaianPelanggan/save', 'PenilaianPelanggan::save');
$routes->get('/PenilaianPelanggan/(:num)', 'PenilaianPelanggan::detail/$1');
