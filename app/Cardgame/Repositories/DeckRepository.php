<?php

namespace Cardgame\Repositories;

class DeckRepository {

    protected $deck;

    public function __construct($card_values, $card_siuts) {

        foreach ($card_siuts as $siut) {
            foreach ($card_values as $value) {
                $this->deck[] = new CardRepository($value, $siut);
            }
        }
    }

    public function shuffleDeck() {
        shuffle($this->deck);
    }

    public function getDeck() {
        return $this->deck;
    }

    public function setDeck($deck) {
        $this->deck = $deck;
    }

}
