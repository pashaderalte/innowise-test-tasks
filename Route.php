<?php

use Ds\Deque;

require_once Field::class;
require_once Ds\Deque::class;

class Route extends Field
{
    protected array $startCoordinates;
    protected array $finishCoordinates;

    protected array $searchResult;

    public function __construct(int $xLength, int $yLength = 0, array $startCoordinates, array $finishCoordinates)
    {
        parent::__construct($xLength, $yLength);
        $this->startCoordinates = $startCoordinates;
        $this->finishCoordinates = $finishCoordinates;
    }

    //PAGE 146
    //TODO Check implementation of this shit
    public function bfsSearch (): void
    {
        $searchQueue = new Deque();
        $searchQueue += Field::$fieldGraph[$this->startCoordinates]; //CHECK IMPLEMENTATION!!!
        $searched = [];

        while ($searchQueue)
        {
            $vertex = $searchQueue->shift();

            if (!in_array($vertex, $searched))
            {
                if ($vertex == $this->finishCoordinates)
                {
                    $this->searchResult = $searched; //NOT SURE!!!
                    break;
                }
                else
                {
                    $searchQueue += Field::$fieldGraph[$vertex]; //ALSO CHECK THIS SHIT!!!
                    $searched[] = $vertex;
                }
            }
        }
    }
}
