<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{

      /**

     * Player name

     *
     * @var string
     */
    private $name;

/**
   * age of person
   *
   * @var int
   */
  private $age;

  public function __construct(string $name, int $age)
  {

      $this->name = $name;
      $this->age = $age;
  }

  
  /**
   * Get age of person
   *
   * @return  int
   */ 
  public function getAge()
  {
    return $this->age;
  }


        /**
     * Get Player name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }


  /**
   * Set age of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */ 
  public function setAge(int $age)
  {
      $this->age = $age;
      
      return $this;
    }
    function run(){
      echo "running";
    }

        /**
     * Set Player name in string
     *
     * @param  string  $name is string
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}



?>