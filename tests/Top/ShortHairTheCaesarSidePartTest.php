<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Blank as BlankAccessory;
use Politriukas\Avataaars\Top\FacialHair\Blank as BlankFacialHair;
use Politriukas\Avataaars\Top\HairColor;
use Politriukas\Avataaars\Top\ShortHairTheCaesarSidePart;

final class ShortHairTheCaesarSidePartTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new ShortHairTheCaesarSidePart(HairColor::SilverGray, new BlankFacialHair(), new BlankAccessory()))->generate(), new GeneratesSvgConstraint('<g fill-rule="evenodd" stroke-width="1"><defs><rect height="280" id="path-1" width="264" x="0" y="0" /><path d="M82.0179468,24.3784638 C74.9860629,23.6847351 66.6573358,23.2514721 58.3126144,23.245568 C39.0082164,23.2319099 19.618222,25.4833872 16,28 C6.29594493,35.2480719 2.53726005,62.445722 3,64 C2.67275588,65.2226722 1.34685629,65.488448 1,64 C0.280821545,53.7019177 1,1.72563718 58,1 C115,0.274362825 115.719178,53.7019177 115,64 C114.653144,65.488448 113.327244,65.2226722 113,64 C113.46274,62.445722 109.704055,35.2480719 100,28 C98.2407122,26.7763475 92.7526689,25.6101897 85.3587425,24.7390449 L89,16 L82.0179468,24.3784638 Z" id="path-2" /><filter filterUnits="objectBoundingBox" height="108.0%" id="filter-5" width="101.5%" x="-0.8%" y="-2.0%"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1" /><feColorMatrix in="shadowOffsetOuter1" result="shadowMatrixOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" /><feMerge><feMergeNode in="shadowMatrixOuter1" /><feMergeNode in="SourceGraphic" /></feMerge></filter></defs><mask fill="#FFFFFF" id="mask-3"><use xlink:href="#path-1" /></mask><g mask="url(#mask-3)"><g transform="translate(-1.000000, 0.000000)"><g fill-rule="evenodd" stroke-width="1" transform="translate(75.000000, 34.000000)"><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-2" /></mask><use fill="#28354B" xlink:href="#path-2" /><g fill="#E8E1E1" mask="url(#mask-4)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g></g></g></g></g>'));
    }
}
