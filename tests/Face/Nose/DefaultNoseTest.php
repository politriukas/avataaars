<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Nose;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Nose\DefaultNose;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class DefaultNoseTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new DefaultNose())->generate(), new GeneratesSvgConstraint('<g fill-opacity="0.16" transform="translate(28.000000, 40.000000)"><path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" /></g>'));
    }
}
