<?php

namespace App\Enum;

enum Role: string
{
    case ADMIN = 'admin';
    case TEACHER = 'teacher';
    case PARENT = 'parent';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::TEACHER => 'Teacher',
            self::PARENT => 'Parent',
        };

    }


}
