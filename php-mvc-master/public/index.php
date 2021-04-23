<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';
session_start();
/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes

$router->add('/public', ['controller' => 'Home', 'action' => 'index']);

$router->add('/public/admin', ['controller' => 'Home', 'action' => 'admin']);

$router->add('/public/login', ['controller' => 'Auth', 'action' => 'login']);

$router->add('/public/register', ['controller' => 'Auth', 'action' => 'register']);

$router->add('/public/registeruser', ['controller' => 'Auth', 'action' => 'registeruser']);



$router->add('/users', ['controller' => 'Home', 'action' => 'getAll']);
$router->add('/public/contact', ['controller' => 'Home', 'action' => 'contact']);
$router->add('/public/collection', ['controller' => 'Home', 'action' => 'collection']);
$router->add('/public/racing-boots', ['controller' => 'Home', 'action' => 'racing_boots']);
$router->add('/public/shoes', ['controller' => 'Home', 'action' => 'shoes']);
// $router->add('/admin/index.php', ['controller' => 'Home', 'action' => 'admin/index.php']);
$router->dispatch($_SERVER['REQUEST_URI']);
