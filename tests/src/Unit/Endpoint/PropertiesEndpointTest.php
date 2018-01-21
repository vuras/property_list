<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 15:46
 */

namespace Drupal\Tests\property_list\Unit\Endpoint;

use Drupal\property_list\Client\ApiClient;
use Drupal\property_list\Client\ResponseValidator;
use Drupal\property_list\Endpoint\PropertiesEndpoint;
use Drupal\Tests\UnitTestCase;
use GuzzleHttp\Client;

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
    $client = new ApiClient(new Client());
    $this->endpoint = new PropertiesEndpoint($client);
  }

  public function testGet()
  {
    $this->assertTrue(is_array($this->endpoint->get()));
    $this->assertArrayHasKey('results', $this->endpoint->get());
  }
}
