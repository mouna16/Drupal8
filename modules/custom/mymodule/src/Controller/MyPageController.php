<?php


/**
@file
Contains \Drupal\mymodule\Controller\MyPageController.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyPageController extends ControllerBase {
  /**
   * Return markup for our custom page (classique).
   */
  public function customPage() {
    return array(
      '#markup' => t('Welcom to my custom page !'),
    );
  }

  /**
   * Return markup for our custom page with parameter (URL with parameter)
   */
  public function cats($name) {
    return array(
      '#markup' => t('My cats name is: @name', array('@name' => $name)),
    );
  }

  /**
   * Return
   */
  public function demo($name) {
    return array(
      '#markup' => t('My cats name is: @name', array('@name' => $name)),
    );
  }

  /**
   * Return markup for our test Mouna.
   */
  public function testmouna() {
    return array(
      '#markup' => t('Hello Mouna ZOUARI'),
    );
  }


  public function world() {
    return array(
      '#theme' => 'mymodule',
      '#texte' => $this->t('Hello world !'),
    );

  }

}
?>