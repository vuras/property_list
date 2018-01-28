<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 10:55
 */

namespace Drupal\property_list\Client;

use Drupal\property_list\DTO\EntityBase;

class ResponseValidator
{
  /**
   * @param $response
   * @return bool
   */
  static public function validate(EntityBase $response) : bool
  {
    return is_null($response->errorMessages);
  }
}
