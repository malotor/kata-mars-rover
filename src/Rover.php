<?php

namespace Prosodie\MarsRover;

use Prosodie\MarsRover\Aspects\North;
use Prosodie\MarsRover\Aspects\South;
use Prosodie\MarsRover\Commands;

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
        {
            $command = Commands\CommandFactory::getCommand($c);
            $command->execute($this);
        }

    }

    public function moveForward()
    {
        $this->aspect->moveForward();
    }

    public function moveBackward()
    {
        $this->aspect->moveBackward();
    }

    public function turnLeft()
    {
        $this->aspect->turnLeft();
    }

    public function turnRight()
    {
        $this->aspect->turnRight();
    }

    static public function create($cordX = 0, $cordY = 0, $aspect = 'N')
    {
        $position = new Position($cordX, $cordY);

        return new Self($position, $aspect);
    }
}
