<?php

namespace src;

use InvalidArgumentException;

class Task12
{
    public int $a;
    private int $b;
    private ?int $c;

    public function __construct(int $a, int $b, ?int $c = null)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    final public function add(): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c + $this->b);
        }

        return new Task12($this->a, $this->b, $this->a + $this->b);
    }

    final public function addBy(int $num): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c + $num);
        }

        return new Task12($this->a, $this->b, $this->a + $num);
    }

    final public function subtract(): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c - $this->b);
        }

        return new Task12($this->a, $this->b, $this->a - $this->b);
    }

    final public function subtractBy(int $num): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c - $num);
        }

        return new Task12($this->a, $this->b, $this->a - $num);
    }

    final public function multiply(): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c * $this->b);
        }

        return new Task12($this->a, $this->b, $this->a * $this->b);
    }

    final public function multiplyBy(int $num): Task12
    {
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c * $num);
        }

        return new Task12($this->a, $this->b, $this->a * $num);
    }

    final public function divide(): Task12
    {
        if ($this->b === 0) {
            throw new InvalidArgumentException('Input values must be non-zero');
        }
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c + $this->b);
        }

        return new Task12($this->a, $this->b, $this->a / $this->b);
    }

    final public function divideBy(int $num): Task12
    {
        if ($num === 0) {
            throw new InvalidArgumentException('Input values must be non-zero');
        }
        if ($this->c) {
            return new Task12($this->a, $this->b, $this->c / $num);
        }

        return new Task12($this->a, $this->b, $this->a / $num);
    }

    final public function __toString(): string
    {
        return $this->c;
    }

    final public function main(): void
    {
        throw new \Exception('Not implemented, this method is unnecessary');
    }
}
