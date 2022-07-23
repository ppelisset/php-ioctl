<?php

namespace Ioctl\PlatformSpecific;

final class PlatformSpecific extends BasePlatformSpecific {
    public const TIOCMBIS = 0x8004746c;
    public const TIOCMBIC = 0x8004746b;
    public const TIOCM_DTR = 0x00000002;
    public const TIOCM_RTS = 0x00000004;
}

