<?php
    function getFirstFibonacci(int $length): string
    {
        $fibonacci = [0, 1];
        $i = 1;
        while (strlen($fibonacci[$i]) < $length) {
            $i++;
            $fibonacci[$i] = notBCAdd($fibonacci[$i-1], $fibonacci[$i-2]);
        }
        return $fibonacci[$i];
    }

    function notBCAdd(string $a, string $b): string
    {
        while (strlen($a) < strlen($b)) {
            $a = "0" . $a;
        }
        while (strlen($b) < strlen($a)) {
            $b = "0" . $b;
        }
        $result = "";
        $remainder = 0;
        for ($i = strlen($a)-1; $i >= 0; $i--) {
            $digit = intval($a[$i]) + intval($b[$i]) + $remainder;
            $remainder = 0;
            if ($digit >= 10) {
                $digit -= 10;
                $remainder = 1;
            }
            $result = $digit . $result;
        }
        if ($remainder > 0) {
            $result = $remainder . $result;
        }
        return $result;
    }




