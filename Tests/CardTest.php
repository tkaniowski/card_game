<?php
use PHPUnit\Framework\TestCase;
use Cardgame\Repositories\CardRepository as CardRepository;

require_once('../app/start.php');

class CardTest extends TestCase{
    protected $card;

    protected function setUp()
    {
        $this->card = new CardRepository('ace','hearts');
    }
     public function testPush()
    {
        $this->assertEquals($this->card->getValue(),'ace');
        $this->assertEquals($this->card->getSiut(),'hearts');
        
    }
}
