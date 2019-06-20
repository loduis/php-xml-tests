<?php

declare(strict_types=1);

namespace XML\Tests;

class Cert
{
    public static function file($ext)
    {
        $filename = strpos($ext, '.') === false ? 'cert.' . $ext : $filename;

        return __DIR__ . '/../utils/' . $filename;
    }

    public function content($ext)
    {
        return file_get_contents(static::file($ext));
    }
}
