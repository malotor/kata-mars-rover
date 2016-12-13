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

    public function getAspect()
    {
        return (string) $this->aspect;
    }

    public function getPosition()
    {
        return $this->position;
    }


    public function move($command)
    {


        switch ($command)
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
        switch ($this->aspect) {
            case 'N':
                $this->position = new Position($this->position->getX(), $this->position->getY() + 1 );
                break;
            case 'S':
                $this->position = new Position($this->position->getX(), $this->position->getY() - 1 );

                break;
            case 'W':
                $this->position = new Position($this->position->getX()-1, $this->position->getY()  );

                break;
            case 'E':
                $this->position = new Position($this->position->getX()+1, $this->position->getY()  );

                break;
        }
    }

    private function moveBackward()
    {
        switch ($this->aspect) {
            case 'N':
                $this->position = new Position($this->position->getX(), $this->position->getY() - 1 );
                break;
            case 'S':
                $this->position = new Position($this->position->getX(), $this->position->getY() + 1 );

                break;
            case 'W':
                $this->position = new Position($this->position->getX()+1, $this->position->getY()  );

                break;
            case 'E':
                $this->position = new Position($this->position->getX()-1, $this->position->getY()  );

                break;
        }
    }

    private function turnLeft()
    {
        switch ($this->aspect) {
            case 'N':
                $this->aspect = 'W';
                break;
            case 'S':
                $this->aspect = 'E';

                break;
            case 'W':
                $this->aspect = 'S';

                break;
            case 'E':
                $this->aspect = 'N';

                break;
        }
    }

    private function turnRight()
    {
        switch ($this->aspect) {
            case 'N':
                $this->aspect = 'E';
                break;
            case 'S':
                $this->aspect = 'W';

                break;
            case 'W':
                $this->aspect = 'N';

                break;
            case 'E':
                $this->aspect = 'S';

                break;
        }
    }
}
