<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\Eyes;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\Eyes\DefaultEyes;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class DefaultEyesTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new DefaultEyes())->generate(), new GeneratesSvgConstraint('<g fill-opacity="0.599999964" transform="translate(0.000000, 8.000000)"><circle cx="30" cy="22" r="6" /><circle cx="82" cy="22" r="6" /></g>'));
    }
}
