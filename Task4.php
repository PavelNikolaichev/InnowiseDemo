<?php

namespace src;

class Task4
{
    final public function main(string $input): string
    {
        $delims = ['_', '-', ' '];

        $input = ucwords(str_replace($delims, ' ', $input), ' ');

        return str_replace(' ', '', $input);
    }
}
