<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top\FacialHair;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\FacialHair\FacialHairColor;
use Politriukas\Avataaars\Top\FacialHair\MoustacheFancy;

final class MoustacheFancyTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new MoustacheFancy(FacialHairColor::Brown))->generate(), new GeneratesSvgConstraint('<g transform="translate(49.000000, 72.000000)"><defs><path d="M84.0002865,69.2970648 C77.2083681,65.7112456 67.5782013,65.1489138 62.3885276,67.1316942 C56.6144416,69.3374281 51.5052994,75.5829845 42.6388201,72.8283797 C42.2699314,72.7136458 41.9094725,73.0449523 42.0204089,73.408662 C43.3937943,77.9183313 51.0278347,81.0068878 53.6221945,81.1080652 C64.961124,81.549609 74.0949802,72.8302891 84.0002865,72.1614794 C93.9055921,72.8302891 103.03945,81.549609 114.378714,81.1080652 C116.972736,81.0068878 124.607113,77.9183313 125.980498,73.408662 C126.091098,73.0449523 125.730639,72.7136458 125.36175,72.8283797 C116.495271,75.5829845 111.386129,69.3374281 105.612044,67.1316942 C100.422371,65.1489138 90.7922044,65.7112456 84.0002865,69.2970648 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#28354B" fill-rule="evenodd" xlink:href="#path-1" /><g fill="#724133" mask="url(#mask-2)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g></g>'));
    }
}
