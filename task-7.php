<?php
    function getFirstFibonacciByLength (int $length): int
    {
        $n1 = 0;
        $n2 = 1;

        if ($length != 1)
        {
            while (strlen((string) $n1) <= $length)
            {
                $nth = $n1 + $n2;
                $n1 = $n2;
                $n2 = $nth;
            }
        }

        return $n1;
    }