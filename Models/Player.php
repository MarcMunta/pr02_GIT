<?php

namespace App\Models;

/**
 * Represents play field.
 */
class Player extends Person
{
    /**
     * Player name
     *
     * @var string
     */
    private $name;

    /**
     * Player Status
     *
     * @var boolean
     */
    private $active;

    /**
     * Construct a Player with a name and the status.
     *
     * @param string $name     Player name
     * @param bool $active  Player Status
     */
    public function __construct(string $name, bool $active)
    {
        $this->name = $name;
        $this->active = $active;
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
     * Get Player Status
     *
     * @return  bool
     */
    public function getActive()
    {
        return $this->active;
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

    /**
     * Set status in bool
     *
     * @param  bool  $active is true or false
     *
     * @return  self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    // Parte Marc
    /**
     * Pass the ball to another player.
     *
     * @param Player $player The player to whom the ball is passed
     *
     * @return void
     */
    public function passBall(Player $player)
    {
        // Create a Ball object
        $ball = new class {
            /**
             * The material of the ball.
             *
             * @var string
             */
            private $material = 'leather';

            /**
             * Kick the ball.
             *
             * @return void
             */
            public function kick()
            {
                echo "The ball made of " . $this->material . " is kicked and spins!";
            }
        };

        // Check if the player is active
        if ($this->active) {
            echo $this->getName() . " passes the ball to " . $player->getName() . ". ";
            // Simulate ball kick and spin
            $ball->kick();
        } else {
            echo $this->getName() . " is not active and cannot pass the ball.";
        }
    }
}