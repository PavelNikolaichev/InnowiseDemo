<?php

namespace src;

class Task10
{
    final public function main(int $input): array
    {
        $result = [$input];

        while ($input !== 1) {
            if ($input % 2 === 0) {
                $input /= 2;
            } else {
                $input = $input * 3 + 1;
            }

            $result[] = $input;
        }

        return $result;
    }
}
