<?php

namespace Ioctl\PlatformSpecific;

final class PlatformSpecific extends BasePlatformSpecific
{
    public const TIOCMBIS = 0x00005416;
    public const TIOCMBIC = 0x00005417;
    public const TIOCM_DTR = 0x00000002;
    public const TIOCM_RTS = 0x00000004;
}
