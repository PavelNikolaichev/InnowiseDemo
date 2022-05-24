<?php

namespace src;

class Task2
{
    final public function main(string $date): int
    {
        $format = "d.m.Y";
        $timed_date = date_create_from_format($format, $date);

        if (strtotime($date) === false) {
            throw new \InvalidArgumentException("Wrong date format. Use: $format");
        }

        return date_diff(date_create_from_format($format, date($format)), $timed_date)->d;
    }
}
