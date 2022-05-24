<?php

namespace src;

class MyCalculator
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    final public function add(): MyCalculator
    {
        return new MyCalculator($this->a + $this->b, $this->b);
    }

    final public function addBy(int $num): MyCalculator
    {
        return new MyCalculator($this->a + $num, $this->b);
    }

    final public function subtract(): MyCalculator
    {
        return new MyCalculator($this->a - $this->b, $this->b);
    }

    final public function subtractBy(int $num): MyCalculator
    {
        return new MyCalculator($this->a - $num, $this->b);
    }

    final public function multiply(): MyCalculator
    {
        return new MyCalculator($this->a * $this->b, $this->b);
    }

    final public function multiplyBy(int $num): MyCalculator
    {
        return new MyCalculator($this->a * $num, $this->b);
    }

    final public function divide(): MyCalculator
    {
        return new MyCalculator($this->a / $this->b, $this->b);
    }

    final public function divideBy(int $num): MyCalculator
    {
        return new MyCalculator($this->a / $num, $this->b);
    }

    final public function __toString(): string
    {
        return $this->a;
    }
}
