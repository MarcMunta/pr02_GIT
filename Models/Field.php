<?php

namespace App\Models;

/**
 * Represents play field.
 */
class Field
{
  /**
   * size in m2
   *
   * @var int
   */
  private $size;

  /**
   * Get size in m2
   *
   * @return  int
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set size in m2
   *
   * @param  int  $size  size in m2
   *
   * @return  self
   */
  public function setSize(int $size)
  {
    $this->size = $size;

    return $this;
  }
  function turnLight()
  {
    echo "switching on lights";
  }
}
