<?php

namespace Prosodie\MarsRover\Commands;

use Prosodie\MarsRover\Commands\Command;
use Prosodie\MarsRover\Rover;

class BackwardCommand implements Command
{

    public function execute(Rover $rover)
    {
        $rover->moveBackward();
    }
}