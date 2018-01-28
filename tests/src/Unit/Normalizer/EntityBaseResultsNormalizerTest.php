<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-28
 * Time: 20:43
 */

namespace Drupal\Tests\property_list\Unit\Normalizer;


use Drupal\property_list\DTO\EntityBase;
use Drupal\property_list\DTO\Property;
use Drupal\property_list\Normalizer\EntityBaseResultsNormalizer;
use Drupal\Tests\UnitTestCase;

/**
 * Class EntityBaseResultsNormalizerTest
 * @package Drupal\Tests\property_list\Unit\Normalizer
 * @group property_list
 */
class EntityBaseResultsNormalizerTest extends UnitTestCase
{
  /**
   * @var EntityBaseResultsNormalizer
   */
  private $normalizer;

  /**
   * Constructor
   */
  public function setUp()
  {
    $this->normalizer = new EntityBaseResultsNormalizer();
  }

  public function testDenormalize()
  {
    $denormalized = $this->normalizer->denormalize($this->getEntityBaseMockWithResults(), Property::class);
    foreach ($denormalized->results as $record){
      $this->assertInstanceOf(Property::class, $record);
    }
  }

  public function testSupportsDenormalization()
  {
    $this->assertFalse($this->normalizer->supportsDenormalization([], EntityBase::class));
    $this->assertTrue($this->normalizer->supportsDenormalization(new EntityBase(), EntityBase::class));
  }

  private function getEntityBaseMockWithResults()
  {
    $entityBase = new EntityBase();
    $entityBase->results = [
      [
        "picture" => "//sdc.novasol.com/pic/scr/scr137_associated_04.jpg",
        "headline" => "Piran",
        "beds" => 2,
        "propertyTypeName" => "Holiday apartment",
        "countryName" => "Slovenia",
        "pictures" => null,
        "prices" => [
          "totalPrice" => 450
        ],
        "features" => [],
        "propertySize" => 60,
        "distanceShop" => 200,
        "distanceWater" => 400,
        "propertyType" => "APARTMENT",
        "bathrooms" => 1,
        "bedrooms" => 2,
        "score" => 1,
        "lat" => 45.5274,
        "lng" => 13.5688,
        "pets" => 0,
        "rating" => 3,
        "adults" => 5,
        "children" => 0,
        "id" => "SCR137",
        "country" => 705
      ]
    ];

    return $entityBase;
  }
}
