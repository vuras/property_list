<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-27
 * Time: 22:41
 */

namespace Drupal\property_list\DTO;

/**
 * Class EntityBase
 * @package Drupal\property_list\DTO
 */
class EntityBase
{
  /**
   * @var float
   */
  public $requestTimeMs;

  /**
   * @var string
   */
  public $currency;

  /**
   * @var string
   */
  public $language;

  /**
   * @var int
   */
  public $total;

  /**
   * @var int
   */
  public $count;

  /**
   * @var array
   */
  public $results;

  /**
   * @var array|null
   */
  public $errorMessages;

  /**
   * @var int
   */
  public $offset;

  /**
   * @var string
   */
  public $serverIp;

  /**
   * @var string
   */
  public $theTime;

  /**
   * @return float
   */
  public function getRequestTimeMs(): float
  {
    return $this->requestTimeMs;
  }

  /**
   * @param float $requestTimeMs
   */
  public function setRequestTimeMs(float $requestTimeMs)
  {
    $this->requestTimeMs = $requestTimeMs;
  }

  /**
   * @return string
   */
  public function getCurrency(): string
  {
    return $this->currency;
  }

  /**
   * @param string $currency
   */
  public function setCurrency(string $currency)
  {
    $this->currency = $currency;
  }

  /**
   * @return string
   */
  public function getLanguage(): string
  {
    return $this->language;
  }

  /**
   * @param string $language
   */
  public function setLanguage(string $language)
  {
    $this->language = $language;
  }

  /**
   * @return int
   */
  public function getTotal(): int
  {
    return $this->total;
  }

  /**
   * @param int $total
   */
  public function setTotal(int $total)
  {
    $this->total = $total;
  }

  /**
   * @return int
   */
  public function getCount(): int
  {
    return $this->count;
  }

  /**
   * @param int $count
   */
  public function setCount(int $count)
  {
    $this->count = $count;
  }

  /**
   * @return array
   */
  public function getResults(): array
  {
    return $this->results;
  }

  /**
   * @param array $results
   */
  public function setResults(array $results)
  {
    $this->results = $results;
  }

  /**
   * @return array|null
   */
  public function getErrorMessages()
  {
    return $this->errorMessages;
  }

  /**
   * @param array|null $errorMessages
   */
  public function setErrorMessages($errorMessages)
  {
    $this->errorMessages = $errorMessages;
  }

  /**
   * @return int
   */
  public function getOffset(): int
  {
    return $this->offset;
  }

  /**
   * @param int $offset
   */
  public function setOffset(int $offset)
  {
    $this->offset = $offset;
  }

  /**
   * @return string
   */
  public function getServerIp(): string
  {
    return $this->serverIp;
  }

  /**
   * @param string $serverIp
   */
  public function setServerIp(string $serverIp)
  {
    $this->serverIp = $serverIp;
  }

  /**
   * @return string
   */
  public function getTheTime(): string
  {
    return $this->theTime;
  }

  /**
   * @param string $theTime
   */
  public function setTheTime(string $theTime)
  {
    $this->theTime = $theTime;
  }
}
