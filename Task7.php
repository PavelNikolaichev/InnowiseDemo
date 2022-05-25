<?php

namespace src;

class Task7
{
    final public function main(array $arr, int $position): array
    {
        if ($position < 0 || $position >= count($arr)) {
            throw new \InvalidArgumentException('Position is out of array range');
        }
        if ($arr === []) {
            throw new \InvalidArgumentException('Array is empty');
        }

        array_splice($arr, $position, 1);

        return $arr;
    }
}
