<?php
/**
 * Created by PhpStorm.
 * User: mounazouari
 * Date: 13/03/2017
 * Time: 14:23
 * Altering existing routes
 */
namespace Drupal\mymodule\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends  RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection)
  {
    // TODO: Implement alterRoutes() method.
    // Change path of mymodule.mypage to use a hyphen
    if ($route = $collection -> get('mymodule.mypage')){
      $route->setPath('/my-page');
    }
  }
}


?>