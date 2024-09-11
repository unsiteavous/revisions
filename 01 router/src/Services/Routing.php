<?php
namespace Services;

class Routing
{
  public static function routeComposee(): array
  {
    $route = $_SERVER['REDIRECT_URL'];
    $routeComposee = ltrim($route, HOME_URL);
    $routeComposee = rtrim($routeComposee, '/');
    $routeComposee = explode('/', $routeComposee);

    for ($i=sizeof($routeComposee); $i < 4; $i++) { 
        $routeComposee[$i] = null;
    }
    return $routeComposee;
  }
}