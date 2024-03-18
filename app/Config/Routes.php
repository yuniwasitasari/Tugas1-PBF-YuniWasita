<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

use App\Controllers\News; //menambahkan ini
use App\Controllers\Pages;

$routes->get('news', [News::class, 'index']); //menambahkan baris ini 

$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->get('news', [News::class, 'create']); // Add this line

$routes->get('news/(:segment)', [News::class, 'show']); //menambahkan baris ini


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);