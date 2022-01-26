<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Disbelief;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class DisbeliefTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Disbelief())->generate(), new GeneratesSvgConstraint('<g fill="#000000" fill-opacity="0.699999988" transform="translate(2.000000, 52.000000)"><path d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15" transform="translate(54.000000, 22.000000) scale(1, -1) translate(-54.000000, -22.000000)" /></g>'));
    }
}
