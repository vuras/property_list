<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:46
 */

namespace Drupal\Tests\property_list\Unit\Endpoint;

use Drupal\property_list\Client\ApiClient;
use Drupal\property_list\DTO\EntityBase;
use Drupal\property_list\DTO\Property;
use Drupal\property_list\Endpoint\PropertiesEndpoint;
use Drupal\serialization\Encoder\JsonEncoder;
use Drupal\Tests\UnitTestCase;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class PropertiesEndpointTest
 * @package Drupal\Tests\property_list\Unit\Endpoint
 * @group property_list
 */
class PropertiesEndpointTest extends UnitTestCase
{
  /**
   * @var PropertiesEndpoint
   */
  private $endpoint;

  /**
   * Constructor
   */
  public function setUp()
  {
    $serializer = new Serializer([ new GetSetMethodNormalizer() ], [ new JsonEncoder() ]);
    $client = new ApiClient(new Client(), $serializer);
    $this->endpoint = new PropertiesEndpoint($client, $serializer);
  }

  public function testGet()
  {
    $response = $this->endpoint->get();
    $this->assertInstanceOf(EntityBase::class, $response);
    $this->assertTrue(!empty($response->results));
    foreach ($response->results as $record){
      $this->assertInstanceOf(Property::class, $record);
    }
  }
}
