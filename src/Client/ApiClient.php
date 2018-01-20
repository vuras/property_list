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
   * API response URI
   */
  const API_URI = 'https://raw.githubusercontent.com/adaptdk/backend-novasol-challenge/master/response.json';

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
   * @return array
   */
  public function get()
  {
    $response = json_decode(
      $this->client->get(
        self::API_URI, [
          'verify' => false
        ])->getBody()->getContents(),
      true
    );

    if($this->validator->validate($response)){
      return $response['results'];
    } else {
      return [];
    }
  }
}
