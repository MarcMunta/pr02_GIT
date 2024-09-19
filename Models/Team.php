<?php

namespace App\Models;

use Nette\Utils\ArrayList;

/**
 * Represents a team in a football match.
 */
class Team
{
    /**
     * Team name
     *
     * @var string
     */
    private $name;

    /**
     * List of players in the team
     *
     * @var ArrayList
     */
    private $players;

    /**
     * Construct a Team with a name and a list of players.
     *
     * @param string    $name     Team name
     * @param ArrayList $players  List of players
     */
    public function __construct($name, ArrayList $players)
    {
        $this->name = $name;
        $this->players = $players;
    }

    /**
     * Get the team name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the list of players in the team.
     *
     * @return ArrayList
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set the team name.
     *
     * @param string $name Team name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set the list of players in the team.
     *
     * @param ArrayList $players List of players
     */
    public function setPlayers(ArrayList $players)
    {
        $this->players = $players;
    }

    /**
     * Start the game.
     */
    public function play()
    {
        echo "The game is starting with {$this->name} team.";
    }
}
