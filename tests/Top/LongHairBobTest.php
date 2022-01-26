<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Blank as BlankAccessory;
use Politriukas\Avataaars\Top\FacialHair\Blank as BlankFacialHair;
use Politriukas\Avataaars\Top\HairColor;
use Politriukas\Avataaars\Top\LongHairBob;

final class LongHairBobTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new LongHairBob(HairColor::Black, new BlankFacialHair(), new BlankAccessory()))->generate(), new GeneratesSvgConstraint('<g fill-rule="evenodd" stroke-width="1"><defs><rect height="280" id="path-1" width="264" x="0" y="0" /><path d="M38,79.3595521 L38,111 C38,133.339168 51.0804213,152.623239 70,161.610951 L70,174.74565 C50.3625813,177.434228 34.6409914,182.163507 23.3845374,181.000327 C9.16164761,179.530612 1.49623627,150.795665 1,126 C0.382878875,95.1640258 29.3189583,30.7950013 40,18 C47.9231015,8.50878211 69.6952966,0.550643437 94.0001685,1 C118.30504,1.44935656 140.861928,6.81215989 149.000169,17 C161.324059,32.4276364 186.868727,91.0786423 187.000169,126 C187.093514,150.800049 177.46255,175.65995 164.000169,177 C152.920532,178.102871 137.475571,175.511343 118,173.997342 L118,161.610951 C136.919579,152.623239 150,133.339168 150,111 L150,82.9882378 C140.478735,78.1305678 131.863294,72.248172 124.153679,65.3410505 C127.362309,70.6368571 130.848786,75.1475352 134.61311,78.8730846 C107.596314,71.2928169 86.1055278,58.4501118 70.1407506,40.3449693 C62.1597317,56.8095313 51.4461487,69.8143919 38.0000014,79.3595511 Z" id="path-2" /></defs><mask fill="#FFFFFF" id="mask-3"><use xlink:href="#path-1" /></mask><g mask="url(#mask-3)"><g transform="translate(-1.000000, 0.000000)"><g fill-rule="evenodd" stroke-width="1" transform="translate(39.000000, 19.000000)"><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-2" /></mask><use fill="#E6E6E6" xlink:href="#path-2" /><g fill="#2C1B18" mask="url(#mask-4)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g></g></g></g></g>'));
    }
}
