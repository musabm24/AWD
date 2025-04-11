<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\Ajax;
use App\Controllers\Cars;
use App\Controllers\MotorMarket;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'MotorMarket::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);
$routes->get('ajax/get/(:segment)', [News::class, 'Ajax::get/$1']);
$routes->get('news/audi', 'News::audi');
$routes->get('news/bmw', 'News::bmw');
$routes->get('/motormarket/cars', 'Cars::index');
$routes->get('/cars/filter', 'Cars::filter');
$routes->match(['get', 'post'], '/motormarket/login', 'Cars::login');
$routes->match(['get', 'post'], '/motormarket/create', 'Cars::create');
$routes->get('motormarket/cars/view/(:num)', 'Cars::view/$1');
//$routes->get('/motormarket/create', 'Cars::create');
//$routes->post('/cars/create', 'Cars::create');
$routes->get('/motormarket/home', 'Cars::home');
$routes->get('(:segment)', [Pages::class, 'view']);

/**
 * $routes->get('ajax/get/(:segment)', [News::class, 'Ajax::get/$1']);
 */