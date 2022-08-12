<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace Ioctl;

use FFI\CData;
use Ioctl\PlatformSpecific\PlatformSpecific;

final class Ioctl
{
    public const TIOCMBIS = PlatformSpecific::TIOCMBIS;
    public const TIOCMBIC = PlatformSpecific::TIOCMBIC;
    public const TIOCM_DTR = PlatformSpecific::TIOCM_DTR;
    public const TIOCM_RTS = PlatformSpecific::TIOCM_RTS;

    public static function has($attribute): bool
    {
        return $attribute !== 0;
    }

    public static function attr(mixed $attribute, mixed $defaultValue): mixed
    {
        return self::has($attribute) ? $attribute : $defaultValue;
    }

    public static function ioctl(int $fd, int $request, mixed ...$values): mixed
    {
        return IoctlFunctions::ioctl($fd, $request, ...$values);
    }
}