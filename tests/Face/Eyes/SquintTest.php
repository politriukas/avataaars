<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\Squint;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SquintTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Squint())->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 8.000000)"><defs><path d="M14,14.0481187 C23.6099827,14.0481187 28,18.4994466 28,11.5617716 C28,4.62409673 21.7319865,0 14,0 C6.2680135,0 0,4.62409673 0,11.5617716 C0,18.4994466 4.39001726,14.0481187 14,14.0481187 Z" id="path-1" /><path d="M14,14.0481187 C23.6099827,14.0481187 28,18.4994466 28,11.5617716 C28,4.62409673 21.7319865,0 14,0 C6.2680135,0 0,4.62409673 0,11.5617716 C0,18.4994466 4.39001726,14.0481187 14,14.0481187 Z" id="path-2" /></defs><g transform="translate(16.000000, 13.000000)"><mask fill="#FFFFFF" id="mask-3"><use xlink:href="#path-1" /></mask><use fill="#FFFFFF" xlink:href="#path-1" /><circle cx="14" cy="10" fill="#000000" fill-opacity="0.699999988" mask="url(#mask-3)" r="6" /></g><g transform="translate(68.000000, 13.000000)"><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-2" /></mask><use fill="#FFFFFF" xlink:href="#path-2" /><circle cx="14" cy="10" fill="#000000" fill-opacity="0.699999988" mask="url(#mask-4)" r="6" /></g></g>'));
    }
}
