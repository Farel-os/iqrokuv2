<?php

namespace App\Enum;

enum LevelTPA: string
{
    case IQRO1 = 'iqro_1';
    case IQRO2 = 'iqro_2';
    case IQRO3 = 'iqro_3';
    case IQRO4 = 'iqro_4';
    case IQRO5 = 'iqro_5';
    case IQRO6 = 'iqro_6';
    case TAHSIN = 'tahsin';
    case BELUM = 'belum';

    public function label()
    {
        return match ($this) {
            self::BELUM => 'Belum',
            self::IQRO1 => 'Iqro 1',
            self::IQRO2 => 'Iqro 2',
            self::IQRO3 => 'Iqro 3',
            self::IQRO4 => 'Iqro 4',
            self::IQRO5 => 'Iqro 5',
            self::IQRO6 => 'Iqro 6',
            self::TAHSIN => 'Tahsin',
        };
    }
}
