<?php

    function getCamelCase (string $input): string
    {
        $output = str_replace(['_', '-'], ' ', $input);
        $output = ucwords($output);
        return str_replace(' ', '', $output);
    }
