<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route untuk Anggota
$routes->get('/anggota', 'AnggotaController::index');
$routes->get('/anggota/tambah', 'AnggotaController::tambah');
$routes->post('/anggota/simpan', 'AnggotaController::simpan');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/update/(:num)', 'AnggotaController::update/$1');
$routes->post('/anggota/hapus/(:num)', 'AnggotaController::hapus/$1');

// Route untuk Organisasi
$routes->get('/organisasi', 'OrganisasiController::index');
$routes->get('/organisasi/tambah', 'OrganisasiController::tambah');
$routes->post('/organisasi/simpan', 'OrganisasiController::simpan');
$routes->get('/organisasi/edit/(:num)', 'OrganisasiController::edit/$1');
$routes->post('/organisasi/update/(:num)', 'OrganisasiController::update/$1');
$routes->post('/organisasi/hapus/(:num)' , 'OrganisasiController::hapus/$1');

// Route untuk Login
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
