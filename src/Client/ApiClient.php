<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 10:28
 */

namespace Drupal\property_list\Client;

use GuzzleHttp\Client;

class ApiClient implements ApiClientInterface
{
  /**
   * @var Client
   */
  private $client;

  /**
   * ApiClient constructor.
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  /**
   * GET request to API
   *
   * @param string $uri
   * @param array $queryParameters
   * @return array
   */
  public function get(string $uri, array $queryParameters = []) : array
  {
    $response = json_decode(
      $this->client->get(
        $uri, [
          'query' => $queryParameters,
          'verify' => false
        ])->getBody()->getContents(),
      true
    );

    if(ResponseValidator::validate($response)){
      return $response;
    } else {
      return [];
    }
  }
}
