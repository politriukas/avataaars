<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class Overall implements Clothing
{
    public function __construct(private ClothingColor $color)
    {
    }

    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(0.000000, 170.000000)', children: [
            defs([
                path(d: 'M94,29.6883435 L94,74 L170,74 L170,29.6883435 C179.362956,30.9893126 188.149952,34.0907916 196.00002,38.6318143 L196,110 L187,110 L77,110 L68,110 L68,38.6318027 C75.8500482,34.0907916 84.6370437,30.9893126 94,29.6883435 Z', id: $path),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#B7C1DB', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            $this->color->generate($mask),
            circle(fill: '#F4F4F4', fillRule: 'evenodd', cx: 81, cy: 83, r: 5),
            circle(fill: '#F4F4F4', fillRule: 'evenodd', cx: 183, cy: 83, r: 5),
        ]);
    }
}
