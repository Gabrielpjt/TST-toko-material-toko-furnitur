<?php

declare (strict_types=1);
namespace RectorPrefix202311;

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([SetList::PHP_80, LevelSetList::UP_TO_PHP_74]);
    // parameter must be defined after import, to override imported param version
    $rectorConfig->phpVersion(PhpVersion::PHP_80);
};