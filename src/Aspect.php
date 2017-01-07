<?php

namespace Prosodie\MarsRover;

use Prosodie\MarsRover\Rover;

abstract class Aspect
{
    abstract public function moveForward(Rover $rover);
    abstract function moveBackward(Rover $rover);
    abstract function turnLeft(Rover $rover);
    abstract function turnRight(Rover $rover);
}