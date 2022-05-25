<?php

namespace src;

use InvalidArgumentException;

class Task12
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    final public function add(): Task12
    {
        return new Task12($this->a + $this->b, $this->b);
    }

    final public function addBy(int $num): Task12
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Input values must be positive');
        }

        return new Task12($this->a + $num, $this->b);
    }

    final public function subtract(): Task12
    {
        return new Task12($this->a - $this->b, $this->b);
    }

    final public function subtractBy(int $num): Task12
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Input values must be positive');
        }

        return new Task12($this->a - $num, $this->b);
    }

    final public function multiply(): Task12
    {
        return new Task12($this->a * $this->b, $this->b);
    }

    final public function multiplyBy(int $num): Task12
    {
        if ($num < 0) {
            throw new InvalidArgumentException('Input values must be positive');
        }

        return new Task12($this->a * $num, $this->b);
    }

    final public function divide(): Task12
    {
        if ($this->b === 0) {
            throw new InvalidArgumentException('Input values must be non-zero');
        }

        return new Task12($this->a / $this->b, $this->b);
    }

    final public function divideBy(int $num): Task12
    {
        if ($num === 0) {
            throw new InvalidArgumentException('Input values must be non-zero');
        }

        return new Task12($this->a / $num, $this->b);
    }

    final public function __toString(): string
    {
        return $this->a;
    }

    final public function main(): void
    {
        throw new \Exception('Not implemented, this method is unnecessary');
    }
}
