<?php

namespace Prosodie\MarsRover\Commands;

use Prosodie\MarsRover\Commands\Command;
use Prosodie\MarsRover\Rover;

class TurnrightCommand implements Command
{

    public function execute(Rover $rover)
    {
        $rover->turnRight();
    }
}