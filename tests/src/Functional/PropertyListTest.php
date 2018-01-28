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
  protected static $modules = ['node', 'serialization', 'property_list'];

  public function testPropertyList()
  {
    $this->drupalGet('properties/list');

    // Page rendering testing
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('Property List');
    $this->assertSession()->pageTextNotContains('We could not find any available properties for these dates');
    $this->assertSession()->linkExists('Last »');

    // Pagination testing
    $this->clickLink('Last »');
    $this->assertSession()->linkExists('« First');

    // Form testings
    $this->getSession()->getPage()->fillField('from', '2018-01-01');
    $this->getSession()->getPage()->fillField('to', '2018-01-10');
    $this->getSession()->getPage()->pressButton('Search');
    $this->assertSession()->pageTextNotContains('We could not find any available properties for these dates');
  }

}
