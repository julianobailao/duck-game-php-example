<?php

namespace Uds\DuckGame;

use Uds\DuckGame\Ducks\MallardDuck;

class App
{
    public function gameStart()
    {
        $app = new MallardDuck();

        return $app->fly();
    }
}
