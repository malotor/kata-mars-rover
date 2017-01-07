<?php

namespace Prosodie\MarsRover;

class Position
{

    private $x;
    private $y;

    /**
     * position constructor.
     *
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    public function incrementX()
    {
        return new Position($this->getX() +1 , $this->getY()  );
    }

    public function decrementX()
    {
        return new Position($this->getX() -1 , $this->getY()  );
    }

    public function incrementY()
    {
        return new Position($this->getX() , $this->getY()  +1  );
    }

    public function decrementY()
    {
        return new Position($this->getX() , $this->getY()  -1 );
    }


}
