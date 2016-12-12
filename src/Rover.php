<?php

namespace Prosodie\MarsRover;

class Rover
{

    private $position;
    private $aspect;

    public function __construct($cordX = 0, $cordY = 0, $aspect = 'N')
    {
        $this->aspect = $aspect;
        $this->position = new Position($cordX, $cordY);
    }

    public function getCordX()
    {
        return $this->position->getX();
    }

    public function getCordY()
    {
        return $this->position->getY();
    }

    public function getAspect()
    {
        return $this->aspect;
    }

    public function move($command)
    {
        if ($this->aspect == 'N')
            $newPosition = new Position($this->position->getX(), $this->position->getY() + 1 );
        if ($this->aspect == 'S')
            $newPosition = new Position($this->position->getX(), $this->position->getY() - 1 );

        $this->position = $newPosition;
    }

}
