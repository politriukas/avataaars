<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Serious;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SeriousTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Serious())->generate(), new GeneratesSvgConstraint('<g fill="#000000" fill-opacity="0.699999988" transform="translate(2.000000, 52.000000)"><rect height="6" rx="3" width="24" x="42" y="18" /></g>'));
    }
}
