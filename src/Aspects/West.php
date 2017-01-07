<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;
use Prosodie\MarsRover\Rover;

class West extends Aspect
{
    const name = 'W';

    public function moveForward(Rover $rover)
    {
        $rover->setPosition( $rover->getPosition()->decrementX()  );

    }

    public function moveBackward(Rover $rover)
    {
        $rover->setPosition( $rover->getPosition()->incrementX()  );
    }

    public function turnLeft(Rover $rover)
    {
        $rover->setAspect(new South() );
    }

    public function turnRight(Rover $rover)
    {
        $rover->setAspect( new North() );
    }

    public function __toString()
    {
        return self::name;
    }
}