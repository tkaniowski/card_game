<?php
use PHPUnit\Framework\TestCase;
use Cardgame\Repositories\GameRepository as GameRepository;
use Cardgame\Repositories\PlayerRepository as PlayerRepository;

require_once('../app/start.php');


class GameTest extends TestCase{
    protected $game;

    protected function setUp()
    {
        $this->game = new GameRepository(array('Player 1'));
    }
     public function testPush()
    {
        $this->assertEquals($this->game->getplayers(),array(new PlayerRepository('Player 1')));
        
        
    }
}