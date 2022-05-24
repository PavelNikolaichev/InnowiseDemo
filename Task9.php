<?php

namespace src;

class Task9
{
    final public function main(array $arr, int $number): array
    {
        $result=[];

        for ($x = 0; $x < count($arr) - 2; $x++) {
            if ($arr[$x] + $arr[$x+1] + $arr[$x+2] === $number) {
                $result[] = "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = {$number}";
            }
        }

        return $result;
    }
}
