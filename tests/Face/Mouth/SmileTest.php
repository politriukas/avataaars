<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Mouth;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Mouth\Smile;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SmileTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Smile())->generate(), new GeneratesSvgConstraint('<g transform="translate(2.000000, 52.000000)"><defs><path d="M35.117844,15.1280772 C36.1757121,24.6198025 44.2259873,32 54,32 C63.8042055,32 71.8740075,24.574136 72.8917593,15.0400546 C72.9736685,14.272746 72.1167429,13 71.042767,13 C56.1487536,13 44.7379213,13 37.0868244,13 C36.0066168,13 35.0120058,14.1784435 35.117844,15.1280772 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#000000" fill-opacity="0.699999988" fill-rule="evenodd" xlink:href="#path-1" /><rect fill="#FFFFFF" fill-rule="evenodd" height="16" mask="url(#mask-2)" rx="5" width="31" x="39" y="2" /><g fill="#FF4F6D" fill-rule="evenodd" mask="url(#mask-2)" stroke-width="1"><g transform="translate(38.000000, 24.000000)"><circle cx="11" cy="11" r="11" /><circle cx="21" cy="11" r="11" /></g></g></g>'));
    }
}
