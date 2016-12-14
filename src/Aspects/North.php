<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Aspect;
use Prosodie\MarsRover\Position;

class North extends Aspect
{
    const name = "N";

    public function moveForward()
    {
        $this->rover->setPosition( new Position($this->rover->getPosition()->getX(), $this->rover->getPosition()->getY() + 1 ) );
    }

    public function moveBackward()
    {
        $this->rover->setPosition( new Position($this->rover->getPosition()->getX(), $this->rover->getPosition()->getY() - 1 ) );
    }

    public function turnLeft()
    {
        $this->rover->setAspect(new West($this->rover));
    }

    public function turnRight()
    {
        $this->rover->setAspect(new East($this->rover));
    }

    public function __toString()
    {
        return self::name;
    }
}