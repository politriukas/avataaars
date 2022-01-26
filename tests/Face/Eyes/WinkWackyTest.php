<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\WinkWacky;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class WinkWackyTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new WinkWacky())->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 8.000000)"><circle cx="82" cy="22" fill="#FFFFFF" r="12" /><circle cx="82" cy="22" fill="#000000" fill-opacity="0.699999988" r="6" /><path d="M16.1601674,25.4473116 C18.006676,21.648508 22.1644225,19 26.9975803,19 C31.8136766,19 35.9591217,21.629842 37.8153518,25.4071242 C38.3667605,26.5291977 37.5821037,27.4474817 36.790607,26.7670228 C34.3395063,24.6597833 30.8587163,23.3437884 26.9975803,23.3437884 C23.2572061,23.3437884 19.8737584,24.5787519 17.4375392,26.5716412 C16.5467928,27.3002944 15.6201012,26.5583844 16.1601674,25.4473116 Z" fill="#000000" fill-opacity="0.599999964" /></g>'));
    }
}
