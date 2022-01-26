<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Sad;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SadTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Sad())->generate(), new GeneratesSvgConstraint('<g fill="#000000" fill-opacity="0.699999988" transform="translate(2.000000, 52.000000)"><path d="M40.0582943,16.6539438 C40.7076459,23.6831146 46.7016363,28.3768187 54,28.3768187 C61.3416045,28.3768187 67.3633339,23.627332 67.9526838,16.5287605 C67.9840218,16.1513016 67.0772329,15.8529531 66.6289111,16.077395 C61.0902255,18.8502083 56.8805885,20.2366149 54,20.2366149 C51.1558456,20.2366149 47.0072148,18.8804569 41.5541074,16.168141 C41.0473376,15.9160792 40.0197139,16.2363147 40.0582943,16.6539438 Z" transform="translate(54.005357, 22.188409) scale(1, -1) translate(-54.005357, -22.188409)" /></g>'));
    }
}
