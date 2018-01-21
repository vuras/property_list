<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:30
 */

namespace Drupal\property_list\Endpoint;

use Drupal\property_list\Client\ApiClient;

class PropertiesEndpoint implements EndpointInterface
{
  /**
   * Properties endpoint
   */
  const ENDPOINT_URL = 'https://raw.githubusercontent.com/adaptdk/backend-novasol-challenge/master/response.json';

  /**
   * @var ApiClient
   */
  private $apiClient;

  /**
   * PropertiesEndpoint constructor.
   * @param ApiClient $apiClient
   */
  public function __construct(ApiClient $apiClient)
  {
    $this->apiClient = $apiClient;
  }

  /**
   * @param array $queryParameters
   * @return array
   */
  public function get(array $queryParameters = []) : array
  {
    return $this->apiClient->get(self::ENDPOINT_URL, $queryParameters);
  }
}
