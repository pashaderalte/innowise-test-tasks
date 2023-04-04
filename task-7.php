<?php
    function getFirstFibonacci(int $length): int
    {
        $fibonacci = [0, 1];
        $i = 1;
        while (strlen($fibonacci[$i]) < $length) {
            $i++;
            $fibonacci[$i] = bcadd($fibonacci[$i-1], $fibonacci[$i-2]);
        }
        return $fibonacci[$i];
    }
