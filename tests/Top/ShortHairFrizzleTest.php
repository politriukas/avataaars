<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Blank as BlankAccessory;
use Politriukas\Avataaars\Top\FacialHair\Blank as BlankFacialHair;
use Politriukas\Avataaars\Top\HairColor;
use Politriukas\Avataaars\Top\ShortHairFrizzle;

final class ShortHairFrizzleTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new ShortHairFrizzle(HairColor::BlondeGolden, new BlankFacialHair(), new BlankAccessory()))->generate(), new GeneratesSvgConstraint('<g fill-rule="evenodd" stroke-width="1"><defs><rect height="280" id="path-2" width="264" x="0" y="0" /><path d="M90.9102919,55.3613196 L175.085702,55.3613196 C193.333279,44.8338001 196.759397,26.1510357 183.849606,9.92600089 C180.635746,5.88682054 175.085702,21.6755614 158.028596,22.6504878 C140.97149,23.6254143 142.608865,16.3498661 124.45759,19.0739248 C106.306316,21.7979835 108.311575,36.37843 96.4671989,39.8768239 C88.5709482,42.2090865 86.7186458,47.370585 90.9102919,55.3613196 Z" id="path-1" /><filter filterUnits="objectBoundingBox" height="108.0%" id="filter-5" width="101.5%" x="-0.8%" y="-2.0%"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1" /><feColorMatrix in="shadowOffsetOuter1" result="shadowMatrixOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" /><feMerge><feMergeNode in="shadowMatrixOuter1" /><feMergeNode in="SourceGraphic" /></feMerge></filter></defs><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-2" /></mask><g mask="url(#mask-4)"><g transform="translate(-1.000000, 0.000000)"><mask fill="#FFFFFF" id="mask-3"><use xlink:href="#path-1" /></mask><use fill="#252E32" fill-rule="evenodd" stroke="none" xlink:href="#path-1" /><g fill="#D6B370" mask="url(#mask-3)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g></g></g></g>'));
    }
}
