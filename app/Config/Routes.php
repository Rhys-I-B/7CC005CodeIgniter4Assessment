<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


use App\Controllers\News;
use App\Controllers\Games;
use App\Controllers\Pages;
use App\Controllers\React;

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->get('news/json', [News::class, 'json']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('react', [React::class, 'index']);

$routes->get('games', [Games::class, 'index']);
$routes->get('games/new', [Games::class, 'new']);
$routes->get('games/json', [Games::class, 'json']);
$routes->post('games', [Games::class, 'create']);

// MUST BE LAST
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);