<?php

namespace Prosodie\MarsRover\Commands;

class CommandFactory
{
    static public function getCommand($code)
    {
        switch ($code)
        {
            case 'f':
                $command = new ForwardCommand();
                break;
            case 'b':
                $command = new BackwardCommand();
                break;
            case 'l':
                $command = new TurnleftCommand();
                break;
            case 'r':
                $command = new TurnrightCommand();
                break;
            default:
                throw new \Exception("The command doesn't exists");
                break;
        }

        return $command;
    }
}