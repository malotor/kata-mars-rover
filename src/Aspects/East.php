<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;

class East extends Aspect
{

    const name = 'E';

    public function moveForward()
    {
        $this->rover->setPosition( new Position($this->rover->getPosition()->getX() +1 , $this->rover->getPosition()->getY()  ) );

    }

    public function moveBackward()
    {
        $this->rover->setPosition( new Position($this->rover->getPosition()->getX() -1 , $this->rover->getPosition()->getY()  ) );
    }

    public function turnLeft()
    {
        $this->rover->setAspect( new North($this->rover) );
    }

    public function turnRight()
    {
        $this->rover->setAspect( new South($this->rover) );
    }

    public function __toString()
    {
        return self::name;
    }
}