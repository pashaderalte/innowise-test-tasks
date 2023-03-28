<?php

    function outputNumbersInRange ( int $a, int $b): void
    {

        if ($a < $b)
        {
            echo $a, ', ';
            outputNumbersInRange($a + 1, $b);
        }
        elseif ($a == $b)
        {
            echo $a;
        }
        else
        {
            echo $a, ', ';
            outputNumbersInRange($a - 1, $b);
        }
    }
