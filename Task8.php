<?php

namespace src;

class Task8
{
    final public function main(string $json): array
    {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY);

        return $data;
    }
}
