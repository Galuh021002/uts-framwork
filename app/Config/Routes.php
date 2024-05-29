<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Latihan::home');
$routes->get('/about', 'Latihan::about');
$routes->get('/skill', 'Latihan::skill');
$routes->get('/experience', 'Latihan::experience');
$routes->get('/contact', 'Latihan::contact');
