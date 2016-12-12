<?php

namespace Prosodie\MarsRover;

class Rover
{

    private $x;
    private $y;

    public function __construct($cordX = 0, $cordY = 0, $aspect = 'N')
    {
        $this->x = $cordX;
        $this->y = $cordY;
        $this->aspect = $aspect;
    }

    public function getCordX()
    {
        return $this->x;
    }

    public function getCordY()
    {
        return $this->y;
    }

    public function getAspect()
    {
        return $this->aspect;
    }

}
