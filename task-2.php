<?php

    function getBirthdayCountdown ( string $birthdayDate ): int
    {
        $curDate = new DateTime();

        $birthdayDate = DateTime::createFromFormat('d-m-Y', $birthdayDate);

        $birthdayDate->setDate(2023, $birthdayDate->format('m'), $birthdayDate->format('d'));

        return $curDate->diff($birthdayDate)->days;
    }