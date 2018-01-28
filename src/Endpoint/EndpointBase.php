<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-28
 * Time: 14:23
 */

namespace Drupal\property_list\Endpoint;

use Drupal\property_list\Client\ApiClientInterface;
use Drupal\property_list\DTO\EntityBase;
use Symfony\Component\Serializer\SerializerInterface;

class EndpointBase
{
  /**
   * @var ApiClientInterface
   */
  protected $apiClient;

  /**
   * @var SerializerInterface
   */
  protected $serializer;

  /**
   * PropertiesEndpoint constructor.
   * @param ApiClientInterface $apiClient
   * @param SerializerInterface $serializer
   */
  public function __construct(ApiClientInterface $apiClient, SerializerInterface $serializer)
  {
    $this->apiClient = $apiClient;
    $this->serializer = $serializer;
  }
}
