<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-21
 * Time: 15:28
 */

namespace Drupal\property_list\Endpoint;


interface EndpointInterface
{
  /**
   * Gets data from a specific endpoint
   *
   * @param array $queryParameters
   * @return array
   */
  public function get(array $queryParameters = []) : array;
}
