<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    final public function main(array $arr, int $number): array
    {
        if ($number === 0) {
            throw new InvalidArgumentException('Number should be higher than 0');
        }

        foreach ($arr as $value) {
            if ($value < 0) {
                throw new InvalidArgumentException('Array elements should be positive');
            }
        }

        $result = [];

        for ($x = 0; $x < count($arr) - 2; $x++) {
            if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] === $number) {
                $result[] = ["{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = {$number}"];
            }
        }

        if (count($result) === 0) {
            throw new InvalidArgumentException('Sum is too high to find');
        }

        return $result;
    }
}
