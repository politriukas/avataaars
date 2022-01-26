<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\Wink;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class WinkTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Wink())->generate(), new GeneratesSvgConstraint('<g fill-opacity="0.599999964" transform="translate(0.000000, 8.000000)"><circle cx="30" cy="22" r="6" /><path d="M70.4123979,24.204889 C72.2589064,20.4060854 76.4166529,17.7575774 81.2498107,17.7575774 C86.065907,17.7575774 90.2113521,20.3874194 92.0675822,24.1647016 C92.618991,25.2867751 91.8343342,26.2050591 91.0428374,25.5246002 C88.5917368,23.4173607 85.1109468,22.1013658 81.2498107,22.1013658 C77.5094365,22.1013658 74.1259889,23.3363293 71.6897696,25.3292186 C70.7990233,26.0578718 69.8723316,25.3159619 70.4123979,24.204889 Z" transform="translate(81.252230, 21.757577) rotate(-4.000000) translate(-81.252230, -21.757577)" /></g>'));
    }
}