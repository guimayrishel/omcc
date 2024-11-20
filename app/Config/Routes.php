<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/store', 'Home::store');
$routes->get('/ongoing', 'OngoingProjectsController::index');
$routes->post('/ongoing/store', 'OngoingProjectsController::store');
$routes->post('/ongoing/update', 'OngoingProjectsController::update');
$routes->get('/completed', 'CompletedProjectsController::index');
$routes->post('/completed/delete', 'CompletedProjectsController::delete');
$routes->get('/pgs_osm', 'PgsController::index');
