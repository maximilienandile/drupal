<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    $element = array(
      '#markup' => '<h1> yoyoyo</h1> <script',
    );
    return $element;
  }
}
