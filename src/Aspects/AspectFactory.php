<?php

namespace Prosodie\MarsRover\Aspects;

use Prosodie\MarsRover\Rover;

class AspectFactory
{
    static public function create($aspect)
    {
        switch ($aspect)
        {
            case 'S':
                return new South();
                break;
            case 'E':
                return new East();
                break;
            case 'W':
                return new West();
                break;
            case 'N':
                return new North();
                break;

        }
    }
}