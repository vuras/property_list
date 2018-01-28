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

  /**
   * @param EntityBase $entityBase
   * @param string $className
   * @return EntityBase
   */
  protected function process(EntityBase $entityBase, string $className) : EntityBase
  {
    $data = [];
    foreach($entityBase->results as $record) {
      $data[] = $this->serializer->denormalize($record, $className);
    }
    $entityBase->results = $data;

    return $entityBase;
  }
}
