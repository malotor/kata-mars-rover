<?php

namespace spec\Prosodie\MarsRover;

use Prosodie\MarsRover\Rover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoverSpec extends ObjectBehavior
{

    function it_should_have_with_initial_postion()
    {
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);
    }


}
