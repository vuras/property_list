<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-21
 * Time: 15:29
 */

namespace Drupal\property_list\Client;


interface ApiClientInterface
{
  /**
   * GET request to API
   *
   * @param string $uri
   * @param array $queryParameters
   * @return array
   */
  public function get(string $uri, array $queryParameters = []) : array;
}
