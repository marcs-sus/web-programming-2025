<?php
require_once 'player.php';

class Team
{
    private string $name;
    private int $foundation_year;
    private array $players = [];

    public function __construct(string $name, int $foundation_year)
    {
        $this->name = $name;
        $this->foundation_year = $foundation_year;
    }

    public function add_player(Player $player)
    {
        array_push($this->players, $player);
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_foundation_year()
    {
        return $this->foundation_year;
    }

    public function get_players()
    {
        return $this->players;
    }
}
