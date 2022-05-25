<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    final public function main(string $json): string
    {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY);

        if (!is_array($data)) {
            throw new InvalidArgumentException('Invalid JSON');
        }

        $parsed = [];

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $parsed[] = $this->main(json_encode($value, JSON_THROW_ON_ERROR));
            } else {
                if (is_int($value)) {
                    throw new InvalidArgumentException('Invalid value type');
                }
                $parsed[] = $key . ': ' . $value;
            }
        }

        return implode(PHP_EOL, $parsed);
    }
}
