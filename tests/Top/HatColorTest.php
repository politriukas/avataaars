<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\HatColor;

final class HatColorTest extends TestCase
{
    /**
     * @dataProvider provideTestCases
     *
     * @runInSeparateProcess
     */
    public function testGenerate(HatColor $hatColor, string $mask, string $expectedSvg): void
    {
        self::assertThat($hatColor->generate($mask), new GeneratesSvgConstraint($expectedSvg));
    }

    /**
     * @return iterable<array{0: HatColor, 1: string, 2: string}>
     */
    public function provideTestCases(): iterable
    {
        yield [HatColor::Black, 'mask-1', '<g fill="#262E33" fill-rule="evenodd" mask="url(#mask-1)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Blue01, 'mask-2', '<g fill="#65C9FF" fill-rule="evenodd" mask="url(#mask-2)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Blue02, 'mask-3', '<g fill="#5199E4" fill-rule="evenodd" mask="url(#mask-3)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Blue03, 'mask-4', '<g fill="#25557C" fill-rule="evenodd" mask="url(#mask-4)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Gray01, 'mask-5', '<g fill="#E6E6E6" fill-rule="evenodd" mask="url(#mask-5)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Gray02, 'mask-6', '<g fill="#929598" fill-rule="evenodd" mask="url(#mask-6)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Heather, 'mask-7', '<g fill="#3C4F5C" fill-rule="evenodd" mask="url(#mask-7)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::PastelBlue, 'mask-8', '<g fill="#B1E2FF" fill-rule="evenodd" mask="url(#mask-8)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::PastelGreen, 'mask-9', '<g fill="#A7FFC4" fill-rule="evenodd" mask="url(#mask-9)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::PastelOrange, 'mask-10', '<g fill="#FFDEB5" fill-rule="evenodd" mask="url(#mask-10)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::PastelRed, 'mask-11', '<g fill="#FFAFB9" fill-rule="evenodd" mask="url(#mask-11)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::PastelYellow, 'mask-12', '<g fill="#FFFFB1" fill-rule="evenodd" mask="url(#mask-12)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Pink, 'mask-13', '<g fill="#FF488E" fill-rule="evenodd" mask="url(#mask-13)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::Red, 'mask-14', '<g fill="#FF5C5C" fill-rule="evenodd" mask="url(#mask-14)"><rect height="280" width="264" x="0" y="0" /></g>'];
        yield [HatColor::White, 'mask-15', '<g fill="#FFFFFF" fill-rule="evenodd" mask="url(#mask-15)"><rect height="280" width="264" x="0" y="0" /></g>'];
    }
}
