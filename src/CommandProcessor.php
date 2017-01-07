<?php

namespace Prosodie\MarsRover;

class CommandProcessor
{
    public function __construct($rover)
    {
        $this->rover = $rover;
    }

    public function process($command)
    {

        foreach ( $this->parseCommands($command) as $c)
        {
            $command = Commands\CommandFactory::getCommand($c);
            $command->execute($this->rover);
        }

    }

    private function parseCommands($input)
    {
        return str_split($input);
    }
}