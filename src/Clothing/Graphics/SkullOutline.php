<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing\Graphics;

use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class SkullOutline implements Graphics
{
    public function generate(string $mask): SVGGroup
    {
        return g(mask: "url(#{$mask})", strokeWidth: '1', fillRule: 'evenodd', children: [
            g(transform: 'translate(77.000000, 58.000000)', children: [
                g(transform: 'translate(36.000000, 1.000000)', children: [
                    path(d: 'M36.3353853,17.0393673 C36.1551375,18.0777567 35.8927571,19.1087846 35.3466862,20.0285256 C34.6274709,21.2401241 33.3213404,21.7355025 32.5643885,22.8466397 C31.3705799,24.5990841 32.9555173,27.1231756 31.7781352,28.6842237 C30.5119611,30.3630542 27.6359878,29.346749 26.5163205,31.5755188 C25.3358307,33.925968 27.0535122,37.0679834 25.5729054,39.4058749 C24.1038415,39.0369393 23.6514462,33.5197923 21.3841422,37.0389708 C19.9319488,39.2928559 20.9126566,40.513981 18.7354764,37.2741024 C17.9789685,36.1486754 17.1247893,35.1384326 15.6392989,35.8810671 C14.5955488,36.4024269 14.3806721,38.7178013 13.4297097,38.9672226 C11.0962556,39.5786511 11.0105713,33.3500473 10.2172146,32.1709255 C9.78124586,31.523123 9.3750224,31.1394645 8.59986813,30.8939404 C7.92815655,30.6808931 6.73124021,31.1087199 6.17495825,30.7934791 C5.13032022,30.2019696 4.98914092,28.23821 4.94962847,27.1963565 C4.8759311,25.2572791 5.52544468,23.2770647 4.98958488,21.3579064 C4.53896541,19.7461945 3.1027546,18.7545717 2.63348882,17.1753366 C0.0993647654,8.64045187 11.6836147,3.89495204 18.2986197,3.63037495 C26.0390634,3.32033043 37.3356273,7.85191686 36.3353853,17.0393673 M38.172936,11.7240091 C36.716747,8.28277481 33.5180147,5.54736808 30.2580159,3.71135026 C28.6748543,2.82018878 26.955841,2.16285976 25.1728973,1.77140691 C23.531577,1.41069869 21.6150014,1.64842836 20.0482663,1.19462018 C18.728373,0.811827785 17.9097107,-0.0477230086 16.3562944,0.00207464445 C14.238161,0.0696262433 12.0370069,1.17426809 10.1879133,2.08751375 C6.5279065,3.89538507 3.41663437,6.23630778 1.4618782,9.83126531 C-0.636277062,13.6895009 -0.437382953,17.1865952 1.81083082,20.7832848 C3.95648981,24.2167247 0.837226393,29.045365 3.97824385,32.3086268 C5.29902504,33.6808769 6.59938407,32.6801606 7.84957562,33.3409538 C8.81163708,33.8493229 8.77123671,36.8034063 9.03805671,37.6694524 C10.2385247,41.5623298 14.5524847,43.0692501 16.5436456,38.8602659 C17.4830651,41.2128802 21.1990108,43.6239527 22.9291232,40.5460247 C24.0106099,41.9455552 25.8832335,42.541395 27.3123409,41.3414881 C28.6557641,40.2130299 28.8040467,37.585879 28.8724166,35.9984164 C28.9261357,34.7604034 28.3747373,33.2339971 29.3261438,32.3402375 C30.3734455,31.3559761 32.5204364,31.7708122 33.6951548,30.5011885 C35.0359141,29.0518603 34.4849597,27.3552759 34.5879584,25.6288129 C34.6922891,23.8828639 35.0035051,24.3280116 36.2980926,23.0670485 C39.1833891,20.2567287 39.6717451,15.2600755 38.172936,11.7240091', fill: '#FFFFFF'),
                    path(d: 'M14.4199416,28.1214878 C16.4409104,26.2992475 16.0109503,20.7236412 15.8441352,18.1620823 C15.5281264,13.3012213 12.4886458,14.7535905 10.6384079,17.7811955 C9.23849255,20.072024 5.8716471,23.7758196 7.38120621,26.6576793 C8.58337131,28.9535919 12.5610889,29.793746 14.4199416,28.1214878', fill: '#FFFFFF'),
                    path(d: 'M27.7905585,19.2735023 C26.7563456,17.3532744 26.3690889,17.0619469 25.1393718,15.4887787 C24.3486011,14.4775769 23.2406052,12.6869687 21.7361817,13.0471169 C19.1541926,13.6660822 20.2075808,19.6585611 20.238428,21.4487472 C20.2617717,22.8065864 19.9608037,24.2138247 21.0892255,25.1768941 C22.2443259,26.1627631 24.1422588,26.073676 25.5295464,25.8676357 C29.7877025,25.2338929 29.5913646,22.6136348 27.7905585,19.2735023', fill: '#FFFFFF'),
                    path(d: 'M19.2396436,31.8300192 C18.9563137,31.7944779 19.3174042,31.4678578 19.3591799,31.2433628 C19.5473771,31.8574625 19.6855263,31.8862554 19.2396436,31.8300192 M20.2848621,27.5191742 C17.6678865,24.7492021 12.711061,33.9166085 16.2049116,34.9450569 C17.0098167,35.1821488 17.604189,34.5815458 18.3598733,34.4767215 C19.4596896,34.3242088 20.3837174,34.9635023 21.3333895,33.9548492 C22.8244907,32.3712368 21.5203459,28.8566969 20.2848621,27.5191742', fill: '#FFFFFF'),
                ]),
            ]),
        ]);
    }
}
