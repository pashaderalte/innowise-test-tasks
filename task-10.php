<?php
    class Calculator {
        private int $firstArgument;
        private int $secondArgument;
        private int $result = 0;

        public function __construct($firstArgument, $secondArgument)
        {
            $this->firstArgument = $firstArgument;
            $this->secondArgument = $secondArgument;
        }

        public function __toString()
        {
            return (string) $this->result;
        }

        public function add (): object
        {
            $this->result = $this->firstArgument + $this->secondArgument;
            return $this;
        }

        public function subtract (): object
        {
            $this->result = $this->firstArgument - $this->secondArgument;
            return $this;
        }

        public function multiply (): object
        {
            $this->result = $this->firstArgument * $this->secondArgument;
            return $this;
        }

        public function divide (): object
        {
            $this->result = $this->firstArgument / $this->secondArgument;
            return $this;
        }

        public function addBy (int $summand): object
        {
            $this->result += $summand;
            return $this;
        }

        public function subtractBy (int $deductible): object
        {
            $this->result -= $deductible;
            return $this;
        }

        public function multiplyBy (int $multiplier): object
        {
            $this->result *= $multiplier;
            return $this;
        }

        public function divideBy (int $divider): object
        {
            $this->result /= $divider;
            return $this;
        }
    }