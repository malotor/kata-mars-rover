<?php

namespace Prosodie\MarsRover;

use Prosodie\MarsRover\Aspects\AspectFactory;

class Rover
{

    private $position;
    private $aspect;
    private $commandProcessor;


    public function __construct(Position $position, Aspect $aspect)
    {
        $this->aspect = $aspect;
        $this->position = $position;
        $this->commandProcessor = new CommandProcessor($this);
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

    public function move($commandSequence)
    {
        $this->commandProcessor->process($commandSequence);
    }


    public function moveForward()
    {
        $this->aspect->moveForward($this);
    }

    public function moveBackward()
    {
        $this->aspect->moveBackward($this);
    }

    public function turnLeft()
    {
        $this->aspect->turnLeft($this);
    }

    public function turnRight()
    {
        $this->aspect->turnRight($this);
    }

    static public function create($cordX = 0, $cordY = 0, $aspect = 'N')
    {
        $position = new Position($cordX, $cordY);
        $aspect = AspectFactory::create($aspect);
        return new self($position, $aspect);
    }
}
