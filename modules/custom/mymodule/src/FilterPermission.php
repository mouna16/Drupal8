<?php
/**
 * Created by PhpStorm.
 * User: mounazouari
 * Date: 14/03/2017
 * Time: 10:55
 * Permission dynamique
 */

namespace Drupal\mymodule;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class DynamicPermissions{
  use StringTranslationTrait;

  public function permissions()
  {
    $perm = [];
    $count = 1;
    $perm = [
       "Ajouter mymodule"=> [
         'title' => $this->t('Sample dynamic permission @number', ['@number' => $count]),
         'description' => $this->t('This is a sample permission generated dynamically.'),
       ],

    ];

    return $perm;
  }
}
