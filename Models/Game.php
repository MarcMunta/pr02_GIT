<?php

namespace App\Models;

use Nette\Utils\ArrayList;

/**
 * Repr
 */
class Game
{
/**
   * field where game is played
   *
   * @var Field
   */
  private $field;
  /**
   * Team #1 vs. Team #2
   *
   * @var \ArrayObject
   */
  private $teams;

  
  /**
   * Get field where game is played
   *
   * @return  Field
   */ 
  public function getField()
  {
    return $this->field;
  }
  
  /**
   * Set field where game is played
   *
   * @param  Field  $field  field where game is played
   *
   * @return  self
   */ 
  public function setField(Field $field)
  {
    $this->field = $field;

    return $this;
  }
  
  /**
   * Get team #1 vs. Team #2
   *
   * @return  ArrayList
   */ 
  public function getTeams()
  {
    return $this->teams;
  }

  /**
   * Set team #1 vs. Team #2
   *
   * @param  ArrayList  $teams  Team #1 vs. Team #2
   *
   * @return  self
   */ 
  public function setTeams(ArrayList $teams)
  {
    $this->teams = $teams;
    
    return $this;
  }
  function start(){
    echo "game is starting";
  }
}
