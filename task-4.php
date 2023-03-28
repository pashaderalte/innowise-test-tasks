<?php

    function safeRemove (array &$arr, int $position): array
    {
        unset($arr[$position]);
        $result = $arr;
        unset($arr);

        return $result;
    }

