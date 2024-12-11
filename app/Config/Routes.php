<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/books','Book::index');
$routes->get('/books/create','Book::create');
$routes->post('/books/create','Book::create');
?>
