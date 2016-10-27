<?php

namespace Cardgame\Repositories;

class GameRepository {

    protected $players;

    public function __construct($players_config) {

        foreach ($players_config as $player) {

            $this->players[] = new PlayerRepository($player);
        }
    }

    public function dealCards($deck, $quantity) {
        $i = 0;
        $players_count = count($this->players);

        $cards_quantity = ($quantity * $players_count > 52) ? 52 : $quantity * $players_count;

        for ($j = 0; $j < $cards_quantity; $j++) {
            $this->players[$i]->addCard($deck[$j]);

            $i++;
            if ($i > $players_count - 1) {
                $i = 0;
            }
        }
    }

    function getPlayers() {
        return $this->players;
    }

}
