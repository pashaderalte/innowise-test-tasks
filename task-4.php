<?php
    function safeRemove (array $arr, int $position): array
    {
        unset($arr[$position]);
        $arrCopy = $arr;
        $arr = [];

        foreach($arrCopy as $item)
        {
            $arr[] = $item;
        }

        unset($arrCopy);

        return $arr;
    }

