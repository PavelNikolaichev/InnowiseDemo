<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    final public function main(int $inputNumber): int
    {
        if (strlen($inputNumber) === 1) {
            throw new InvalidArgumentException('Input number must have more than 1 digit and be an integer');
        }
        if ($inputNumber < 0) {
            throw new InvalidArgumentException('Input number must be positive');
        }

        while (strlen($inputNumber) > 1) {
            $inputNumber = array_sum(str_split($inputNumber));
        }

        return $inputNumber;
    }
}
