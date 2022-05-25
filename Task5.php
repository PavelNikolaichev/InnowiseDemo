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

    final public function findByNumberOfDigits(int $n): string
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

    final public function main(int $n): string
    {
        if ($n < 1) {
            throw new \InvalidArgumentException('Input must be a positive integer');
        }

        return sprintf('%0.0f', $this->findByNumberOfDigits($n));
    }

    private function getFibonacci(int $term): float
    {
        $initial = [[1, 1], [1, 0]];
        $final = [[1, 1], [1, 0]];

        if ($term === 0) {
            return 0;
        }

        for ($i = 1; $i < $term ; $i++) {
            $a = $final[0][0] * $initial[0][0] + $final[0][1] * $initial[1][0];
            $b = $final[1][0] * $initial[0][0] + $final[1][1] * $initial[1][0];
            $c = $final[0][0] * $initial[0][1] + $final[0][1] * $initial[1][1];
            $d = $final[1][0] * $initial[0][1] + $final[1][1] * $initial[1][1];

            $final[0][0] = $a;
            $final[1][0] = $b;
            $final[0][1] = $c;
            $final[1][1] = $d;
        }

        return (string) $final[0][1];
    }
}
