<?php
require_once 'team.php';
require_once 'goal.php';

class Game
{
    private Team $teamA;
    private Team $teamB;
    private array $goals = [];

    public function __construct(Team $teamA, Team $teamB)
    {
        $this->teamA = $teamA;
        $this->teamB = $teamB;
    }

    public function addGoal(Goal $goal)
    {
        array_push($this->goals, $goal);
    }

    public function getWinner(): ?Team
    {
        $scoreA = 0;
        $scoreB = 0;

        foreach ($this->goals as $goal) {
            if ($goal->getTeam() === $this->teamA) {
                $scoreA++;
            } elseif ($goal->getTeam() === $this->teamB) {
                $scoreB++;
            }
        }

        if ($scoreA > $scoreB) {
            return $this->teamA;
        } elseif ($scoreB > $scoreA) {
            return $this->teamB;
        } else {
            return null;
        }
    }

    public function getTeamA(): Team
    {
        return $this->teamA;
    }

    public function getTeamB(): Team
    {
        return $this->teamB;
    }

    public function getGoals(): array
    {
        return $this->goals;
    }

    public function setTeamA(Team $teamA)
    {
        $this->teamA = $teamA;
    }

    public function setTeamB(Team $teamB)
    {
        $this->teamB = $teamB;
    }
}
