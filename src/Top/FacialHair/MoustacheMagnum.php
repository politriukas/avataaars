<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\FacialHair;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class MoustacheMagnum implements FacialHair
{
    public function __construct(private FacialHairColor $color)
    {
    }

    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(49.000000, 72.000000)', children: [
            defs([
                path(d: 'M83.9980103,74.839711 C83.4569991,75.6087366 82.761047,76.2496937 81.949688,76.6891498 C73.0477917,81.5102869 63.8767499,77.3322546 58.8763101,77.6298353 C56.459601,77.7739966 53.3405442,79.4153191 52.2155358,77.6791014 C50.9768736,75.7669804 55.0680827,65.2207224 64.7214121,63.4643353 C71.7310704,62.1893309 81.4972391,63.6024033 83.9980103,66.9380109 C86.4987814,63.6024033 96.2649453,62.1893309 103.274279,63.4643353 C112.927938,65.2207224 117.019147,75.7669804 115.780485,77.6791014 C114.655476,79.4153191 111.53642,77.7739966 109.119711,77.6298353 C104.118941,77.3322546 94.948229,81.5102869 86.0463327,76.6891498 C85.2349736,76.2496937 84.5390216,75.6087366 83.9980103,74.839711 Z', id: $path),
            ]),
            mask(fill: '#FFFFFF', id: $mask, children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#28354B', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            $this->color->generate($mask),
        ]);
    }
}
