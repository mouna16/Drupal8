<?php
/**
 * Created by PhpStorm.
 * User: mounazouari
 * Date: 13/03/2017
 * Time: 12:42
 */

namespace Drupal\mymodule\Routing;
use Symfony\Component\Routing\Route;

class CustomRoutes {
/**
 * Returnan array of Symfony route objects
 */
public function routes(){
  $routes =[];

  $routes['mymodule.pagemouna'] = new Route(
  // Path definition
    'pagemouna',
    // Route defaults
    [
      '_controller' => '\Drupal\mymodule\Controller\MyPageController::testmouna',
      '_titre' => 'My custom page',
    ],
    // Route requirements
    [
      '_permission' => 'access content',
    ]
  );
  return $routes;

 }
}

?>