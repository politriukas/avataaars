<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing\Graphics;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class DeerGraphics implements ClothingGraphics
{
    public function generate(string $mask): SVGGroup
    {
        return g(mask: "url(#{$mask})", fillRule: 'evenodd', fill: '#FFFFFF', children: [
            g(transform: 'translate(77.000000, 58.000000)', children: [
                path(d: 'M76.9598206,16.2351328 C77.3545748,17.6603319 74.7317873,18.9054413 73.8540158,19.6535687 C72.3474717,20.9370645 70.7886986,22.2879408 69.0287021,23.2010483 C68.2808959,23.5889965 67.4755973,23.9042554 66.6674645,24.1357992 C65.420446,24.4927115 65.5625576,24.2427912 65.0864232,25.3008688 C64.2491394,27.1617948 64.0321258,29.6352706 63.2754123,31.6133978 C61.5708838,36.0670427 57.5083567,46.4138243 51.0084754,41.8719723 C48.9403681,40.4271716 47.8107637,37.6249608 46.6471497,35.4361165 C45.312678,32.9242543 44.0348889,29.927661 43.2668389,27.1858884 C42.8923285,25.8501217 43.1299908,25.3952014 42.1376394,24.7708091 C41.514535,24.3787772 40.4582132,24.2775023 39.7537287,23.9908291 C38.2544724,23.3807295 36.9414591,22.5546042 35.6656945,21.5602318 C34.4279881,20.5948534 29.5561137,16.6096049 33.5340216,15.8696448 C35.3592032,15.5298839 37.7512114,15.6560692 39.6006855,15.7495851 C41.6283052,15.8520851 43.6741443,16.3196647 45.4774626,17.2854514 C47.3184343,18.2720648 46.7783296,17.9862083 48.6865108,17.4345052 C45.3653119,16.3090472 42.0384447,14.4370952 39.8031236,11.6536693 C38.5961879,10.1508806 35.8037572,4.00047299 37.9022302,2.58875006 C40.4225841,0.893212425 40.6331197,7.93508406 41.3416529,9.15569148 C42.9344356,11.8995059 45.8495437,12.9351233 48.3844732,14.454655 C46.6435058,12.7868862 45.3446632,10.9496454 44.7106272,8.58683697 C44.4357163,7.56224546 43.6846711,5.0981621 44.1919809,4.10133952 C44.7207491,3.06123008 45.9641237,2.99507471 46.6499838,3.88041325 C47.2678248,4.67754462 47.1123524,6.5115185 47.3241026,7.47240483 C47.6739156,9.06095045 48.2451958,10.282783 49.3059712,11.5127828 C50.8113007,13.2585495 52.7227209,14.6866071 54.9750468,15.2395353 C60.1015883,16.4977125 61.8947847,11.1317769 62.5826693,6.99461605 C62.7510977,5.98186717 62.5033135,4.30184746 63.6329179,3.81589134 C65.0001846,3.22743524 65.5293577,4.56156854 65.5690356,5.59718594 C65.6564888,7.91058207 64.5127138,11.4535697 63.4029483,13.4419061 C66.1929497,11.7100238 68.4064075,8.96375923 69.3015886,5.75399867 C69.6327773,4.56646894 69.3639395,1.9182123 70.4757294,1.25134983 C72.0154733,0.327216479 72.5049686,2.16772422 72.45112,3.27317229 C72.1324825,9.78825116 67.1525061,15.7132405 60.9627599,17.341806 C62.4810453,18.1005509 62.2814414,18.2716565 63.8114683,17.3650829 C64.6961227,16.840332 65.656084,16.4352324 66.6375037,16.1342663 C68.1076089,15.6834297 69.6931038,15.453111 71.2182722,15.3183501 C72.4377591,15.2105413 76.4921887,14.5012087 76.9598206,16.2351328 Z M58.8595294,24.6214062 C59.7193936,22.4825816 56.3639386,22.4048657 56.0375022,24.7163015 C55.622102,27.6609177 58.7932497,27.8924294 58.8595294,24.6214062 Z M56.9297708,33.6367531 C57.5886752,31.4414328 53.4036129,31.5246305 53.0344702,33.4664333 C52.5980925,35.7582944 56.4400387,35.1974948 56.9297708,33.6367531 Z M51.7024587,27 C54.0260737,27 54.9736078,23.9354052 52.6986912,23.1385385 C49.8083182,22.1255453 48.8835101,27 51.7024587,27 Z'),
            ]),
        ]);
    }
}
