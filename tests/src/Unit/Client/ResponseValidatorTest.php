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
  /**
   * @var ResponseValidator
   */
  private $validator;

  /**
   * Constructor
   */
  public function setUp()
  {
    $this->validator = new ResponseValidator();
  }

  public function testValidate()
  {
    $this->assertFalse($this->validator->validate(null));
    $this->assertFalse($this->validator->validate([]));
    $this->assertFalse($this->validator->validate(['errorMessages' => [
      'test error'
    ]]));
    $this->assertTrue($this->validator->validate([
      'errorMessages' => null,
      'results' => []
    ]));
  }
}
