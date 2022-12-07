<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top;

use Politriukas\Avataaars\AvatarGlobalId;
use Politriukas\Avataaars\Top\Accessory\Accessory;
use Politriukas\Avataaars\Top\FacialHair\FacialHair;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class LongHairBob implements Top
{
    public function __construct(
        private HairColor $hairColor,
        private FacialHair $facialHair,
        private Accessory $accessory,
    ) {
    }

    public function generate(): SVGGroup
    {
        $path1 = AvatarGlobalId::get('path-');
        $path2 = AvatarGlobalId::get('path-');
        $mask1 = AvatarGlobalId::get('mask-');
        $mask2 = AvatarGlobalId::get('mask-');

        return g(strokeWidth: '1', fillRule: 'evenodd', children: [
            defs([
                rect(id: $path1, x: 0, y: 0, width: 264, height: 280),
                path(d: 'M38,79.3595521 L38,111 C38,133.339168 51.0804213,152.623239 70,161.610951 L70,174.74565 C50.3625813,177.434228 34.6409914,182.163507 23.3845374,181.000327 C9.16164761,179.530612 1.49623627,150.795665 1,126 C0.382878875,95.1640258 29.3189583,30.7950013 40,18 C47.9231015,8.50878211 69.6952966,0.550643437 94.0001685,1 C118.30504,1.44935656 140.861928,6.81215989 149.000169,17 C161.324059,32.4276364 186.868727,91.0786423 187.000169,126 C187.093514,150.800049 177.46255,175.65995 164.000169,177 C152.920532,178.102871 137.475571,175.511343 118,173.997342 L118,161.610951 C136.919579,152.623239 150,133.339168 150,111 L150,82.9882378 C140.478735,78.1305678 131.863294,72.248172 124.153679,65.3410505 C127.362309,70.6368571 130.848786,75.1475352 134.61311,78.8730846 C107.596314,71.2928169 86.1055278,58.4501118 70.1407506,40.3449693 C62.1597317,56.8095313 51.4461487,69.8143919 38.0000014,79.3595511 Z', id: $path2),
            ]),
            mask(id: $mask1, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path1}"),
            ]),
            g(mask: "url(#{$mask1})", children: [
                g(transform: 'translate(-1.000000, 0.000000)', children: [
                    g(strokeWidth: '1', fillRule: 'evenodd', transform: 'translate(39.000000, 19.000000)', children: [
                        mask(id: $mask2, fill: '#FFFFFF', children: [
                            svgUse(xlinkHref: "#{$path2}"),
                        ]),
                        svgUse(fill: '#E6E6E6', xlinkHref: "#{$path2}"),
                        $this->hairColor->generate($mask2),
                    ]),
                    $this->facialHair->generate(),
                    $this->accessory->generate(),
                ]),
            ]),
        ]);
    }
}
