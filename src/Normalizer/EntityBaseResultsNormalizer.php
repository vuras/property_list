<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-28
 * Time: 20:03
 */

namespace Drupal\property_list\Normalizer;

use Drupal\property_list\DTO\EntityBase;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class EntityBaseResultsNormalizer extends GetSetMethodNormalizer
{
  /**
   * @inheritdoc
   * @var $data EntityBase
   */
  public function denormalize($data, $class, $format = null, array $context = array())
  {
    $denormalized = [];
    foreach($data->results as $record) {
      if(is_array($record)) {
        $denormalized[] = parent::denormalize($record, $class, $format, $context);
      }
    }
    $data->results = $denormalized;

    return $data;
  }

  /**
   * @inheritdoc
   */
  public function supportsDenormalization($data, $type, $format = null)
  {
    return $data instanceof EntityBase;
  }

}
