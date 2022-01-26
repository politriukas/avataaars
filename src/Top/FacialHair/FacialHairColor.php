<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\FacialHair;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\rect;

enum FacialHairColor: string
{
    case Auburn = '#A55728';
    case Black = '#2C1B18';
    case Blonde = '#B58143';
    case BlondeGolden = '#D6B370';
    case Brown = '#724133';
    case BrownDark = '#4A312C';
    case Platinum = '#ECDCBF';
    case Red = '#C93305';
    public function generate(string $mask): SVGGroup
    {
        return g(fill: $this->value, mask: "url(#{$mask})", children: [
            g(transform: 'translate(-32.000000, 0.000000)', children: [
                rect(x: 0, y: 0, width: 264, height: 244),
            ]),
        ]);
    }
}
