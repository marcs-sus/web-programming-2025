<?php
require_once 'team.php';

class Championship
{
    private string $name;
    private array $teams = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function display_teams(): void
    {
        echo "<h1>" . $this->get_name() . "</h1>";
        echo "<fieldset>";
        foreach ($this->teams as $team) {
            echo $team->get_name() . "<br>";
            echo "<hr>";

            $players = $team->get_players();
            foreach ($players as $player) {
                echo $player->get_name() . "<br>";
            }
            echo "<hr>";
        }
        echo "</fieldset>";
    }

    public function add_team(Team $team): void
    {
        array_push($this->teams, $team);
    }

    public function get_name(): string
    {
        return $this->name;
    }

    public function get_teams(): array
    {
        return $this->teams;
    }
}
