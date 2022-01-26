<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\ClothingColor;
use Politriukas\Avataaars\Clothing\Overall;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class OverallTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Overall(ClothingColor::PastelYellow))->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 170.000000)"><defs><path d="M94,29.6883435 L94,74 L170,74 L170,29.6883435 C179.362956,30.9893126 188.149952,34.0907916 196.00002,38.6318143 L196,110 L187,110 L77,110 L68,110 L68,38.6318027 C75.8500482,34.0907916 84.6370437,30.9893126 94,29.6883435 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#B7C1DB" fill-rule="evenodd" xlink:href="#path-1" /><g fill="#FFFFB1" fill-rule="evenodd" mask="url(#mask-2)"><g transform="translate(0.000000, 0.000000)"><rect height="110" width="264" x="0" y="0" /></g></g><circle cx="81" cy="83" fill="#F4F4F4" fill-rule="evenodd" r="5" /><circle cx="183" cy="83" fill="#F4F4F4" fill-rule="evenodd" r="5" /></g>'));
    }
}
