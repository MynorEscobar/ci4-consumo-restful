<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PlanesApiController::index');
$routes->get('nuevo','PlanesApiController::agregar');
$routes->post('agregar','PlanesController::agregarPlanes');
