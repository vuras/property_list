<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 14:30
 */

namespace Drupal\Tests\property_list\Unit\Client;

use Drupal\property_list\Client\ResponseValidator;
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
    $this->assertFalse(ResponseValidator::validate(null));
    $this->assertFalse(ResponseValidator::validate([]));
    $this->assertFalse(ResponseValidator::validate(['errorMessages' => [
      'test error'
    ]]));
    $this->assertTrue(ResponseValidator::validate([
      'errorMessages' => null,
      'results' => []
    ]));
  }
}
