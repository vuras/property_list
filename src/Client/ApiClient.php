<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 10:28
 */

namespace Drupal\property_list\Client;

use GuzzleHttp\Client;

class ApiClient
{
  /**
   * @var Client
   */
  private $client;

  /**
   * @var ResponseValidator
   */
  private $validator;

  /**
   * ApiClient constructor.
   * @param Client $client
   * @param ResponseValidator $validator
   */
  public function __construct(Client $client, ResponseValidator $validator)
  {
    $this->client = $client;
    $this->validator = $validator;
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

    if($this->validator->validate($response)){
      return $response;
    } else {
      return [];
    }
  }
}
