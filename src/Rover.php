<?php

namespace Prosodie\MarsRover;

class Rover
{

    private $x;
    private $y;

    public function __construct($cordX = 0, $cordY = 0)
    {
        $this->x = $cordX;
        $this->y = $cordY;
    }

    public function getCordX()
    {
        return $this->x;
    }

    public function getCordY()
    {
        return $this->y;
    }

}
