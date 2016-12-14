<?php

namespace Prosodie\MarsRover;

abstract class Aspect
{
    protected $rover;

    public function __construct(Rover $rover)
    {
        $this->rover = $rover;
    }

    abstract public function moveForward();
    abstract function moveBackward();
    abstract function turnLeft();
    abstract function turnRight();
}