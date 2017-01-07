<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;
use Prosodie\MarsRover\Rover;

class South extends Aspect
{
    const name = 'S';

    public function moveForward(Rover $rover)
    {
        $rover->setPosition( new Position($rover->getPosition()->getX(), $rover->getPosition()->getY() - 1 ) );
    }

    public function moveBackward(Rover $rover)
    {
        $rover->setPosition( new Position($rover->getPosition()->getX(), $rover->getPosition()->getY() + 1 ) );
    }

    public function turnLeft(Rover $rover)
    {
        $rover->setAspect( new East() );
    }

    public function turnRight(Rover $rover)
    {
        $rover->setAspect( new West() );
    }

    public function __toString()
    {
        return self::name;
    }
}