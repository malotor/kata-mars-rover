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
            switch ($c)
            {
                case 'f':
                    $command = new Commands\ForwardCommand();
                    break;
                case 'b':
                    $command = new Commands\BackwardCommand();
                    break;
                case 'l':
                    $command = new Commands\TurnleftCommand();
                    break;
                case 'r':
                    $command = new Commands\TurnrightCommand();
                    break;
                default:
                    throw new \Exception("The command doesn't exists");
                    break;
            }
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
