<?php

namespace spec\Prosodie\MarsRover;

use Prosodie\MarsRover\Rover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Rover::class);
    }
}
