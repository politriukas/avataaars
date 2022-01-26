<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Tongue;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class TongueTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Tongue())->generate(), new GeneratesSvgConstraint('<g transform="translate(2.000000, 52.000000)"><defs><path d="M29,15.6086957 C30.410031,25.2313711 41.062182,33 54,33 C66.9681454,33 77.6461342,25.183301 79,14.7391304 C79.1012093,14.3397326 78.775269,13 76.826087,13 C56.838426,13 41.7395748,13 31.173913,13 C29.3833142,13 28.870211,14.2404669 29,15.6086957 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#000000" fill-opacity="0.699999988" fill-rule="evenodd" xlink:href="#path-1" /><rect fill="#FFFFFF" fill-rule="evenodd" height="16" mask="url(#mask-2)" rx="5" width="31" x="39" y="2" /><path d="M65.9841079,23.7466656 C65.9945954,23.8296335 66,23.9141856 66,24 L66,33 C66,39.0751322 61.0751322,44 55,44 L54,44 C47.9248678,44 43,39.0751322 43,33 L43,24 L43,24 C43,23.9141856 43.0054046,23.8296335 43.0158921,23.7466656 C43.0053561,23.6651805 43,23.5829271 43,23.5 C43,21.5670034 45.9101491,20 49.5,20 C51.510438,20 53.3076958,20.4914717 54.5,21.2634601 C55.6923042,20.4914717 57.489562,20 59.5,20 C63.0898509,20 66,21.5670034 66,23.5 C66,23.5829271 65.9946439,23.6651805 65.9841079,23.7466656 Z" fill="#FF4F6D" fill-rule="evenodd" /></g>'));
    }
}
