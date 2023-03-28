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

    //generates field based on random
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

    //generates field based on given $fieldValues
    public function generateOnInput (array $fieldValues): void
    {
        $this->field = $fieldValues;
    }

    //Graph stores values of field cells: 0 or 1
    public function fieldToGraph (): void
    {
        for ($yCoordinate = 0; $yCoordinate <= sizeof($this->field); $yCoordinate++)
        {
            for ($xCoordinate = 0; $xCoordinate <= sizeof($this->field[0]); $xCoordinate++)
            {
                switch (true)
                {
                    case ($xCoordinate == 0 && $yCoordinate == 0):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1],
                        ];
                        break;

                    case ($xCoordinate == 0 && $yCoordinate > 0):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                        break;

                    case ($xCoordinate > 0 && $yCoordinate == 0):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate ],
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1]
                        ];
                        break;

                    case ($xCoordinate == array_key_last($this->field[0]) && $yCoordinate == array_key_last($this->field)):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                        break;

                    case ($xCoordinate == array_key_last($this->field[0]) && $yCoordinate < array_key_last($this->field)):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                        break;

                    case ($xCoordinate < array_key_last($this->field[0]) && $yCoordinate == array_key_last($this->field)):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate],
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                        break;

                    case ($xCoordinate == 0 && $yCoordinate == array_key_last($this->field)):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                        break;

                    case ($xCoordinate == array_key_last($this->field[0]) && $yCoordinate == 0):
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1],
                        ];
                        break;

                    default:
                        $this->fieldGraph[$this->field[$xCoordinate][$yCoordinate]] = [
                            $this->field[$xCoordinate + 1][$yCoordinate],
                            $this->field[$xCoordinate - 1][$yCoordinate],
                            $this->field[$xCoordinate][$yCoordinate + 1],
                            $this->field[$xCoordinate][$yCoordinate - 1],
                        ];
                }
            }
        }
    }



}