<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 10:28
 */

namespace Drupal\property_list\Client;

use Drupal\property_list\DTO\EntityBase;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\SerializerInterface;

class ApiClient implements ApiClientInterface
{
  /**
   * @var Client
   */
  private $client;

  /**
   * @var SerializerInterface
   */
  private $serializer;

  /**
   * ApiClient constructor.
   * @param Client $client
   * @param SerializerInterface $serializer
   */
  public function __construct(Client $client, SerializerInterface $serializer)
  {
    $this->client = $client;
    $this->serializer = $serializer;
  }

  /**
   * GET request to API
   *
   * @param string $uri
   * @param array $queryParameters
   * @return EntityBase
   */
  public function get(string $uri, array $queryParameters = []) : EntityBase
  {
    try {
      $request = $this->client->get(
        $uri, [
        'query'  => $queryParameters,
        'verify' => false
      ]);
    } catch (\Exception $exception){
      return new EntityBase();
    }

    if($request->getStatusCode() !== 200){
      return new EntityBase();
    }

    $response = $this->serializer->deserialize(
      $request->getBody()->getContents(),
      EntityBase::class,
      'json'
    );

    if(ResponseValidator::validate($response)){
      return $response;
    } else {
      return new EntityBase();
    }
  }
}
