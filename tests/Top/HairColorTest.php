<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\HairColor;

final class HairColorTest extends TestCase
{
    /**
     * @dataProvider provideTestCases
     * @runInSeparateProcess
     */
    public function testGenerate(HairColor $hairColor, string $mask, string $expectedSvg): void
    {
        self::assertThat($hairColor->generate($mask), new GeneratesSvgConstraint($expectedSvg));
    }

    /**
     * @return iterable<array{0: HairColor, 1: string, 2: string}>
     */
    public function provideTestCases(): iterable
    {
        yield [HairColor::Auburn, 'mask-1', '<g fill="#A55728" mask="url(#mask-1)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Black, 'mask-2', '<g fill="#2C1B18" mask="url(#mask-2)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Blonde, 'mask-3', '<g fill="#B58143" mask="url(#mask-3)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::BlondeGolden, 'mask-4', '<g fill="#D6B370" mask="url(#mask-4)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Blue, 'mask-5', '<g fill="#000fdb" mask="url(#mask-5)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Brown, 'mask-6', '<g fill="#724133" mask="url(#mask-6)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::BrownDark, 'mask-7', '<g fill="#4A312C" mask="url(#mask-7)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::PastelPink, 'mask-8', '<g fill="#F59797" mask="url(#mask-8)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Platinum, 'mask-9', '<g fill="#ECDCBF" mask="url(#mask-9)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::Red, 'mask-10', '<g fill="#C93305" mask="url(#mask-10)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
        yield [HairColor::SilverGray, 'mask-11', '<g fill="#E8E1E1" mask="url(#mask-11)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g>'];
    }
}
