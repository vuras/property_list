<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 02:00
 */

namespace Drupal\property_list\Controller;

use Drupal\Core\Controller\ControllerBase;

class PropertyListController extends ControllerBase
{
  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Property list'),
    );
  }
}
