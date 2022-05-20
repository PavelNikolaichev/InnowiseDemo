<?php

namespace src;

class Task3
{
    final public function main(int $inputNumber): int
    {
        if ($inputNumber < 0) {
            $inputNumber = abs($inputNumber);
        }

        while (strlen($inputNumber) > 1) {
            $inputNumber = array_sum(str_split($inputNumber));
        }

        return $inputNumber;
    }
}
