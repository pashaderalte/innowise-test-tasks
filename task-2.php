<?php

    function getBirthdayCountdown ( string $date ): int
    {
        $curYearBirthdayTimestamp = strtotime(substr($date, 0, -4) . date("Y"));

        return ($curYearBirthdayTimestamp - time()) / (60 * 60 * 24) + 1;
    }

    function getBirthdayCountdownUsingDateTime ( string $date ): int
    {
        $curYearBirthdayString = substr($date, 0, -4) . date("Y");

        $curYearBirthdayObject = DateTime::createFromFormat('d-m-Y', $curYearBirthdayString);

        return $curYearBirthdayObject->diff(new DateTime())->d + 1;
    }
