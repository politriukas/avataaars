<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing\Graphics;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\Graphics\SkullGraphics;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SkullGraphicsTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new SkullGraphics())->generate('mask-2'), new GeneratesSvgConstraint('<g fill="#FFFFFF" fill-rule="evenodd" mask="url(#mask-2)"><g transform="translate(77.000000, 58.000000)"><path d="M65.2820354,19.9288113 C64.9841617,22.7059411 59.588846,24.2025715 57.6102394,22.3766824 C56.6984983,21.5350479 56.6825881,19.8029182 56.4815012,18.6751632 C56.1014249,16.5420247 55.8256486,14.4172496 55.7306295,12.2519776 C55.6727342,10.9274596 55.3253621,9.86749314 56.7745135,9.67029008 C57.65797,9.55055964 58.5675014,10.137767 59.2896464,10.6026028 C61.736719,12.1758255 65.6201265,16.7414286 65.2820354,19.9288113 M52.8813831,14.0756657 C53.1659984,16.901216 54.2014853,21.8145656 51.9457767,24.1810024 C49.9296045,26.2960933 45.7863308,24.19905 45.1631825,21.7084809 C44.3897714,18.6188195 47.4383369,14.9274245 49.307782,12.8387447 C49.881874,12.1969544 51.151594,10.4256483 52.1442119,11.018578 C52.526056,11.2461539 52.8367463,13.6301981 52.8813831,14.0756657 M54.3212536,25.1062722 C54.9678252,23.5832306 61.2342228,28.1246236 58.2744891,30.2850536 C57.7918806,30.6376421 54.1148633,31.7513112 53.4099544,31.2274906 C51.9250051,30.1235056 53.8408548,26.2630794 54.3212536,25.1062722 M73.3250687,17.5267194 C72.8817937,2.05112066 53.065234,-2.31331777 42.4756895,6.50447654 C38.426551,9.87585667 36.113389,14.0039155 36.0073212,19.2826191 C35.9171635,23.7544627 36.6256081,27.9718792 40.0409914,31.0465744 C41.5219631,32.379896 42.5004386,33.1955596 43.2862243,35.0170469 C44.1095756,36.9234899 44.4852324,39.3524331 46.0280771,40.8495037 C46.8788292,41.6752915 48.1176128,42.3417322 49.2940816,41.8091079 C51.455655,40.8301355 50.7644465,37.8320326 51.4194152,36.1606486 C53.4559171,41.1294616 58.6302582,42.7141291 59.5694002,36.4097935 C60.6000257,38.2286397 63.2945899,40.610483 65.268335,38.6195243 C66.0806376,37.8003393 66.2030575,36.4705391 66.3409457,35.3929652 C66.5857855,33.4807998 66.1601884,32.7294032 67.6955199,31.4180909 C71.7349355,27.9683578 73.4691441,22.7464381 73.3250687,17.5267194" /></g></g>'));
    }
}
