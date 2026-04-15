<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->match(['get', 'post'], 'auth/login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

$routes->get('home', 'Home::index');

$routes->get('potenciales_clientes', 'Clientes::potencial_cliente');
$routes->get('registrar-potencial-cliente', 'Clientes::registrar_potencial_cliente');

$routes->get('tareas', 'Tareas::index');
