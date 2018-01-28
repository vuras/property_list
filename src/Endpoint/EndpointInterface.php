<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-21
 * Time: 15:28
 */

namespace Drupal\property_list\Endpoint;

use Drupal\property_list\DTO\EntityBase;

interface EndpointInterface
{
  /**
   * Gets data from a specific endpoint
   *
   * @param array $queryParameters
   * @return EntityBase
   */
  public function get(array $queryParameters = []) : EntityBase;
}
