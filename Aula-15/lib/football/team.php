<?php
require_once 'player.php';

class Team
{
    private string $name;
    private DateTime $foundedYear;
    private array $players = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addPlayer(Player $player)
    {
        array_push($this->players, $player);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFoundedYear()
    {
        return $this->foundedYear;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setFoundedYear($foundedYear)
    {
        $this->foundedYear = $foundedYear;
    }
}
