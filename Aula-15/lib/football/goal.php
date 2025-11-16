<?php
require_once 'player.php';
require_once 'team.php';

class Goal
{
    private int $time;
    private Player $scorer;
    private Team $team;

    public function __construct($time, Player $scorer, Team $team)
    {
        $this->time = $time;
        $this->scorer = $scorer;
        $this->team = $team;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getScorer(): Player
    {
        return $this->scorer;
    }

    public function getTeam(): Team
    {
        return $this->team;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function setScorer(Player $scorer)
    {
        $this->scorer = $scorer;
    }

    public function setTeam(Team $team)
    {
        $this->team = $team;
    }
}
