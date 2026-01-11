<?php

namespace App\Enum;

enum StatusAttadance: string
{
    case PRESENT = 'present';
    case ABSENT = 'absent';
    public function label(): string
    {
        return match ($this) {
            self::PRESENT => 'Present',
            self::ABSENT => 'Absent',
        };
    }
}
