<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 14:30
 */

namespace Drupal\Tests\property_list\Unit\Client;

use Drupal\property_list\Client\ResponseValidator;
use Drupal\property_list\DTO\EntityBase;
use Drupal\Tests\UnitTestCase;

/**
 * Class ResponseValidatorTest
 * @package Drupal\Tests\property_list\Unit\Client
 * @group property_list
 */
class ResponseValidatorTest extends UnitTestCase
{
  public function testValidate()
  {
    $entity = new EntityBase();
    $entity->errorMessages = [
      'test error' => 'message'
    ];
    $this->assertFalse(ResponseValidator::validate($entity));
    $this->assertTrue(ResponseValidator::validate(new EntityBase()));
  }
}
