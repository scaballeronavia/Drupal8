<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\test\Controller
 */
class TestController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */

  public function content() {
    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }

}
