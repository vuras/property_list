<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:30
 */

namespace Drupal\property_list\Endpoint;

use Drupal\property_list\DTO\EntityBase;
use Drupal\property_list\DTO\Property;

class PropertiesEndpoint extends EndpointBase implements EndpointInterface
{
  /**
   * Properties endpoint
   */
  const ENDPOINT_URL = 'https://raw.githubusercontent.com/adaptdk/backend-novasol-challenge/master/response.json';

  /**
   * @param array $queryParameters
   * @return EntityBase
   */
  public function get(array $queryParameters = []) : EntityBase
  {
    return $this->process(
      $this->apiClient->get(self::ENDPOINT_URL, $queryParameters),
      Property::class
    );
  }
}
