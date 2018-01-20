<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 02:00
 */

namespace Drupal\property_list\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\property_list\Endpoint\PropertiesEndpoint;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PropertyListController extends ControllerBase
{
  /**
   * @var PropertiesEndpoint
   */
  private $endpoint;

  /**
   * PropertyListController constructor.
   * @param PropertiesEndpoint $endpoint
   */
  public function __construct(PropertiesEndpoint $endpoint)
  {
    $this->endpoint = $endpoint;
  }

  /**
   * @param ContainerInterface $container
   * @return static
   */
  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('property_list.properties_endpoint')
    );
  }

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    $response = $this->endpoint->get();
    return array(
      '#theme' => 'property_list',
      '#properties' => $response['results'],
    );
  }
}
