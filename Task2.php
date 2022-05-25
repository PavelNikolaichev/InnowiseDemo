<?php

namespace src;

use InvalidArgumentException;

class Task2
{
    final public function main(string $date): int
    {
        $format = 'd-m-Y';
        $timed_date = date_create_from_format($format, $date);
        $curr_date = date_create_from_format($format, date($format));

        if ($timed_date === false) {
            throw new InvalidArgumentException("Wrong date format. Use: $format");
        }

        if (!checkdate($timed_date->format('m'), $timed_date->format('d'), $timed_date->format('Y'))) {
            throw new InvalidArgumentException("Wrong date format. Use: $format");
        }

        if ($curr_date > $timed_date) {
            $timed_date = date_create_from_format($format, date($format, strtotime('+1 year', $timed_date->getTimestamp())));
        }

        return $timed_date->diff($curr_date)->days;
    }
}
