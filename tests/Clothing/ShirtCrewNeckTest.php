<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\ClothingColor;
use Politriukas\Avataaars\Clothing\ShirtCrewNeck;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class ShirtCrewNeckTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new ShirtCrewNeck(ClothingColor::Red))->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 170.000000)"><defs><path d="M165.960472,29.2949161 C202.936473,32.3249982 232,63.2942856 232,101.051724 L232,110 L32,110 L32,101.051724 C32,62.9525631 61.591985,31.7649812 99.0454063,29.2195264 C99.0152598,29.5931145 99,29.9692272 99,30.3476251 C99,42.2107177 113.998461,51.8276544 132.5,51.8276544 C151.001539,51.8276544 166,42.2107177 166,30.3476251 C166,29.9946691 165.986723,29.6437014 165.960472,29.2949161 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#E6E6E6" fill-rule="evenodd" xlink:href="#path-1" /><g fill="#FF5C5C" fill-rule="evenodd" mask="url(#mask-2)"><g transform="translate(0.000000, 0.000000)"><rect height="110" width="264" x="0" y="0" /></g></g><g fill="#000000" fill-opacity="0.16" fill-rule="evenodd" mask="url(#mask-2)" opacity="0.599999964" stroke-width="1"><g transform="translate(92.000000, 4.000000)"><ellipse cx="40.5" cy="27.8476251" rx="39.6351047" ry="26.9138272" /></g></g></g>'));
    }
}
