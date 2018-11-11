<?php

/**
 * -------------------------------------------------------
 * Custom routes for the application
 * -------------------------------------------------------
 *
 * This page has user specif routes
 */

$router->add('auth/register', ["namespace" => "Auth", "controller" => "Auth", "action" => "register"]);

/**
 * Routes for components and test
 */
$router->add('home/test', ['controller' => 'Home', 'action' => 'test']);
$router->add('component/{component}', ['controller' => 'Component', 'action' => 'index']);