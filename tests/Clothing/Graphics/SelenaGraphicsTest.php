<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing\Graphics;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\Graphics\SelenaGraphics;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class SelenaGraphicsTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new SelenaGraphics())->generate('mask-2'), new GeneratesSvgConstraint('<g fill-rule="evenodd" mask="url(#mask-2)" stroke-width="1"><g transform="translate(77.000000, 58.000000)"><g transform="translate(17.000000, 0.000000)"><path d="M65.3033729,7.56759412 C65.1470447,8.49857487 63.3805357,12.656817 62.0741755,10.5184706 C61.5650892,9.68550605 62.4755312,7.05707864 62.7589611,6.30931546 C63.3169849,4.836648 63.7329539,4.67144048 65.0219821,3.97805378 C65.1307322,5.16706304 65.4331933,6.37685313 65.3033729,7.56759412 M62.3188632,10.8866375 C62.3487694,10.8987596 62.4772304,11.018942 62.3188632,10.8866375 M62.3110467,10.8804032 C62.3052694,10.8755544 62.3107069,10.8800569 62.3110467,10.8804032 M55.0298897,6.20471867 C55.040085,6.21337734 55.0829054,6.246973 55.0298897,6.20471867 M42.5545574,11.1605979 C42.3475925,12.3804321 42.0797954,13.5995735 41.6509123,14.760875 C41.48167,13.0294864 41.7542249,11.3046783 42.651413,9.81019097 C42.6412176,10.2618275 42.6089325,10.7120786 42.5545574,11.1605979 M42.544702,8.65858718 C42.5406238,8.64334792 42.3859948,8.41891506 42.544702,8.65858718 M25.9083201,18.8030909 C26.0609101,17.2701591 26.6763675,15.7860622 27.8141651,14.7591433 C27.5371923,16.3838571 26.7416175,17.4294787 25.9083201,18.8030909 M75.8371766,5.29694317 C75.8371766,5.93422166 73.7787416,7.63166832 73.2635382,8.10027581 C72.3850415,8.898952 71.4487714,9.53969396 70.1865909,9.35370562 C66.7252801,8.84422918 68.0968903,5.14766761 67.5456634,2.87251415 C67.1120225,1.08501726 66.6671667,1.75900853 65.4641191,1.64644576 C64.3456926,1.54219531 63.9460361,0.990464532 62.7824103,1.83312679 C60.685573,3.35151205 59.0159196,5.32915344 58.1231495,7.8135005 C57.7992782,6.11813191 56.8776214,3.30960407 54.6706746,3.71967892 C53.0387439,4.02273255 51.6868446,6.64596475 51.0078363,7.96277605 C50.95618,6.76545446 50.3403828,4.88721467 48.8328349,5.74476985 C47.7973303,6.3339061 47.8418499,9.12615564 47.615174,10.1548062 C47.1499276,12.2664839 46.236427,17.7723622 42.9708663,17.056463 C43.999574,15.1377006 46.2510403,9.08632573 44.3207265,7.1194211 C41.6091115,4.35730375 39.5459188,11.2748924 39.4354695,12.9584852 C39.355946,14.1644655 40.2405598,16.9030312 39.7637588,17.6511408 C39.1788873,18.568614 37.3362533,18.9641423 36.4608152,18.2922291 C35.0562401,17.2143972 35.6101858,15.4622277 35.9313383,14.093118 C36.3527448,12.2990405 36.5512137,10.495958 36.6650614,8.65616275 C36.7503623,7.27631629 37.951031,1.10787617 35.6370334,1.02406019 C33.5415555,0.948902892 33.3281335,6.16211798 33.1786022,7.58664321 C32.9944067,9.33812 32.8825981,11.1121094 32.94377,12.8746693 C33.0056216,14.6573173 33.3376491,15.8449412 32.6467463,17.5181435 C31.9065662,19.3108356 28.3834038,24.6889119 26.2743321,21.1180743 C28.5142437,20.1354878 31.1850774,15.5997275 29.9833892,13.0506135 C28.317474,9.51683506 24.5679755,14.9018383 24.024565,16.7073452 C23.1474277,19.6222016 23.5328108,23.4292478 26.8877504,24.3782386 C30.3810066,25.366713 33.0780083,22.0916557 34.309263,19.1975801 C35.3107832,20.7859275 37.1544368,21.1842266 38.8580746,20.7031506 C39.5350438,20.5116207 40.1861848,20.1822447 40.7496461,19.7555452 C41.8198148,18.9457859 41.1934823,19.2471078 42.3292409,19.2142048 C45.6264071,19.1196521 47.4252012,18.0612156 48.660534,14.6690931 C48.6459207,15.6031909 49.0041163,17.0287552 50.2588202,16.5178934 C51.2334927,16.1209797 51.2266958,14.5083881 51.4074928,13.6480621 C51.9774112,10.935126 52.8729,8.10651006 55.0057608,6.22584583 C56.8466956,8.22807786 55.4856205,11.6534497 56.6968244,13.7862546 C58.5635873,17.0737803 59.5035957,11.2537653 59.7962014,10.1319473 C59.8526155,15.0140547 65.6574903,13.2158211 66.9135536,9.97505214 C70.2130987,13.4901279 77.1479547,10.3238236 75.8371766,5.29694317" fill="#FFFFFF" /><path d="M69.433817,15.3488372 C65.8038135,15.3488372 61.8287631,16.3747039 58.3068219,17.1662556 C54.7602589,17.9637144 51.2314783,18.9518414 47.8046046,20.1368717 C43.9335128,21.4748303 39.9926593,22.6897243 36.2145831,24.2580599 C32.9385178,25.6183343 28.7066484,26.6107275 26.7027087,29.6738881 C26.6986051,29.6824206 28.8051356,29.5856097 28.9754363,29.5573869 C30.0242559,29.3834556 30.9267127,29.0139335 31.8924339,28.6010927 C33.6392127,27.8548288 35.3740227,27.0823111 37.115672,26.3248894 C41.0202768,24.6265975 45.0951823,23.2295678 49.1044296,21.7708418 C53.1003402,20.3176946 57.1991835,19.0860638 61.3588973,18.1455219 C64.7498643,17.3792395 68.5409353,17.2322183 71.6624305,15.8729284 C71.5444511,15.9172317 71.6210523,15.887368 71.8918919,15.7816965 C71.813239,15.8197645 69.6708017,15.3488372 69.433817,15.3488372" fill="#FFFFFF" /><path d="M22.1170349,20.8250383 C19.8478706,19.8267659 16.6395075,20.267131 14.2823358,20.5862701 C12.1385566,20.8762747 8.78577979,21.5209156 7.44867865,21.6937129 C6.34297926,21.8346967 3.04321074,22.7348497 2.4393915,21.4968044 C1.79003946,20.1656628 5.15878677,16.0935417 5.89512684,15.1341152 C9.20984643,10.8135143 13.1946457,6.01370248 17.9749097,3.21110531 C17.5345328,5.16177188 17.1498826,7.12884748 16.7479027,9.08721625 C16.5824216,9.89460802 15.79851,14.2513757 17.2338124,14.5946261 C17.8233602,14.735275 19.0058537,11.8121216 19.104055,11.5505816 C19.9270433,9.36181652 20.1163103,6.84118695 20.4951839,4.54927932 C20.7119744,3.23789558 21.6953468,0.499260193 19.8009787,0.0471743805 C18.1723317,-0.341619419 15.9646707,1.77447706 14.8776601,2.66558843 C11.5962407,5.35767573 8.75146029,8.61302846 6.0905101,11.8864646 C4.78025293,13.4985691 3.4761121,15.1200503 2.37686886,16.8831849 C1.47300888,18.3332083 -0.712565331,21.3735691 0.232070287,23.1651685 C1.92969602,26.3860287 10.0715716,23.5626691 12.663543,23.133355 C14.708781,22.7941232 16.8162019,22.4729748 18.8913421,22.7566168 C21.0534703,23.0519796 20.9484731,24.0274803 20.2298024,25.953031 C18.7520254,29.9126329 15.4539558,33.3136578 12.5058772,36.2726431 C11.2071731,37.5759898 6.1251694,43.6918736 4.84549395,40.3641872 C3.97595347,38.1030884 4.74525384,35.3289559 5.74561617,33.2503658 C6.21419621,32.2765394 6.8346655,31.3887768 7.32329357,30.4256666 C7.45649398,30.163122 8.12453486,28.0011471 8.27030776,27.9529247 C4.4003599,29.303824 2.15328244,34.538308 1.93751135,38.2397187 C1.83591206,39.9810863 2.07376995,42.5640033 3.73741598,43.6084889 C5.40174162,44.6533095 6.96378836,43.3814414 8.28661802,42.4230195 C11.9289019,39.7838429 15.1780407,36.4246779 18.1519439,33.0879497 C19.7778725,31.2635323 26.6054133,22.8014905 22.1170349,20.8250383" fill="#FFFFFF" /></g></g></g>'));
    }
}
