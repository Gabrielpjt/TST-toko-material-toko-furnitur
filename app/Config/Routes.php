<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', ['filter' => 'login'], function ($routes) {
   $routes->get('/', 'Home::index');
   $routes->get('/PenilaianPerusahaan', 'PenilaianPerusahaan::index');
   $routes->post('PenilaianPerusahaan/tambah', 'PenilaianPerusahaan::tambah');
   $routes->get('PenilaianPerusahaan/hapus/(:num)', 'PenilaianPerusahaan::hapus/$1');
   $routes->get('/Rekomendasi', 'Rekomendasi::index');
   $routes->post('/Rekomendasi/cariRekomendasi', 'Rekomendasi::cariRekomendasi');
   $routes->get('PenilaianPelanggan', 'PenilaianPelanggan::index');
   $routes->get('/form', 'PenilaianPelanggan::form');
   $routes->get('/PenilaianPelanggan/(:num)', 'PenilaianPelanggan::detail/$1');
});
$routes->post('/PenilaianPelanggan/save', 'PenilaianPelanggan::save');

// Tambahkan namespace untuk kontroler API
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
   // Definisikan rute untuk kontroler Rekomendasi
   $routes->get('rekomendasi', 'Rekomendasi_API::index');
   $routes->post('rekomendasi/cari', 'Rekomendasi_API::cariRekomendasi');
   // Tambahkan rute lain jika diperlukan
});



// Rute lainnya...


