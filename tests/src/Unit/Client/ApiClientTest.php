<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:20
 */

namespace Drupal\Tests\property_list\Unit\Client;

use Drupal\property_list\Client\ApiClient;
use Drupal\property_list\DTO\EntityBase;
use Drupal\property_list\Endpoint\PropertiesEndpoint;
use Drupal\property_list\Normalizer\EntityBaseResultsNormalizer;
use Drupal\serialization\Encoder\JsonEncoder;
use Drupal\Tests\UnitTestCase;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ApiClientTest
 * @package Drupal\Tests\property_list\Unit\Client
 * @group property_list
 */
class ApiClientTest extends UnitTestCase
{
  /**
   * @var ApiClient
   */
  private $apiClient;

  /**
   * Constructor
   */
  public function setUp()
  {
    $client = new Client();
    $serializer = new Serializer([ new GetSetMethodNormalizer(), new EntityBaseResultsNormalizer() ], [ new JsonEncoder() ]);
    $this->apiClient = new ApiClient($client, $serializer);
  }

  public function testGet()
  {
    $response = $this->apiClient->get(PropertiesEndpoint::ENDPOINT_URL);
    $this->assertInstanceOf(EntityBase::class, $response);
    $this->assertTrue(!empty($response->results));
  }
}
