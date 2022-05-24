<?php

namespace src;

class Task5
{
    final public function numberOfDigits($n): int
    {
//        $phi = (1+sqrt(5))/2;
//
//        if ($n == 1)
//            return 1;

        // Get length of the n-th Fibonacci number
//        $d = $n * log10($phi) - log10(sqrt(5)) / 2;

        // Get the n-th Fibonacci number from the length. TODO: implement it.
//        echo ($d + log10(sqrt(5)) / 2) / log10($phi) . PHP_EOL;
//
//        return ceil($d);

        throw new \Exception('Not implemented yet');
    }

    final public function main(int $n): int
    {
        return $this->numberOfDigits($n);
    }
}
