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

    /*
    public function getCordX()
    {
        return $this->position->getX();
    }

    public function getCordY()
    {
        return $this->position->getY();
    }
    */

    public function getAspect()
    {
        return $this->aspect;
    }

    public function getPosition()
    {
        return $this->position;
    }


    public function move($command)
    {

        switch ($this->aspect)
        {
            case 'N':
                if ($command == 'f')
                    $this->position = new Position($this->position->getX(), $this->position->getY() + 1 );
                if ($command == 'b')
                    $this->position = new Position($this->position->getX(), $this->position->getY() - 1 );

                if ($command == 'l')
                {
                    $this->aspect = 'W';
                }

                if ($command == 'r')
                {
                    $this->aspect = 'E';
                }
                break;

            case 'S':
                if ($command == 'f')
                    $this->position = new Position($this->position->getX(), $this->position->getY() - 1 );
                if ($command == 'b')
                    $this->position = new Position($this->position->getX(), $this->position->getY() + 1 );

                if ($command == 'l')
                {
                    $this->aspect = 'E';
                }
                if ($command == 'r')
                {
                    $this->aspect = 'W';
                }
                break;

            case 'W':
                if ($command == 'l')
                {
                    $this->aspect = 'S';
                }
                if ($command == 'r')
                {
                    $this->aspect = 'N';
                }
                break;

            case 'E':
                if ($command == 'l')
                {
                    $this->aspect = 'N';
                }
                if ($command == 'r')
                {
                    $this->aspect = 'S';
                }
                break;
        }

    }

}
