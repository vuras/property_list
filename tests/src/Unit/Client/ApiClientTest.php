<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:20
 */

namespace Drupal\Tests\property_list\Unit\Client;

use Drupal\property_list\Client\ApiClient;
use Drupal\property_list\Client\ResponseValidator;
use Drupal\property_list\Endpoint\PropertiesEndpoint;
use Drupal\Tests\UnitTestCase;
use GuzzleHttp\Client;

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
    $validator = new ResponseValidator();
    $this->apiClient = new ApiClient($client, $validator);
  }

  public function testGet()
  {
    $this->assertTrue(is_array($this->apiClient->get(PropertiesEndpoint::ENDPOINT)));
    $this->assertArrayHasKey('results', $this->apiClient->get(PropertiesEndpoint::ENDPOINT));
  }
}
