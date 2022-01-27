<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests\Clothing\Graphics;

use PHPUnit\Framework\TestCase;
use Politriukas\Avataaars\Clothing\Graphics\Bear;
use Politriukas\Avataaars\Tests\GeneratesSvgConstraint;

final class BearTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGenerate(): void
    {
        self::assertThat((new Bear())->generate('mask-2'), new GeneratesSvgConstraint('<g fill-rule="evenodd" mask="url(#mask-2)" stroke-width="1"><defs><polygon points="47.8916289 0.430054064 47.8916289 41.9204613 0.45345556 41.9204613 0.45345556 0.430054064 47.8916289 0.430054064" id="path-1" /></defs><g transform="translate(77.000000, 58.000000)"><g transform="translate(31.000000, 1.000000)"><mask fill="#FFFFFF" id="mask-2"><use xlink:href="#path-1" /></mask><path d="M34.4465814,31.5861741 C33.968066,34.4016565 30.3675711,38.9307388 27.2995299,35.97048 C23.8326433,32.6262918 31.5245196,31.1602447 28.7810969,28.3763859 C27.5974268,27.1761741 24.3685608,27.83928 22.7791175,27.96528 C21.289633,28.0833741 18.9133856,28.4198682 19.4834474,30.5900329 C19.9159423,32.2398918 21.1926433,31.5342918 21.8715711,32.4815153 C22.4069938,33.2301035 22.1798598,35.9887624 21.3826639,36.7492094 C20.3796124,37.7053271 19.193468,37.4123153 17.7975093,36.7996094 C14.6057567,35.39928 13.1212206,31.4868565 15.2228289,28.5829271 C19.3780454,22.8417741 35.2897979,21.5244565 34.4465814,31.5861741 M14.9853031,14.7244094 C15.9695505,14.2811859 17.132932,14.5213271 17.7173443,15.5110447 C18.5189938,16.8669035 17.3595711,18.6842682 15.7424165,18.4668565 C14.0347052,18.2365976 13.1726845,15.5481035 14.9853031,14.7244094 M32.9472,16.3787153 C32.0911175,19.3854212 27.3109113,16.0012094 30.0112825,14.08848 C31.5626227,12.9900565 33.4583753,14.5801271 32.9472,16.3787153 M47.8267052,23.16888 C47.5911588,20.7887153 46.9270763,18.5231859 45.7389526,16.4385035 C45.1164371,15.3460094 44.3464577,14.3276329 43.5492619,13.35768 C43.2483959,12.9930212 42.6432,12.34968 42.5264165,12.1446212 C41.8173031,10.90488 41.888066,11.7834212 42.2789938,10.3598682 C42.8950763,8.11657412 44.2262103,6.28043294 43.1627876,3.87062118 C42.1735918,1.62930353 39.5078598,0.576832941 37.1791175,0.443915294 C36.0914474,0.382150588 35.0017979,0.525938824 33.9720247,0.892574118 C32.9368082,1.26069176 31.9708701,2.53255059 31.0717361,2.79393882 C30.3740041,2.99702118 28.3872,2.33391529 27.6305814,2.28549176 C26.2356124,2.19605647 24.8332206,2.23558588 23.4387464,2.31859765 C21.8087258,2.41544471 18.0632412,3.58205647 16.5257567,3.19565647 C15.5108289,2.94069176 14.3172619,1.41485647 13.1449732,1.03191529 C11.852932,0.610432941 10.4673649,0.467632941 9.17829278,0.954338824 C6.89260206,1.81805647 5.17845773,4.50605647 5.12501443,6.89560941 C5.09680825,8.15066824 5.78018969,9.01092706 5.91528247,10.1469035 C6.11816907,11.8619859 6.35223093,10.5026682 5.42835464,11.8718682 C4.9577567,12.5690682 4.13284948,13.1822682 3.60385979,13.8537741 C0.778787629,17.4405741 -0.278696907,22.73208 0.974746392,27.0733976 C4.13284948,38.0131624 14.6423753,42.4676329 25.4136742,41.86728 C34.6648082,41.3509271 48.9782103,34.1491624 47.8267052,23.16888" fill="#FFFFFF" mask="url(#mask-2)" /></g></g></g>'));
    }
}
