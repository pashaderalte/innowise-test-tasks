<?php
class Field
{
    protected int $xLength;
    protected int $yLength;
    private array $field;
    protected array $fieldGraph;

    public function __construct(int $xLength, int $yLength = 0)
    {
        $this->xLength = $xLength;
        $yLength <= 0 ? $this->yLength = $xLength : $this->yLength = $yLength;


    }

    public function generateOnRandom (): void
    {
        for ($yCoordinate = 0; $yCoordinate <= $this->yLength; $yCoordinate++)
        {
            for ($xCoordinate = 0; $xCoordinate <= $this->xLength; $xCoordinate++)
            {
                $this->field[$yCoordinate][$xCoordinate] = rand(0, 1);
            }
        }
    }

    public function generateOnInput (array $fieldValues): void
    {
        $this->field = $fieldValues;
    }

    //TODO Create correct graph implementation; Assume what should be vertex: value or coordinate
    public function fieldToGraph (): void
    {
        for ($yCoordinate = 0; $yCoordinate <= sizeof($this->field); $yCoordinate++)
        {
            for ($xCoordinate = 0; $xCoordinate <= sizeof($this->field[0]); $xCoordinate++)
            {
                if (!($xCoordinate == array_key_first($this->field[0])
                && $xCoordinate == array_key_last($this->field[0])
                && $yCoordinate == array_key_first($this->field)
                && $yCoordinate == array_key_last($this->field)))
                {

                }
                else
                {
                    $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]]
                }
            }
        }
    }



}