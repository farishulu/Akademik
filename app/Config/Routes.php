<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update', 'Mahasiswa::update');
$routes->delete('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');


$routes->get('/register', 'Auth::register');
$routes->post('/auth/storeRegister', 'Auth::storeRegister');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/authLogin', 'Auth::authLogin');
$routes->get('/logout', 'Auth::logout');


