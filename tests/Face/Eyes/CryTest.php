<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\Cry;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class CryTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Cry())->generate(), new GeneratesSvgConstraint('<g transform="translate(0.000000, 8.000000)"><circle cx="30" cy="22" fill="#000000" fill-opacity="0.599999964" fill-rule="evenodd" r="6" /><path d="M25,27 C25,27 19,34.2706667 19,38.2706667 C19,41.5846667 21.686,44.2706667 25,44.2706667 C28.314,44.2706667 31,41.5846667 31,38.2706667 C31,34.2706667 25,27 25,27 Z" fill="#92D9FF" fill-rule="nonzero" /><circle cx="82" cy="22" fill="#000000" fill-opacity="0.599999964" fill-rule="evenodd" r="6" /></g>'));
    }
}
