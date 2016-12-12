<?php

namespace spec\Prosodie\MarsRover;

use Prosodie\MarsRover\Rover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoverSpec extends ObjectBehavior
{

    function it_should_have_with_initial_position()
    {
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);
    }

    function it_should_be_created_with_a_diferent_initials_positions()
    {
        $this->beConstructedWith(3,4);

        $this->getCordX()->shouldReturn(3);
        $this->getCordY()->shouldReturn(4);
    }

    function it_should_be_created_with_an_aspect()
    {
        $this->beConstructedWith(3,4,'N');

        $this->getAspect()->shouldReturn('N');
    }

    function it_should_be_created_with_a_diferent_aspect()
    {
        $this->beConstructedWith(3,4,'S');

        $this->getAspect()->shouldReturn('S');
    }
}
