<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing;

use Politriukas\Avataaars\AvatarGlobalId;
use Politriukas\Avataaars\Clothing\Graphics\ClothingGraphics;
use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class GraphicShirt implements Clothing
{
    public function __construct(
        private ClothingColor $color,
        private ClothingGraphics $graphics,
    ) {
    }

    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(0.000000, 170.000000)', children: [
            defs([
                path(d: 'M165.624032,29.2681342 C202.760022,32.1373245 232,63.1798426 232,101.051724 L232,110 L32,110 L32,101.051724 C32,62.8348009 61.7752018,31.5722494 99.3929298,29.1967444 C99.1342224,30.2735458 99,31.3767131 99,32.5 C99,44.3741221 113.998461,54 132.5,54 C151.001539,54 166,44.3741221 166,32.5 C166,31.4015235 165.871641,30.3222877 165.624025,29.2681336 Z', id: $path),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#E6E6E6', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            $this->color->generate($mask),
            $this->graphics->generate($mask),
        ]);
    }
}
