<?php
require_once 'lib/football/player.php';
require_once 'lib/football/team.php';
require_once 'lib/football/goal.php';
require_once 'lib/football/game.php';

$player1 = new Player('Player 1', 'Forward');
$player2 = new Player('Player 2', 'Goalkeeper');
$player3 = new Player('Player 3', 'Defender');
$player4 = new Player('Player 4', 'Midfielder');

$teamA = new Team('Team A');
$teamB = new Team('Team B');

$teamA->addPlayer($player1);
$teamA->addPlayer($player2);
$teamA->addPlayer($player3);
$teamA->addPlayer($player4);

$game = new Game($teamA, $teamB);

$game->addGoal(new Goal(15, $player1, $teamA));
$game->addGoal(new Goal(30, $player3, $teamB));
$game->addGoal(new Goal(45, $player1, $teamA));

$winner = $game->getWinner();
if ($winner === null) {
    echo "The game ended in a draw.\n";
} else {
    echo "Winner : " . $game->getWinner()->getName() . "\n";
}
