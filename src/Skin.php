<?php

declare(strict_types=1);

namespace Politriukas\Avataaars;

use SVG\Nodes\Structures\SVGGroup;

enum Skin: string
{
    case Black = '#614335';
    case Brown = '#D08B5B';
    case DarkBrown = '#AE5D29';
    case Tanned = '#FD9841';
    case Yellow = '#F8D25C';
    case Pale = '#FFDBB4';
    case Light = '#EDB98A';

    public function generate(string $mask): SVGGroup
    {
        return g(fill: $this->value, mask: "url(#{$mask})", children: [
            g(transform: 'translate(0.000000, 0.000000)', children: [
                rect(x: 0, y: 0, width: 264, height: 280),
            ]),
        ]);
    }
}
