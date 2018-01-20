<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 10:55
 */

namespace Drupal\property_list\Client;


class ResponseValidator
{
  /**
   * @param $response
   * @return bool
   */
  public function validate($response) : bool
  {
    return empty($response) || is_null($response) || !is_null($response['errorMessages']) ? false : true;
  }
}
