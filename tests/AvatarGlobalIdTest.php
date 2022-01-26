<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\AvatarGlobalId;

final class AvatarGlobalIdTest extends TestCase
{
    public function testGet(): void
    {
        self::assertSame('1', AvatarGlobalId::get(''));
        self::assertSame('path-2', AvatarGlobalId::get('path-'));
        self::assertSame('mask-3', AvatarGlobalId::get('mask-'));
        self::assertSame('filter-4', AvatarGlobalId::get('filter-'));
        self::assertSame('linear-gradient5', AvatarGlobalId::get('linear-gradient'));
    }
}
