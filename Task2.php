<?php

namespace src;

use http\Exception\InvalidArgumentException;

class Task2
{
    public function main(string $date): int
    {
        $format = "d.m.Y";
        $timed_date = strtotime($date);

        if (date($format, $timed_date) === date($date)) {
            return strtotime('today')->diff($timed_date)->days;
        }

        throw new InvalidArgumentException("Wrong date format. Use: $format");
    }
}
