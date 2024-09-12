<?php
namespace Services;

class Routing
{
  public static function routeComposee()
  {
    $route = $_SERVER['REDIRECT_URL'];

    $route = ltrim($route, HOME_URL);
    $route = rtrim($route, '/');
    $route = explode('/', $route);

    for($i=sizeof($route); $i < 4 ; $i ++) {
      $route[$i] = null;
    }

    return $route;
  }

  public static function getMethode() {
    $methode = $_SERVER['REQUEST_METHOD'];

    if($methode === "POST" && isset($_POST['_method']) && !empty($_POST['_method'])){
      switch ($_POST['_method']) {
        case 'DELETE':
          $methode = "DELETE";
          break;

        default:
          //
          break;
      }
    }

    return $methode;
  }
}