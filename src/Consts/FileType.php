<?php

namespace App\Consts;

class FileType
{
    const JPEG = 'image/jpeg';
    const PNG = 'image/png';
    const JPG = 'image/jpg';

    const ALL = [
        self::JPEG,
        self::PNG,
        self::JPG,
    ];
}