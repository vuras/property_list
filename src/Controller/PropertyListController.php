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
use Drupal\property_list\Form\FromToForm;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

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
  public function content(Request $request)
  {
    $form = \Drupal::formBuilder()->getForm(FromToForm::class);

    $from = $request->query->get('from', date('Ymd'));
    $to = $request->query->get('to', date('Ymd', strtotime('last day of december this year')));

    $page = pager_find_page();
    $propertiesPerPage = $this->config('property_list.settings')->get('properties_per_page');
    $offset = $propertiesPerPage * $page;
    $response = $this->endpoint->get([
      'from'    => $from,
      'to'      => $to,
      'offset'  => $offset
    ]);

    pager_default_initialize($response['total'], $propertiesPerPage);

    return array(
      'property_list' => [
        '#theme'      => 'property_list',
        '#properties' => $response['results'],
        '#form'       => $form,
        '#empty'      => 'We could not find any available properties for these dates'
      ],
      'pager'       => [
        '#type'       => 'pager',
        '#parameters' => [
          'from'      => $from,
          'to'        => $to
        ]
      ]
    );
  }
}
