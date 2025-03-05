<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\Ajax;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);
$routes->get('ajax/get/(:segment)', [News::class, 'Ajax::get/$1']);
$routes->get('news/(:segment)', [News::class, 'show']);
$routes->get('(:segment)', [Pages::class, 'view']);


/**
 * $routes->get('ajax/get/(:segment)', [News::class, 'Ajax::get/$1']);
 */