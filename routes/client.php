<?php

use Hung\OopMvc\Controllers\Client\AuthController;
use Hung\OopMvc\Controllers\Client\HomeController;

$router->get( '/',              HomeController::class . '@index');


$router->get( '/client/car/{id}/detail',              HomeController::class . '@detail');




$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');
