<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top\FacialHair;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\FacialHair\FacialHairColor;

final class FacialHairColorTest extends TestCase
{
    /**
     * @dataProvider provideTestCases
     *
     * @runInSeparateProcess
     */
    public function testGenerate(FacialHairColor $facialHairColor, string $mask, string $expectedSvg): void
    {
        self::assertThat($facialHairColor->generate($mask), new GeneratesSvgConstraint($expectedSvg));
    }

    /**
     * @return iterable<array{0: FacialHairColor, 1: string, 2: string}>
     */
    public function provideTestCases(): iterable
    {
        yield [FacialHairColor::Auburn, 'mask-1', '<g fill="#A55728" mask="url(#mask-1)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::Black, 'mask-2', '<g fill="#2C1B18" mask="url(#mask-2)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::Blonde, 'mask-3', '<g fill="#B58143" mask="url(#mask-3)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::BlondeGolden, 'mask-4', '<g fill="#D6B370" mask="url(#mask-4)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::Brown, 'mask-5', '<g fill="#724133" mask="url(#mask-5)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::BrownDark, 'mask-6', '<g fill="#4A312C" mask="url(#mask-6)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::Platinum, 'mask-7', '<g fill="#ECDCBF" mask="url(#mask-7)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
        yield [FacialHairColor::Red, 'mask-8', '<g fill="#C93305" mask="url(#mask-8)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g>'];
    }
}
