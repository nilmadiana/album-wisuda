<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

class Jurusan
{
    const S1_PENDIDIKAN_AGAMA_ISLAM = 's1_pendidikan_agama_islam';
    const S1_MANAJEMEN_PENDIDIKAN_AGAMA_ISLAM = 's1_manajemen_pendidikan_agama_islam';
    const S1_PENDIDIKAN_GURU_MADRASAH_IBTIDAIYAH = 's1_pendidikan_guru_madrasah_ibtidaiyah';
    const S2_PENDIDIKAN_AGAMA_ISLAM = 's2_pendidikan_agama_islam';

    public static function getValues()
    {
        return [
            self::S1_PENDIDIKAN_AGAMA_ISLAM,
            self::S1_MANAJEMEN_PENDIDIKAN_AGAMA_ISLAM,
            self::S1_PENDIDIKAN_GURU_MADRASAH_IBTIDAIYAH,
            self::S2_PENDIDIKAN_AGAMA_ISLAM,
        ];
    }

    public static function getLabels()
    {
        return [
            self::S1_PENDIDIKAN_AGAMA_ISLAM => 'S1 Pendidikan Agama Islam',
            self::S1_MANAJEMEN_PENDIDIKAN_AGAMA_ISLAM => 'S1 Manajemen Pendidikan Agama Islam',
            self::S1_PENDIDIKAN_GURU_MADRASAH_IBTIDAIYAH => 'S1 Pendidikan Guru Madrasah Ibtidaiyah',
            self::S2_PENDIDIKAN_AGAMA_ISLAM => 'S2 Pendidikan Agama Islam',
        ];
    }
}