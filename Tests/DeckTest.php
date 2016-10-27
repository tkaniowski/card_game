<?php
use PHPUnit\Framework\TestCase;
use Cardgame\Repositories\CardRepository as CardRepository;
use Cardgame\Repositories\DeckRepository as DeckRepository;

require_once('../app/start.php');


class DeckTest extends TestCase{
    protected $deck;

    protected function setUp()
    {
        $this->deck = new DeckRepository(array('ace'),array('hearts'));
    }
     public function testPush()
    {
        $this->assertEquals($this->deck->getDeck(),array(new CardRepository('ace','hearts')));
        
        
    }
}