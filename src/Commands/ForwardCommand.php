<?php

namespace Prosodie\MarsRover\Commands;

use Prosodie\MarsRover\Commands\Command;
use Prosodie\MarsRover\Rover;

class ForwardCommand implements Command
{

    public function execute(Rover $rover)
    {
        $rover->moveForward();
    }
}