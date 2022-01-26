<?php

declare(strict_types=1);

namespace Politriukas\Avataaars;

use function sprintf;

final class AvatarGlobalId
{
    private static int $counter = 0;

    public static function get(string $prefix): string
    {
        return sprintf('%s%d', $prefix, ++self::$counter);
    }
}
