<?php

namespace Cardgame\Repositories;

class PlayerRepository {

    protected $cards;
    protected $name;

    public function __construct($name) {

        $this->name = $name;
        $this->cards = array();
    }

    public function addCard($card) {
        $this->cards[] = $card;
    }

    function getCards() {
        return $this->cards;
    }

    function getName() {
        return $this->name;
    }

}
