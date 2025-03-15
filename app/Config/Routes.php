<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('form-registration', 'Home::formRegistration');
$routes->group('form-umkm', function ($routes) {
  $routes->post('submit', 'FormUMKMController::submit');
});

$routes->group('auth', function ($routes) {
  $routes->get('/', 'AuthenticationController::index');
  $routes->post('login', 'AuthenticationController::login');
});

$routes->group('dashboard', function ($routes) {
  $routes->get('/', 'DashboardController::index');
});

$routes->group('form-data-umkm', function ($routes) {
  $routes->get('/', 'FormUMKMController::index');
});
