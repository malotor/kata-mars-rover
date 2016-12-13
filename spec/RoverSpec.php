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

    function it_should_move_along_Y_when_command_forward_is_received()
    {
        $this->move("f");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(1);

        $this->move("f");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(2);

        $this->move("b");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(1);

        $this->move("b");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);


        $this->move("l");
        $this->move("l");

        $this->getAspect()->shouldReturn("S");

        $this->move("f");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(-1);

        $this->move("f");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(-2);

        $this->move("b");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(-1);

        $this->move("b");
        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);

    }

    function it_should_changed_aspect_when_rotate_command_is_received()
    {
        $this->move("l");

        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);
        $this->getAspect()->shouldReturn("W");

        $this->move("l");
        $this->getAspect()->shouldReturn("S");

        $this->move("l");
        $this->getAspect()->shouldReturn("E");

        $this->move("l");
        $this->getAspect()->shouldReturn("N");

        $this->move("r");

        $this->getCordX()->shouldReturn(0);
        $this->getCordY()->shouldReturn(0);
        $this->getAspect()->shouldReturn("E");

        $this->move("r");
        $this->getAspect()->shouldReturn("S");

        $this->move("r");
        $this->getAspect()->shouldReturn("W");

        $this->move("r");
        $this->getAspect()->shouldReturn("N");
    }





}
