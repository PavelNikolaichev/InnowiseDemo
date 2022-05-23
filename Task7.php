<?php

namespace src;

class Task7
{
    final public function main(array $arr, int $position): array
    {
        array_splice($arr, $position, 1);

        return $arr;
    }
}
