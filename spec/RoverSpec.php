<?php

namespace spec\Prosodie\MarsRover;

use Prosodie\MarsRover\Rover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoverSpec extends ObjectBehavior
{

    function it_should_have_with_initial_position()
    {
        $this->getPosition()->shouldHavePosition(0,0);
    }

    function it_should_be_created_with_a_diferent_initials_positions()
    {
        $this->beConstructedWith(3,4);
        $this->getPosition()->shouldHavePosition(3,4);

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
        $this->getPosition()->shouldHavePosition(0,1);

        $this->move("f");
        $this->getPosition()->shouldHavePosition(0,2);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,1);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,0);

        $this->move("l");
        $this->move("l");

        $this->getAspect()->shouldReturn("S");

        $this->move("f");
        $this->getPosition()->shouldHavePosition(0,-1);

        $this->move("f");
        $this->getPosition()->shouldHavePosition(0,-2);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,-1);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,0);

    }

    function it_should_changed_aspect_when_rotate_command_is_received()
    {
        $this->move("l");

        $this->getPosition()->shouldHavePosition(0,0);
        $this->getAspect()->shouldReturn("W");

        $this->move("l");
        $this->getAspect()->shouldReturn("S");

        $this->move("l");
        $this->getAspect()->shouldReturn("E");

        $this->move("l");
        $this->getAspect()->shouldReturn("N");

        $this->move("r");

        $this->getPosition()->shouldHavePosition(0,0);
        $this->getAspect()->shouldReturn("E");

        $this->move("r");
        $this->getAspect()->shouldReturn("S");

        $this->move("r");
        $this->getAspect()->shouldReturn("W");

        $this->move("r");
        $this->getAspect()->shouldReturn("N");
    }


    function it_should_move_along_X_when_command_forward_is_received_and_facing_W()
    {
        $this->move("l");
        $this->getAspect()->shouldReturn("W");
        $this->move("f");
        $this->getPosition()->shouldHavePosition(-1,0);
        $this->move("f");
        $this->getPosition()->shouldHavePosition(-2,0);


        $this->move("b");
        $this->getPosition()->shouldHavePosition(-1,0);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,0);

    }

    function it_should_move_along_X_when_command_forward_is_received_and_facing_E()
    {
        $this->move("r");
        $this->getAspect()->shouldReturn("E");
        $this->move("f");
        $this->getPosition()->shouldHavePosition(1,0);
        $this->move("f");
        $this->getPosition()->shouldHavePosition(2,0);


        $this->move("b");
        $this->getPosition()->shouldHavePosition(1,0);

        $this->move("b");
        $this->getPosition()->shouldHavePosition(0,0);

    }

    function it_should_accept_several_command()
    {
        $this->move("rff");
        $this->getPosition()->shouldHavePosition(2,0);
        $this->getAspect()->shouldReturn("E");
    }

    function it_should_move_to_corner_of_the_map()
    {
        $this->beConstructedThrough("create",[0,0],[100,100]);
        $this->move("x");
        $this->getPosition()->shouldHavePosition(100,100);
    }

    public function getMatchers()
    {
        return [
            'havePosition' => function ($subject, $x, $y) {
                return ( $subject->getX() == $x && $subject->getY() == $y  );
            },

        ];
    }


}
