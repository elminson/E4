<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

// Require the controller class
require '../App/Controllers/Posts.php';

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);
