<?php

namespace App\Enum;

enum StatusStudent: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::PENDING => 'Pending',
        };
    }
    public function bgColor(): string
    {
        return match ($this) {
            self::ACTIVE => 'bg-green-500 text-white',
            self::INACTIVE => 'bg-red-500 text-white',
            self::PENDING => 'bg-yellow-500 text-white',
        };
    }

    public function icon()
    {
        return match ($this) {
            self::ACTIVE => 'check-circle',
            self::INACTIVE => 'x-circle',
            self::PENDING => 'clock',
        };
    }
}
