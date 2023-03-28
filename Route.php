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

    //TODO Check implementation of this shit
    public function bfsSearch (): void
    {
        $searchQueue = new Deque();
        $graphObj = new Field($this->xLength, $this->yLength);
        $graphObj->fieldToGraph();
        $graph = $graphObj->fieldGraph;
        $searchQueue += $graph[$this->startCoordinates[0]][$this->startCoordinates[1]]; //CHECK IMPLEMENTATION!!!
        $searched = [];

        while ($searchQueue)
        {
            $vertex = $searchQueue->shift();

            if (!in_array($vertex, $searched))
            {
                if ($vertex[0] == $this->finishCoordinates[0] && $vertex[1] == $this->finishCoordinates[1])
                {
                    $this->searchResult = $searched; //NOT SURE!!!
                    break;
                }
                else
                {
                    $searchQueue += $graph[$vertex]; //ALSO CHECK THIS SHIT!!!
                    $searched[] = $vertex;
                }
            }
        }
    }
}
