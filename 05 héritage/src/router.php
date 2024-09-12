<?php
use Controllers\HomeController;
use Services\Routing;

$methode = $_SERVER['REQUEST_METHOD'];
$route = Routing::routeComposee();

switch ($route[0]) {
  case '':
    HomeController::index();
    break;
    
  default:
    HomeController::notFound();
    break;
}