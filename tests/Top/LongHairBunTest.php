<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Blank as BlankAccessory;
use Politriukas\Avataaars\Top\FacialHair\Blank as BlankFacialHair;
use Politriukas\Avataaars\Top\HairColor;
use Politriukas\Avataaars\Top\LongHairBun;

final class LongHairBunTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new LongHairBun(HairColor::Blonde, new BlankFacialHair(), new BlankAccessory()))->generate(), new GeneratesSvgConstraint('<g fill-rule="evenodd" stroke-width="1"><defs><rect height="280" id="path-2" width="264" x="0" y="0" /><path d="M114.939716,28.3372418 C113.953527,28.5587334 112.985531,28.7906134 112.036894,29.0299707 C96.9448338,32.8379559 88.0168242,43.6513048 80.3566792,59.6480618 C76.5956048,67.5028569 74.3660182,76.7914798 74.0230569,85.4813651 C73.8884429,88.8932666 74.3484305,92.415154 75.267729,95.7003546 C75.6049405,96.9061873 77.4232441,101.086987 77.9224658,97.70885 C78.0885348,96.584253 77.4804043,95.0327505 77.4215529,93.8376154 C77.3444374,92.2693977 77.4273028,90.6807875 77.5341822,89.1149098 C77.7340739,86.1874141 78.2559568,83.3154127 79.1847257,80.524647 C80.5119249,76.5367405 82.2013644,72.212859 84.7874413,68.8480942 C91.1883705,60.5205939 95.7648164,43.2055199 133,41.6707324 C170.235184,40.1359449 181.748751,67.461069 185.182761,73.3006826 C189.2479,80.2147477 187.37751,88.7073939 188.619138,96.2008069 C189.091302,99.05041 190.164155,98.986558 190.751315,96.4378281 C191.748406,92.1082634 192.219217,87.6102098 191.901961,83.1592929 C191.183568,73.1114668 187.496636,46.7057251 167.308863,35.006118 C161.866498,31.8520537 156.438352,29.6874962 151.116597,28.2827668 C154.176091,25.3110645 156,21.5675963 156,17.5 C156,7.83501688 145.702549,0 133,0 C120.297451,0 110,7.83501688 110,17.5 C110,21.5924906 111.846303,25.3568736 114.939716,28.3372418 Z" id="path-1" /></defs><mask fill="#FFFFFF" id="mask-4"><use xlink:href="#path-2" /></mask><g mask="url(#mask-4)"><g transform="translate(-1.000000, 0.000000)"><mask fill="#FFFFFF" id="mask-3"><use xlink:href="#path-1" /></mask><use fill="#28354B" fill-rule="evenodd" stroke="none" xlink:href="#path-1" /><g fill="#B58143" mask="url(#mask-3)"><g transform="translate(0.000000, 0.000000)"><rect height="280" width="264" x="0" y="0" /></g></g></g></g></g>'));
    }
}
