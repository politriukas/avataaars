<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class Squint implements Eyes
{
    public function generate(): SVGGroup
    {
        $path1 = AvatarGlobalId::get('path-');
        $path2 = AvatarGlobalId::get('path-');
        $mask1 = AvatarGlobalId::get('mask-');
        $mask2 = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(0.000000, 8.000000)', children: [
            defs([
                path(d: 'M14,14.0481187 C23.6099827,14.0481187 28,18.4994466 28,11.5617716 C28,4.62409673 21.7319865,0 14,0 C6.2680135,0 0,4.62409673 0,11.5617716 C0,18.4994466 4.39001726,14.0481187 14,14.0481187 Z', id: $path1),
                path(d: 'M14,14.0481187 C23.6099827,14.0481187 28,18.4994466 28,11.5617716 C28,4.62409673 21.7319865,0 14,0 C6.2680135,0 0,4.62409673 0,11.5617716 C0,18.4994466 4.39001726,14.0481187 14,14.0481187 Z', id: $path2),
            ]),
            g(transform: 'translate(16.000000, 13.000000)', children: [
                mask(id: $mask1, fill: '#FFFFFF', children: [
                    svgUse(xlinkHref: "#{$path1}"),
                ]),
                svgUse(fill: '#FFFFFF', xlinkHref: "#{$path1}"),
                circle(fillOpacity: '0.699999988', fill: '#000000', mask: "url(#{$mask1})", cx: '14', cy: '10', r: '6'),
            ]),
            g(transform: 'translate(68.000000, 13.000000)', children: [
                mask(id: $mask2, fill: '#FFFFFF', children: [
                    svgUse(xlinkHref: "#{$path2}"),
                ]),
                svgUse(fill: '#FFFFFF', xlinkHref: "#{$path2}"),
                circle(fillOpacity: '0.699999988', fill: '#000000', mask: "url(#{$mask2})", cx: '14', cy: '10', r: '6'),
            ]),
        ]);
    }
}
