<?php
require_once 'model/championship.php';

$championship = new Championship('Campeonato Brasileiro de Futebol');

$team1 = new Team('Flamengo', 1910);
$team2 = new Team('Palmeiras', 1913);
$team3 = new Team('Santos', 1912);

$player1 = new Player('Ronaldo', 'Atacante', new DateTime('1985-02-05'));
$player2 = new Player('Neymar', 'Atacante', new DateTime('1992-02-05'));
$player3 = new Player('Messi', 'Atacante', new DateTime('1987-06-24'));
$player4 = new Player('Neymar', 'Atacante', new DateTime('1992-02-05'));
$player5 = new Player('Messi', 'Atacante', new DateTime('1987-06-24'));
$player6 = new Player('Neymar', 'Atacante', new DateTime('1992-02-05'));

$team1->add_player($player1);
$team1->add_player($player2);
$team2->add_player($player3);
$team2->add_player($player4);
$team3->add_player($player5);
$team3->add_player($player6);

$championship->add_team($team1);
$championship->add_team($team2);
$championship->add_team($team3);

$championship->display_teams();