<?php
use Controllers\HomeController;
use Services\Routing;

$methode = Routing::getMethode();
$route = Routing::routeComposee();

var_dump($route);

switch ($route[0]) {
  case '':
    HomeController::index();
    break;
  case 'contact':
    HomeController::contact();
    break;
  case 'admin':
    switch ($route[1]){
      case 'users':
        switch (preg_match('%[0-9]+%', $route[2])) {
          case true:
            switch ($route[3]){
              case 'edit':
                echo "edit";                                                  
                break;
            }
            break;
          case false:
            echo "erreur";
            break;
        }
        break;
    }
    break;
  default:
    HomeController::notFound();
    break;
}