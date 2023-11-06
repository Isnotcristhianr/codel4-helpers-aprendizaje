<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//formulario
$routes->get('/prueba', 'ControllerPrueba::Bienvenida');

//recibir datos
$routes->get('/recibirdatos', 'ControllerPrueba::RecibirDatos');


