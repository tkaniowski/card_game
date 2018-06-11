<?php

use Cardgame\Repositories\{CardRepository, DeckRepository, PlayerRepository, GameRepository};
use Cardgame\config\config as config;

require_once('app/start.php');

//creating new card deck      
$deck = new DeckRepository(config::$card_values, config::$card_siuts);

//shuffle the cards
$deck->shuffleDeck();

//prove that it shuffled
var_dump($deck->getDeck());

//creating game and players
$game = new GameRepository(config::$players);

//deal the cards
$game->dealCards($deck->getDeck(), config::$quantity);

//showing all players and cards
var_dump($game->getPlayers());


