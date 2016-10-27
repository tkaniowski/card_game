<?php

namespace Cardgame\Repositories;

class CardRepository {

    protected $value;
    protected $siut;

    public function __construct($value, $siut) {
        $this->value = $value;
        $this->siut = $siut;
    }

    public function getValue() {
        return $this->value;
    }

    public function getSiut() {
        return $this->siut;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setSiut($siut) {
        $this->siut = $siut;
    }

}
