<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;
use Prosodie\MarsRover\Rover;

class North extends Aspect
{
    const name = "N";

    public function moveForward(Rover $rover)
    {
        $rover->setPosition( $rover->getPosition()->incrementY() );
    }

    public function moveBackward(Rover $rover)
    {
        $rover->setPosition( $rover->getPosition()->decrementY()  );
    }

    public function turnLeft(Rover $rover)
    {
        $rover->setAspect(new West());
    }

    public function turnRight(Rover $rover)
    {
        $rover->setAspect(new East());
    }

    public function __toString()
    {
        return self::name;
    }
}