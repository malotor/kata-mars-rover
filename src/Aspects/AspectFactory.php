<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Rover;

class AspectFactory
{
    static public function create($aspect, Rover $rover)
    {
        switch ($aspect)
        {
            case 'S':
                return new South($rover);
                break;
            case 'E':
                return new East($rover);
                break;
            case 'W':
                return new West($rover);
                break;
            case 'N':
                return new North($rover);
                break;

        }
    }
}