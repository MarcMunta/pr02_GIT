class Player extends Person
{
    /**
     * Player Status
     *
     * @var bool
     */
    private $active;

    /**
     * Construct a Player with a name, age, and the status.
     *
     * @param string $name   Player name
     * @param int $age      Age of person
     * @param bool $active   Player Status
     */
    public function __construct(string $name, int $age, bool $active)
    {
        parent::__construct($name, $age);
        $this->active = $active;
    }

    /**
     * Get Player Status
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set status in bool
     *
     * @param bool $active is true or false
     *
     * @return self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

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
?>