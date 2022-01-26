<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\Surprised;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SurprisedTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Surprised())->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 8.000000)"><circle cx="30" cy="22" fill="#FFFFFF" r="14" /><circle cx="82" cy="22" fill="#FFFFFF" r="14" /><circle cx="30" cy="22" fill="#000000" fill-opacity="0.699999988" r="6" /><circle cx="82" cy="22" fill="#000000" fill-opacity="0.699999988" r="6" /></g>'));
    }
}
