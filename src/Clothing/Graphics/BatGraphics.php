<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing\Graphics;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class BatGraphics implements ClothingGraphics
{
    public function generate(string $mask): SVGGroup
    {
        return g(fill: '#FFFFFF', fillRule: 'evenodd', mask: "url(#{$mask})", children: [
            g(transform: 'translate(77.000000, 58.000000)', children: [
                path(d: 'M87.6852404,13.4031978 C86.29151,6.97182978 81.4755637,3.2534243 75.1844381,1.81688169 C72.6586144,1.2402574 64.2721154,-0.570361088 65.5784818,4.22465302 C66.1709196,6.39748644 65.8414841,8.18940114 64.0250388,9.99135202 C62.2550056,11.7463153 58.793658,12.1906445 57.0732221,9.97994727 C55.5989529,8.08493361 57.5000322,5.25883596 56.3515582,3.41309083 C55.9056373,2.69596 55.1361961,2.32963935 54.323983,2.68090573 C53.1827893,3.17450341 53.7902429,4.23560158 53.2510425,4.99880761 C52.4024277,6.20178089 52.005649,5.82542406 51.2416681,4.6261003 C50.7616206,3.87247426 51.2334777,3.05133209 49.9949096,2.72926188 C48.5615922,2.35655457 48.0924652,3.5572469 47.9627841,4.65164695 C47.8813352,5.33866923 48.2849392,6.44356164 48.2990449,7.14016392 C48.3263462,8.50417231 48.2084956,10.4630526 47.5741958,11.668763 C46.449383,13.8060136 44.8695487,13.1221847 43.1909749,11.7645629 C41.2107218,10.1633357 40.6296595,8.3800886 41.0127875,5.94768301 C41.4719041,3.03125972 41.3053663,0.239376333 37.7334484,2.06368053 C32.7127425,4.62792506 28.0537786,9.19894983 25.144827,13.9830154 C22.6999971,18.0025063 20.7757117,22.8759851 22.9416134,27.4556775 C25.1521073,32.1307136 28.8036539,36.1460988 33.9080837,37.3394921 C35.2294658,37.6483328 38.9997729,39.1501106 40.2533568,37.8905698 C42.1999383,35.9335142 37.7052371,34.1082977 36.8179454,32.9158167 C35.5598113,31.2256324 34.4805006,28.0012808 35.8614905,26.0944062 C37.6206031,23.6670187 39.4602546,25.0200786 40.9063125,26.7376343 C42.0415909,28.085676 43.6550967,31.5636693 45.4119342,28.759925 C46.621381,26.8288723 46.513086,23.6583511 49.812446,25.0433443 C54.5269225,27.0213845 54.6716193,36.1552226 55.5120438,40.3343801 C55.879246,42.1637024 57.5473544,44.3981215 58.9829469,41.8594236 C59.7719539,40.4634819 59.3460539,37.437573 59.2022672,35.9960123 C58.9055932,33.0111605 58.1225014,30.0760334 59.092607,27.1190092 C59.6536484,25.4082963 61.093336,22.9594679 63.2223811,24.2751201 C64.9469121,25.3407802 64.2284333,30.0910877 66.5745236,30.0824201 C68.6412307,30.075121 68.0774592,26.2910242 69.1777009,25.0433443 C70.8571848,23.1387506 74.0937518,24.0442879 75.0870635,26.2919365 C76.4243714,29.3169331 72.88476,31.4176885 73.0435625,34.0768205 C73.1982698,36.6684365 76.5376717,35.657063 77.9345873,34.9996931 C80.8057722,33.6493704 83.0526678,31.1467116 84.6097509,28.428731 C87.0172691,24.2253954 88.7354298,18.2068795 87.6852404,13.4031978'),
            ]),
        ]);
    }
}
