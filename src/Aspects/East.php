<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;
use Prosodie\MarsRover\Rover;

class East extends Aspect
{

    const name = 'E';

    public function moveForward(Rover $rover)
    {
        $rover->setPosition( new Position($rover->getPosition()->getX() +1 , $rover->getPosition()->getY()  ) );

    }

    public function moveBackward(Rover $rover)
    {
        $rover->setPosition( new Position($rover->getPosition()->getX() -1 , $rover->getPosition()->getY()  ) );
    }

    public function turnLeft(Rover $rover)
    {
        $rover->setAspect( new North() );
    }

    public function turnRight(Rover $rover)
    {
        $rover->setAspect( new South() );
    }

    public function __toString()
    {
        return self::name;
    }
}