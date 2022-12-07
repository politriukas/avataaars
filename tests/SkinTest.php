<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Skin;

final class SkinTest extends TestCase
{
    /**
     * @dataProvider provideTestCases
     *
     * @runInSeparateProcess
     */
    public function testGenerate(Skin $skin, string $mask, string $expectedSvg): void
    {
        self::assertThat($skin->generate($mask), new GeneratesSvgConstraint($expectedSvg));
    }

    /**
     * @return iterable<array{0: Skin, 1: string, 2: string}>
     */
    public function provideTestCases(): iterable
    {
        yield [Skin::Tanned, 'mask-1', '<g fill="#FD9841" mask="url(#mask-1)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::Yellow, 'mask-2', '<g fill="#F8D25C" mask="url(#mask-2)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::Pale, 'mask-3', '<g fill="#FFDBB4" mask="url(#mask-3)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::Light, 'mask-4', '<g fill="#EDB98A" mask="url(#mask-4)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::Brown, 'mask-5', '<g fill="#D08B5B" mask="url(#mask-5)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::DarkBrown, 'mask-6', '<g fill="#AE5D29" mask="url(#mask-6)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [Skin::Black, 'mask-7', '<g fill="#614335" mask="url(#mask-7)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
    }
}
