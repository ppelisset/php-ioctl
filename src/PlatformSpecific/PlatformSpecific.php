<?php

$platform = ucfirst(php_uname('s'));
$platformSpecificFile = __DIR__ . "/" . $platform . "PlatformSpecific.php";
if (file_exists($platformSpecificFile)) {
    require_once $platformSpecificFile;
} else {
    require_once __DIR__ . "/NonePlatformSpecific.php";
}