<?php
    class Calculator {
        private int $firstArgument;
        private int $secondArgument;
        private int $tempValue;

        public function __construct($firstArgument, $secondArgument)
        {
            $this->firstArgument = $firstArgument;
            $this->secondArgument = $secondArgument;
        }

        public function add (): int
        {
            $this->tempValue = $this->firstArgument + $this->secondArgument;
            return $this->tempValue;
        }

        public function subtract (): int
        {
            $this->tempValue = $this->firstArgument - $this->secondArgument;
            return $this->tempValue;
        }

        public function multiply (): int
        {
            $this->tempValue = $this->firstArgument * $this->secondArgument;
            return $this->tempValue;
        }

        public function divide (): int
        {
            $this->tempValue = $this->firstArgument / $this->secondArgument;
            return $this->tempValue;
        }

        public function addBy (int $summand): int
        {
            $this->tempValue += $summand;
            return $this->tempValue;
        }

        public function subtractBy (int $deductible): int
        {
            $this->tempValue -= $deductible;
            return $this->tempValue;
        }

        public function multiplyBy (int $multiplier): int
        {
            $this->tempValue *= $multiplier;
            return $this->tempValue;
        }

        public function divideBy (int $divider): int
        {
            $this->tempValue /= $divider;
            return $this->tempValue;
        }
    }