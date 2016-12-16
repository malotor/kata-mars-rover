<?php

namespace Prosodie\MarsRover;

use Prosodie\MarsRover\Aspects\North;
use Prosodie\MarsRover\Aspects\South;

class Rover
{

    private $position;
    private $aspect;

    public function __construct(Position $position, $aspect = 'N')
    {
        if ($aspect == 'N')
            $this->aspect = new North($this);
        elseif ($aspect == 'S')
            $this->aspect = new South($this);

        $this->position = $position;
    }

    public function getAspect()
    {
        return (string) $this->aspect;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(Position $position)
    {
        $this->position = $position;
    }

    public function setAspect(Aspect $aspect)
    {
        $this->aspect = $aspect;
    }

    public function move($command)
    {

        foreach ( str_split($command) as $c)
        switch ($c)
        {
            case 'f':
                $this->moveForward();
                break;
            case 'b':
                $this->moveBackward();
                break;
            case 'l':
                $this->turnLeft();
                break;
            case 'r':
                $this->turnRight();
                break;
        }
    }

    private function moveForward()
    {
        $this->aspect->moveForward();
    }

    private function moveBackward()
    {
        $this->aspect->moveBackward();
    }

    private function turnLeft()
    {
        $this->aspect->turnLeft();
    }

    private function turnRight()
    {
        $this->aspect->turnRight();
    }

    static public function create($cordX = 0, $cordY = 0, $aspect = 'N')
    {
        $position = new Position($cordX, $cordY);

        return new Self($position, $aspect);
    }
}
