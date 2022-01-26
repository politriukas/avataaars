<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Top;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;
use Politriukas\Avataaars\Top\Accessory\Wayfarers;
use Politriukas\Avataaars\Top\FacialHair\BeardLight;
use Politriukas\Avataaars\Top\FacialHair\FacialHairColor;
use Politriukas\Avataaars\Top\NoHair;

final class NoHairTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new NoHair(new BeardLight(FacialHairColor::Black), new Wayfarers()))->generate(), new GeneratesSvgConstraint('<g fill-rule="evenodd" stroke-width="1"><defs><rect height="280" id="path-1" width="264" x="0" y="0" /><filter filterUnits="objectBoundingBox" height="108.0%" id="filter-3" width="101.5%" x="-0.8%" y="-2.0%"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1" /><feColorMatrix in="shadowOffsetOuter1" result="shadowMatrixOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" /><feMerge><feMergeNode in="shadowMatrixOuter1" /><feMergeNode in="SourceGraphic" /></feMerge></filter></defs><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><g mask="url(#mask-2)"><g transform="translate(-1.000000, 0.000000)"><g transform="translate(49.000000, 72.000000)"><defs><path d="M101.428403,98.1685688 C98.9148372,100.462621 96.23722,101.494309 92.8529444,100.772863 C92.2705777,100.648833 89.8963391,96.2345713 83.9998344,96.2345713 C78.1033297,96.2345713 75.7294253,100.648833 75.1467245,100.772863 C71.7624488,101.494309 69.0848316,100.462621 66.5712661,98.1685688 C61.8461772,93.855604 57.9166219,87.9081858 60.2778299,81.4191814 C61.5083844,78.0369425 63.5097479,74.3237342 67.1506257,73.2459109 C71.0384163,72.0955419 76.4968931,73.2439051 80.4147542,72.4582708 C81.6840664,72.2035248 83.0706538,71.7508657 83.9998344,71 C84.929015,71.7508657 86.3159365,72.2035248 87.5845805,72.4582708 C91.5027758,73.2439051 96.9612525,72.0955419 100.849043,73.2459109 C104.489921,74.3237342 106.491284,78.0369425 107.722173,81.4191814 C110.083381,87.9081858 106.153826,93.855604 101.428403,98.1685688 M140.081033,26 C136.670693,34.4002532 137.987774,44.8580348 137.356666,53.6758724 C136.844038,60.8431942 135.33712,71.5857526 128.972858,76.214531 C125.718361,78.5816138 119.79436,82.5598986 115.54187,81.4501943 C112.614539,80.6863848 112.302182,72.290096 108.455284,69.1469801 C104.09172,65.5823153 98.6429854,64.0160432 93.1491481,64.2578722 C90.7785381,64.3622683 85.9841367,64.3374908 83.9999331,66.1604584 C82.0157295,64.3374908 77.2216647,64.3622683 74.8510547,64.2578722 C69.3568808,64.0160432 63.9081467,65.5823153 59.5445817,69.1469801 C55.6976839,72.290096 55.3856641,80.6863848 52.4583326,81.4501943 C48.2058427,82.5598986 42.2818421,78.5816138 39.0270077,76.214531 C32.6624096,71.5857526 31.1561652,60.8431942 30.642864,53.6758724 C30.0120926,44.8580348 31.3291729,34.4002532 27.9188335,26 C26.2597768,26 27.3540339,42.1288693 27.3540339,42.1288693 L27.3540339,62.4851205 C27.3856735,77.7732046 36.935095,100.655445 58.1080116,109.393004 C63.2861266,111.52982 75.0153111,115 83.9999331,115 C92.9845551,115 104.71374,111.860188 109.891855,109.723371 C131.064771,100.985813 140.614193,77.7732046 140.646169,62.4851205 L140.646169,42.1288693 C140.646169,42.1288693 141.740089,26 140.081033,26" id="path-4" /></defs><mask fill="#FFFFFF" id="mask-5"><use xlink:href="#path-4" /></mask><use fill="#331B0C" fill-rule="evenodd" xlink:href="#path-4" /><g fill="#2C1B18" mask="url(#mask-5)"><g transform="translate(-32.000000, 0.000000)"><rect height="244" width="264" x="0" y="0" /></g></g></g><g fill="none" stroke-width="1" transform="translate(62.000000, 85.000000)"><defs><filter filterUnits="objectBoundingBox" height="109.8%" id="filter-8" width="101.6%" x="-0.8%" y="-2.4%"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1" /><feColorMatrix in="shadowOffsetOuter1" result="shadowMatrixOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.2 0" /><feMerge><feMergeNode in="shadowMatrixOuter1" /><feMergeNode in="SourceGraphic" /></feMerge></filter><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linear-gradient-9"><stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.5" /><stop offset="70.5058195%" stop-color="#000000" stop-opacity="0.5" /></linearGradient><path d="M44.9178864,17.5714286 C44.9178864,27.2737857 36.66775,35.1428571 22.9204545,35.1428571 L20.1704091,35.1428571 C6.42311364,35.1428571 0.923022727,27.2708571 0.923022727,17.5714286 L0.923022727,17.5714286 C0.923022727,7.86614286 2.20715909,0 21.4545455,0 L24.3863636,0 C43.63375,0 44.9178864,7.86614286 44.9178864,17.5714286 L44.9178864,17.5714286 Z" id="path-6" /><path d="M106.486068,17.5714286 C106.486068,27.2737857 98.2388636,35.1428571 84.4886364,35.1428571 L81.7385909,35.1428571 C67.9912955,35.1428571 62.4912045,27.2708571 62.4912045,17.5714286 L62.4912045,17.5714286 C62.4912045,7.86614286 63.7753409,0 83.0227273,0 L85.9545455,0 C105.199,0 106.486068,7.86614286 106.486068,17.5714286 L106.486068,17.5714286 Z" id="path-7" /></defs><g filter="url(#filter-8)" transform="translate(7.000000, 7.000000)"><g fill-rule="nonzero" transform="translate(10.795455, 2.928571)"><g><use fill="#000000" fill-opacity="0.700000048" fill-rule="evenodd" xlink:href="#path-6" /><use fill="url(#linear-gradient-9)" fill-rule="evenodd" xlink:href="#path-6" style="mix-blend-mode: screen" /></g><g><use fill="#000000" fill-opacity="0.700000048" fill-rule="evenodd" xlink:href="#path-7" /><use fill="url(#linear-gradient-9)" fill-rule="evenodd" xlink:href="#path-7" /></g></g><path d="M33.7159091,41 L30.9658636,41 C17.0778409,41 8.78665909,33.3359286 8.78665909,20.5 C8.78665909,10.127 10.5985227,0 32.25,0 L35.1818182,0 C56.8332955,0 58.6451591,10.127 58.6451591,20.5 C58.6451591,32.5686429 48.3955227,41 33.7159091,41 Z M32.25,5.85421429 C14.6502955,5.85421429 14.6502955,12.3175714 14.6502955,20.5 C14.6502955,27.1800714 17.4795,35.1428571 30.9658636,35.1428571 L33.7159091,35.1428571 C44.9418409,35.1428571 52.7815227,29.1217143 52.7815227,20.5 C52.7815227,12.3175714 52.7815227,5.85421429 35.1818182,5.85421429 L32.25,5.85421429 Z" fill="#252C2F" fill-rule="nonzero" /><path d="M95.2840909,41 L92.5340455,41 C78.6460227,41 70.3548409,33.3359286 70.3548409,20.5 C70.3548409,10.127 72.1667045,0 93.8181818,0 L96.75,0 C118.401477,0 120.213341,10.127 120.213341,20.5 C120.213341,32.5686429 109.963705,41 95.2840909,41 Z M93.8181818,5.85421429 C76.2184773,5.85421429 76.2184773,12.3175714 76.2184773,20.5 C76.2184773,27.1800714 79.0506136,35.1428571 92.5340455,35.1428571 L95.2840909,35.1428571 C106.510023,35.1428571 114.349705,29.1217143 114.349705,20.5 C114.349705,12.3175714 114.349705,5.85421429 96.75,5.85421429 L93.8181818,5.85421429 Z" fill="#252C2F" fill-rule="nonzero" /><path d="M2.93181818,5.85714286 C3.61786364,5.17185714 11.1233182,0 32.25,0 C49.9640455,0 53.7138409,1.88014286 59.3898409,4.72085714 L59.8053162,4.93054903 C60.1999353,5.07314243 62.2179351,5.77419634 64.5784525,5.85128811 C66.7290156,5.75689949 68.5684809,5.16080623 69.1059926,4.96981137 C75.5844654,1.74762081 81.9260118,0 96.75,0 C117.876682,0 125.382136,5.17185714 126.068182,5.85714286 C127.689477,5.85714286 129,7.16621429 129,8.78571429 L129,11.7142857 C129,13.3337857 127.689477,14.6428571 126.068182,14.6428571 C126.068182,14.6428571 120.204545,14.6428571 120.204545,17.5714286 C120.204545,20.5 117.272727,13.3337857 117.272727,11.7142857 L117.272727,8.8618831 C113.697201,7.46243482 107.296654,5.85714286 96.75,5.85714286 C84.9995538,5.85714286 79.1475515,6.98813142 74.1276604,9.10414393 L74.1837955,9.24257143 L71.6878772,10.2500422 L74.1813177,11.2582547 L71.981173,16.6874536 L69.263564,15.5885995 C69.0208516,15.4904597 68.4971539,15.3141463 67.770994,15.1309826 C65.7466083,14.6203594 63.6653786,14.4649153 61.8248214,14.8513001 C61.1495627,14.993056 60.5230576,15.2057795 59.9480988,15.4931011 L57.3260941,16.8033836 L54.7026238,11.5651815 L57.3246285,10.2548989 L57.3310023,10.251716 L54.8191364,9.23671429 L54.8992448,9.03890561 C50.5700368,6.97578666 46.5781927,5.85714286 32.25,5.85714286 C21.7038986,5.85714286 15.3034993,7.46145875 11.7272727,8.86093383 L11.7272727,11.7142857 C11.7272727,13.3337857 8.79545455,20.5 8.79545455,17.5714286 C8.79545455,14.6428571 2.93181818,14.6428571 2.93181818,14.6428571 C1.31345455,14.6428571 0,13.3337857 0,11.7142857 L0,8.78571429 C0,7.16621429 1.31345455,5.85714286 2.93181818,5.85714286 Z" fill="#252C2F" fill-rule="nonzero" /></g></g></g></g></g>'));
    }
}