<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Grimace;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class GrimaceTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Grimace())->generate(), new GeneratesSvgConstraint('<g transform="translate(2.000000, 52.000000)"><defs><rect height="22" id="path-1" rx="11" width="60" x="24" y="9" /></defs><rect fill="#000000" fill-opacity="0.599999964" fill-rule="evenodd" height="26" rx="13" width="64" x="22" y="7" /><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#path-1" /><path d="M71,22 L62,22 L62,34 L58,34 L58,22 L49,22 L49,34 L45,34 L45,22 L36,22 L36,34 L32,34 L32,22 L24,22 L24,18 L32,18 L32,6 L36,6 L36,18 L45,18 L45,6 L49,6 L49,18 L58,18 L58,6 L62,6 L62,18 L71,18 L71,6 L75,6 L75,18 L83.8666667,18 L83.8666667,22 L75,22 L75,34 L71,34 L71,22 Z" fill="#E6E6E6" fill-rule="evenodd" mask="url(#mask-2)" /></g>'));
    }
}
