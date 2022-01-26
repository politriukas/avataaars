<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Blank as BlankAccessory;
use Politriukas\Avataaars\Top\FacialHair\Blank as BlankFacialHair;
use Politriukas\Avataaars\Top\HatColor;
use Politriukas\Avataaars\Top\WinterHat1;

final class WinterHat1Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new WinterHat1(HatColor::PastelGreen, new BlankFacialHair(), new BlankAccessory()))->generate(), new GeneratesSvgConstraint('<g><defs><rect height="280" id="path-3" width="264" x="0" y="0" /><path d="M120,54 L20,54 L20,155 C20,160.522847 15.5228475,165 10,165 C4.4771525,165 6.76353751e-16,160.522847 0,155 L0,54 L0,44 C-2.9759565e-15,19.699471 19.699471,4.46393476e-15 44,0 L96,0 C120.300529,-4.46393476e-15 140,19.699471 140,44 L140,54 L140,155 C140,160.522847 135.522847,165 130,165 C124.477153,165 120,160.522847 120,155 L120,54 Z" id="path-1" /><filter filterUnits="objectBoundingBox" height="111.1%" id="filter-6" width="101.7%" x="-0.8%" y="-2.8%"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1" /><feColorMatrix in="shadowOffsetOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.1 0" /></filter><rect height="36" id="path-2" rx="8" width="118" x="74" y="50" /></defs><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-3" /></mask><g transform="translate(-1.000000, 0.000000)"><g fill-rule="evenodd" stroke-width="1" transform="translate(63.000000, 20.000000)"><path d="M1,48 L23.6714286,48 L23.6714286,153.664286 C23.6714286,159.924828 18.5962564,165 12.3357143,165 C6.07517216,165 1,159.924828 1,153.664286 L1,48 Z M116.328571,48 L139,48 L139,153.664286 C139,159.924828 133.924828,165 127.664286,165 C121.403744,165 116.328571,159.924828 116.328571,153.664286 L116.328571,48 Z" fill="#F4F4F4" /><mask fill="#FFFFFF" id="mask-5"><use xlink:href="#path-1" /></mask><use fill="#D8D8D8" xlink:href="#path-1" /><g fill="#A7FFC4" fill-rule="evenodd" mask="url(#mask-5)"><rect height="280" width="264" x="0" y="0" /></g></g><g><use fill="#000000" fill-opacity="1" filter="url(#path-2)" xlink:href="#path-2" /><use fill="#F4F4F4" fill-rule="evenodd" xlink:href="#path-2" /></g></g></g>'));
    }
}
