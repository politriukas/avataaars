<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class Grimace implements Mouth
{
    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(2.000000, 52.000000)', children: [
            defs([
                rect(x: 24, y: 9, width: 60, height: 22, rx: 11, id: $path),
            ]),
            rect(fill: '#000000', fillOpacity: '0.599999964', fillRule: 'evenodd', x: 22, y: 7, width: 64, height: 26, rx: 13),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#FFFFFF', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            path(d: 'M71,22 L62,22 L62,34 L58,34 L58,22 L49,22 L49,34 L45,34 L45,22 L36,22 L36,34 L32,34 L32,22 L24,22 L24,18 L32,18 L32,6 L36,6 L36,18 L45,18 L45,6 L49,6 L49,18 L58,18 L58,6 L62,6 L62,18 L71,18 L71,6 L75,6 L75,18 L83.8666667,18 L83.8666667,22 L75,22 L75,34 L71,34 L71,22 Z', fill: '#E6E6E6', fillRule: 'evenodd', mask: "url(#{$mask})"),
        ]);
    }
}
