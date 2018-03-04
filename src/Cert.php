<?php

declare(strict_types=1);

namespace XML\Tests;

class Cert
{
    public static function file($ext)
    {
        return __DIR__ . '/../utils/cert.' . $ext;
    }

    public function content($ext)
    {
        return file_get_contents(static::file($ext));
    }
}
