<?php

namespace Prosodie\MarsRover\Commands;

use Prosodie\MarsRover\Commands\Command;
use Prosodie\MarsRover\Rover;

class TurnleftCommand implements Command
{

    public function execute(Rover $rover)
    {
        $rover->turnLeft();
    }
}