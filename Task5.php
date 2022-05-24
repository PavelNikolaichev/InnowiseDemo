<?php

namespace src;

class Task5
{
    final public function getLen(int $n): int
    {
        if ($n === 1) {
            return 1;
        }

        $phi = (1 + sqrt(5)) / 2;

        return ceil($n * log10($phi) - log10(sqrt(5)) / 2);
    }

    final public function numberOfDigits(int $n): int
    {
        $cursor = $n * 3;

        while ($cursor > 0) {
            if ($this->getLen($cursor) === $n) {
                if ($this->getLen($cursor - 1) !== $n) {
                    return $this->getFibonacci($cursor + 1);
                }

                $cursor--;
            } elseif ($this->getLen($cursor) < $n) {
                $cursor++;
            } else {
                $cursor--;
            }
        }

        return 0;
    }

    final public function main(int $n): int
    {
        return $this->numberOfDigits($n);
    }

    private function getFibonacci(int $n): int
    {
        $phi = (1 + sqrt(5)) / 2;

        return round($phi ** $n / sqrt(5));
    }
}
