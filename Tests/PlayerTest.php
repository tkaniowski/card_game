<?php
use PHPUnit\Framework\TestCase;
use Cardgame\Repositories\PlayerRepository as PlayerRepository;

require_once('../app/start.php');


class PlayerTest extends TestCase{
    protected $player;

    protected function setUp()
    {
        $this->player = new PlayerRepository('Player 1');
    }
     public function testPush()
    {
        $this->assertEquals($this->player->getName(),'Player 1');
        
        
    }
}