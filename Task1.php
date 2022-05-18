<?php

namespace src;

class Task1
{
    final public function main(int $inputNumber): string
    {
        $values = ['More than 30', 'More than 20', 'More than 10', 'Less than 10'];

        return $inputNumber > 30 ? $values[0] : ($inputNumber > 20 ? $values[1] : ($inputNumber > 10 ? $values[2] : $values[3]));
    }
}
