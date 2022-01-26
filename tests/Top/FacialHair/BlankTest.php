<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top\FacialHair;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Top\FacialHair\Blank;

final class BlankTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertNull((new Blank())->generate());
    }
}
