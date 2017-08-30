<?php

namespace App\Services;

class TodoFormatter
{
    public static function format(string $task): string
    {
        return ucfirst(trim($task)) . '.';
    }
}
