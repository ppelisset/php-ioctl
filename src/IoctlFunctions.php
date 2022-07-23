<?php

namespace Ioctl;

use FFI;

final class IoctlFunctions
{
    private static FFI $ffi;

    public static function ioctl(int $fd, int $request, mixed ...$values)
    {
        return self::getFFI()->ioctl($fd, $request, ...$values);
    }

    private static function getFFI(): FFI
    {
        if (is_null(self::$ffi)) {
            self::createFFI();
        }
        return self::$ffi;
    }

    private static function createFFI(): void
    {
        self::$ffi = FFI::load(__DIR__ . "/header.h");
    }
}