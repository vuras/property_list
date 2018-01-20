<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 02:00
 */

namespace Drupal\property_list\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\property_list\Client\ApiClient;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PropertyListController extends ControllerBase
{
  /**
   * @var ApiClient
   */
  protected $apiClient;

  /**
   * PropertyListController constructor.
   * @param ApiClient $apiClient
   */
  public function __construct(ApiClient $apiClient)
  {
    $this->apiClient = $apiClient;
  }

  /**
   * @param ContainerInterface $container
   * @return static
   */
  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('property_list.api_client')
    );
  }

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    $properties = $this->apiClient->get();
    return array(
      '#theme' => 'property_list',
      '#properties' => $properties,
    );
  }
}
