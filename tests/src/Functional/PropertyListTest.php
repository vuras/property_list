<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-21
 * Time: 17:24
 */

namespace Drupal\Tests\property_list\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Class PropertyListTest
 * @package Drupal\Tests\property_list\Functional
 * @group property_list
 */
class PropertyListTest extends BrowserTestBase
{
  /**
   * @var array
   */
  protected static $modules = ['node', 'property_list'];

  public function testPropertyList()
  {
    $this->drupalGet('properties/list');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('Property List');
    $this->assertSession()->pageTextNotContains('We could not find any available properties for these dates');
    $this->assertSession()->linkExists('Last »');
  }

}
