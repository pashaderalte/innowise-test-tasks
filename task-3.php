<?php

    function reduceNumber(int $number): array
    {
        $stringNumber = strval($number);
        $results = [];

        do
        {
            $digArray = str_split($stringNumber);
            array_push($results, array_sum($digArray));
            $stringNumber = end($results);

        }
        while (strlen($stringNumber) > 1);

        return $results;
    }