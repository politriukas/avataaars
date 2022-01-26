<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face\EyeBrows;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\EyeBrows\SadConcernedNatural;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SadConcernedNaturalTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new SadConcernedNatural())->generate(), new GeneratesSvgConstraint('<g fill-opacity="0.599999964"><path d="M22.7663531,5.57844898 L23.6772984,5.17582144 C28.9190996,3.09473425 36.8645466,3.96712704 41.7227321,6.29911638 C42.2897848,6.57148957 41.9021563,7.4519421 41.3211012,7.40711006 C26.4021788,6.25602197 16.3582869,15.5525942 12.9460869,21.8470939 C12.8449215,22.0337142 12.5391523,22.05489 12.4635344,21.8808353 C10.156283,16.5620676 16.9134476,7.89614725 22.7663531,5.57844898 Z" transform="translate(27.000000, 13.000000) scale(-1, -1) translate(-27.000000, -13.000000)" /><path d="M80.7663531,5.57844898 L81.6772984,5.17582144 C86.9190996,3.09473425 94.8645466,3.96712704 99.7227321,6.29911638 C100.289785,6.57148957 99.9021563,7.4519421 99.3211012,7.40711006 C84.4021788,6.25602197 74.3582869,15.5525942 70.9460869,21.8470939 C70.8449215,22.0337142 70.5391523,22.05489 70.4635344,21.8808353 C68.156283,16.5620676 74.9134476,7.89614725 80.7663531,5.57844898 Z" transform="translate(85.000000, 13.000000) scale(1, -1) translate(-85.000000, -13.000000)" /></g>'));
    }
}
