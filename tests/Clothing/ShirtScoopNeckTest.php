<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\ClothingColor;
use Politriukas\Avataaars\Clothing\ShirtScoopNeck;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class ShirtScoopNeckTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new ShirtScoopNeck(ClothingColor::Heather))->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 170.000000)"><defs><path d="M181.544255,32.3304167 C210.784209,41.4878872 232,68.7921987 232,101.051724 L232,110 L32,110 L32,101.051724 C32,68.3969699 53.7388273,40.8195914 83.5340368,32.0020332 C83.182234,33.4201865 83,34.8712315 83,36.3476251 C83,52.6289957 105.161905,65.8276544 132.5,65.8276544 C159.838095,65.8276544 182,52.6289957 182,36.3476251 C182,34.9849859 181.844766,33.6439396 181.544255,32.3304167 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#E6E6E6" fill-rule="evenodd" xlink:href="#path-1" /><g fill="#3C4F5C" fill-rule="evenodd" mask="url(#mask-2)"><g transform="translate(0.000000, 0.000000)"><rect height="110" width="264" x="0" y="0" /></g></g></g>'));
    }
}
