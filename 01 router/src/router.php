<?php
use Controllers\HomeController;
use Services\Routing;

$methode = $_SERVER['REQUEST_METHOD'];
$route = Routing::routeComposee();

var_dump($route);

switch ($route[0]) {
  case '':
    HomeController::index();
    break;
  case 'contact':
    HomeController::contact();
    break;
  default:
    HomeController::notFound();
    break;
}