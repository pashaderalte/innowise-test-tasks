<?php

    class Matrix
    {
        private array $matrixValues;
        private array $matrixSize;

        public function __construct(array $matrixValues)
        {
            $this->matrixValues = $matrixValues;
            $this->setMatrixSize(['columns' => sizeof($matrixValues[0]), 'rows' => sizeof($matrixValues)]);
        }

        /**
         * @return array
         */
        public function getMatrixValues(): array
        {
            return $this->matrixValues;
        }

        /**
         * @param array $matrixValues
         */
        public function setMatrixValues(array $matrixValues): void
        {
            $this->matrixValues = $matrixValues;
            $this->setMatrixSize(['columns' => sizeof($matrixValues[0]), 'rows' => sizeof($matrixValues)]);
        }

        /**
         * @return array
         */
        public function getMatrixSize(): array
        {
            return $this->matrixSize;
        }

        /**
         * @param array $matrixSize
         */
        private function setMatrixSize(array $matrixSize): void
        {
            $this->matrixSize = $matrixSize;
        }

        public function addMatrix (array $summandMatrix): void
        {
            if ($this->matrixSize == [['columns' => sizeof($summandMatrix[0]), 'rows' => sizeof($summandMatrix)]])
            {
                for ($row = 0; $row < $this->matrixSize['rows']; $row++)
                {
                    for ($column = 0; $column < $this->matrixSize['columns']; $column++)
                    {
                        $this->matrixValues[$row][$column] = $this->matrixValues[$row][$column] + $summandMatrix[$row][$column];
                    }
                }
            }
            else
            {
                try {
                    throw new Exception('Matrix sizes must be equal!');
                } catch(Exception $e) {
                    echo $e->getMessage();
                }

            }
        }

        public function multiplyByNumber (int $multiplierNumber): void
        {
            for ($row = 0; $row < $this->matrixSize['rows']; $row++)
            {
                for ($column = 0; $column < $this->matrixSize['columns']; $column++)
                {
                    $this->matrixValues[$row][$column] = $this->matrixValues[$row][$column] * $multiplierNumber;
                }
            }
        }

        public function multiplyByMatrix (array $multiplierMatrix): void
        {
            if ($this->matrixSize['columns'] == sizeof($multiplierMatrix))
            {
                $resultMatrix = array_fill(0, $this->matrixSize['rows'], []);

                foreach ($resultMatrix as $row)
                {
                    $row = array_fill(0, sizeof($multiplierMatrix[0]), 0);
                }


                for ($rowFirst = 0; $rowFirst < $this->matrixSize['rows']; $rowFirst++)
                {
                    for ($columnSecond = 0; $columnSecond < sizeof($multiplierMatrix[0]); $columnSecond++)
                    {
                        for ($rowSecond = 0; $rowSecond < sizeof($multiplierMatrix); $rowSecond++)
                        {
                            $resultMatrix[$rowFirst][$columnSecond] += $this->matrixValues[$rowFirst][$rowSecond] * $multiplierMatrix[$rowSecond][$columnSecond];
                        }
                    }
                }

                $this->setMatrixValues($resultMatrix);
            }
            else
            {
                try {
                    throw new Exception('Number of first matrix columns must be equal to the number of the second matrix rows!');
                } catch(Exception $e) {
                    echo $e->getMessage();
                }
            }
        }

    }