<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data-program-studi', 'Home::prodi');
$routes->get('/data-mahasiswa', 'Home::mahasiswa');
$routes->get('/data-dosen', 'Home::dosen');