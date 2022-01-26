<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Face;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Face\DefaultFace;
use Politriukas\Avataaars\Face\EyeBrows\Angry;
use Politriukas\Avataaars\Face\Eyes\EyeRoll;
use Politriukas\Avataaars\Face\Mouth\Grimace;
use Politriukas\Avataaars\Face\Nose\DefaultNose;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class DefaultFaceTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        $face = new DefaultFace(eyeBrows: new Angry(), eyes: new EyeRoll(), nose: new DefaultNose(), mouth: new Grimace());

        self::assertThat($face->generate(), new GeneratesSvgConstraint('<g fill="#000000" transform="translate(76.000000, 82.000000)"><g transform="translate(2.000000, 52.000000)"><defs><rect height="22" id="path-1" rx="11" width="60" x="24" y="9" /></defs><rect fill="#000000" fill-opacity="0.599999964" fill-rule="evenodd" height="26" rx="13" width="64" x="22" y="7" /><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#path-1" /><path d="M71,22 L62,22 L62,34 L58,34 L58,22 L49,22 L49,34 L45,34 L45,22 L36,22 L36,34 L32,34 L32,22 L24,22 L24,18 L32,18 L32,6 L36,6 L36,18 L45,18 L45,6 L49,6 L49,18 L58,18 L58,6 L62,6 L62,18 L71,18 L71,6 L75,6 L75,18 L83.8666667,18 L83.8666667,22 L75,22 L75,34 L71,34 L71,22 Z" fill="#E6E6E6" fill-rule="evenodd" mask="url(#mask-2)" /></g><g fill-opacity="0.16" transform="translate(28.000000, 40.000000)"><path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" /></g><g transform="translate(0.000000, 8.000000)"><circle cx="30" cy="22" fill="#FFFFFF" r="14" /><circle cx="82" cy="22" fill="#FFFFFF" r="14" /><circle cx="30" cy="14" fill="#000000" fill-opacity="0.699999988" r="6" /><circle cx="82" cy="14" fill="#000000" fill-opacity="0.699999988" r="6" /></g><g fill-opacity="0.599999964" fill-rule="nonzero"><path d="M15.6114904,15.1845247 C19.8515017,9.41618792 22.4892046,9.70087612 28.9238518,14.5564693 C29.1057771,14.6937504 29.2212592,14.7812575 29.5936891,15.063789 C34.4216439,18.7263562 36.7081807,20 40,20 C41.1045695,20 42,19.1045695 42,18 C42,16.8954305 41.1045695,16 40,16 C37.9337712,16 36.0986396,14.9777974 32.011227,11.8770179 C31.6358269,11.5922331 31.5189458,11.5036659 31.3332441,11.3635351 C27.5737397,8.52660822 25.3739873,7.28738405 22.6379899,6.99208688 C18.9538127,6.59445233 15.5799484,8.47367246 12.3885096,12.8154753 C11.7343147,13.7054768 11.9254737,14.9572954 12.8154753,15.6114904 C13.7054768,16.2656853 14.9572954,16.0745263 15.6114904,15.1845247 Z" /><path d="M73.6114904,15.1845247 C77.8515017,9.41618792 80.4892046,9.70087612 86.9238518,14.5564693 C87.1057771,14.6937504 87.2212592,14.7812575 87.5936891,15.063789 C92.4216439,18.7263562 94.7081807,20 98,20 C99.1045695,20 100,19.1045695 100,18 C100,16.8954305 99.1045695,16 98,16 C95.9337712,16 94.0986396,14.9777974 90.011227,11.8770179 C89.6358269,11.5922331 89.5189458,11.5036659 89.3332441,11.3635351 C85.5737397,8.52660822 83.3739873,7.28738405 80.6379899,6.99208688 C76.9538127,6.59445233 73.5799484,8.47367246 70.3885096,12.8154753 C69.7343147,13.7054768 69.9254737,14.9572954 70.8154753,15.6114904 C71.7054768,16.2656853 72.9572954,16.0745263 73.6114904,15.1845247 Z" transform="translate(84.999934, 13.470064) scale(-1, 1) translate(-84.999934, -13.470064)" /></g></g>'));
    }
}
