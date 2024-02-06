<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', static function ($routes) {
    $routes->group('', [], static function ($routes) {
        $routes->get('home', 'Admin::index', ['as' => 'admin.home']);
    });
    $routes->group('', [], static function ($routes) {
        $routes->get('login', 'Auth::index', ['as' => 'auth.login']);
    });
});
