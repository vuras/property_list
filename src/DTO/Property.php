<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-27
 * Time: 22:10
 */

namespace Drupal\property_list\DTO;

/**
 * Class Property
 * @package Drupal\property_list\DTO
 */
class Property
{
  /**
   * @var string
   */
  public $id;

  /**
   * @var string
   */
  public $headline;

  /**
   * @var string
   */
  public $picture;

  /**
   * @var string
   */
  public $propertyType;

  /**
   * @var string
   */
  public $propertyTypeName;

  /**
   * @var int
   */
  public $propertySize;

  /**
   * @var string
   */
  public $countryName;

  /**
   * @var mixed
   */
  public $pictures;

  /**
   * array
   */
  public $prices;

  /**
   * @var int
   */
  public $beds;

  /**
   * @var int
   */
  public $bedrooms;

  /**
   * @var int
   */
  public $bathrooms;

  /**
   * @var int
   */
  public $distanceShop;

  /**
   * @var int
   */
  public $distanceWater;

  /**
   * @var int
   */
  public $score;

  /**
   * @var int
   */
  public $rating;

  /**
   * @var float
   */
  public $lat;

  /**
   * @var float
   */
  public $lng;

  /**
   * @var int
   */
  public $pets;

  /**
   * @var int
   */
  public $adults;

  /**
   * @var int
   */
  public $children;

  /**
   * @var int
   */
  public $country;

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id)
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getHeadline(): string
  {
    return $this->headline;
  }

  /**
   * @param string $headline
   */
  public function setHeadline(string $headline)
  {
    $this->headline = $headline;
  }

  /**
   * @return string
   */
  public function getPicture(): string
  {
    return $this->picture;
  }

  /**
   * @param string $picture
   */
  public function setPicture(string $picture)
  {
    $this->picture = $picture;
  }

  /**
   * @return string
   */
  public function getPropertyType(): string
  {
    return $this->propertyType;
  }

  /**
   * @param string $propertyType
   */
  public function setPropertyType(string $propertyType)
  {
    $this->propertyType = $propertyType;
  }

  /**
   * @return string
   */
  public function getPropertyTypeName(): string
  {
    return $this->propertyTypeName;
  }

  /**
   * @param string $propertyTypeName
   */
  public function setPropertyTypeName(string $propertyTypeName)
  {
    $this->propertyTypeName = $propertyTypeName;
  }

  /**
   * @return int
   */
  public function getPropertySize(): int
  {
    return $this->propertySize;
  }

  /**
   * @param int $propertySize
   */
  public function setPropertySize(int $propertySize)
  {
    $this->propertySize = $propertySize;
  }

  /**
   * @return string
   */
  public function getCountryName(): string
  {
    return $this->countryName;
  }

  /**
   * @param string $countryName
   */
  public function setCountryName(string $countryName)
  {
    $this->countryName = $countryName;
  }

  /**
   * @return mixed
   */
  public function getPictures()
  {
    return $this->pictures;
  }

  /**
   * @param mixed $pictures
   */
  public function setPictures($pictures)
  {
    $this->pictures = $pictures;
  }

  /**
   * @return mixed
   */
  public function getPrices()
  {
    return $this->prices;
  }

  /**
   * @param mixed $prices
   */
  public function setPrices($prices)
  {
    $this->prices = $prices;
  }

  /**
   * @return int
   */
  public function getBeds(): int
  {
    return $this->beds;
  }

  /**
   * @param int $beds
   */
  public function setBeds(int $beds)
  {
    $this->beds = $beds;
  }

  /**
   * @return int
   */
  public function getBedrooms(): int
  {
    return $this->bedrooms;
  }

  /**
   * @param int $bedrooms
   */
  public function setBedrooms(int $bedrooms)
  {
    $this->bedrooms = $bedrooms;
  }

  /**
   * @return int
   */
  public function getBathrooms(): int
  {
    return $this->bathrooms;
  }

  /**
   * @param int $bathrooms
   */
  public function setBathrooms(int $bathrooms)
  {
    $this->bathrooms = $bathrooms;
  }

  /**
   * @return int
   */
  public function getDistanceShop(): int
  {
    return $this->distanceShop;
  }

  /**
   * @param int $distanceShop
   */
  public function setDistanceShop(int $distanceShop)
  {
    $this->distanceShop = $distanceShop;
  }

  /**
   * @return int
   */
  public function getDistanceWater(): int
  {
    return $this->distanceWater;
  }

  /**
   * @param int $distanceWater
   */
  public function setDistanceWater(int $distanceWater)
  {
    $this->distanceWater = $distanceWater;
  }

  /**
   * @return int
   */
  public function getScore(): int
  {
    return $this->score;
  }

  /**
   * @param int $score
   */
  public function setScore(int $score)
  {
    $this->score = $score;
  }

  /**
   * @return int
   */
  public function getRating(): int
  {
    return $this->rating;
  }

  /**
   * @param int $rating
   */
  public function setRating(int $rating)
  {
    $this->rating = $rating;
  }

  /**
   * @return float
   */
  public function getLat(): float
  {
    return $this->lat;
  }

  /**
   * @param float $lat
   */
  public function setLat(float $lat)
  {
    $this->lat = $lat;
  }

  /**
   * @return float
   */
  public function getLng(): float
  {
    return $this->lng;
  }

  /**
   * @param float $lng
   */
  public function setLng(float $lng)
  {
    $this->lng = $lng;
  }

  /**
   * @return int
   */
  public function getPets(): int
  {
    return $this->pets;
  }

  /**
   * @param int $pets
   */
  public function setPets(int $pets)
  {
    $this->pets = $pets;
  }

  /**
   * @return int
   */
  public function getAdults(): int
  {
    return $this->adults;
  }

  /**
   * @param int $adults
   */
  public function setAdults(int $adults)
  {
    $this->adults = $adults;
  }

  /**
   * @return int
   */
  public function getChildren(): int
  {
    return $this->children;
  }

  /**
   * @param int $children
   */
  public function setChildren(int $children)
  {
    $this->children = $children;
  }

  /**
   * @return int
   */
  public function getCountry(): int
  {
    return $this->country;
  }

  /**
   * @param int $country
   */
  public function setCountry(int $country)
  {
    $this->country = $country;
  }

}
