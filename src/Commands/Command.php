<?php
namespace Prosodie\MarsRover\Commands;

use Prosodie\MarsRover\Rover;

interface Command
{
    public function execute(Rover $rover);
}