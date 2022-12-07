<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class Concerned implements Mouth
{
    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(2.000000, 52.000000)', children: [
            defs([
                path(d: 'M35.117844,15.1280772 C36.1757121,24.6198025 44.2259873,32 54,32 C63.8042055,32 71.8740075,24.574136 72.8917593,15.0400546 C72.9736685,14.272746 72.1167429,13 71.042767,13 C56.1487536,13 44.7379213,13 37.0868244,13 C36.0066168,13 35.0120058,14.1784435 35.117844,15.1280772 Z', id: $path),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}", transform: 'translate(54.003637, 22.500000) scale(1, -1) translate(-54.003637, -22.500000)'),
            ]),
            svgUse(fillOpacity: '0.699999988', fill: '#000000', fillRule: 'evenodd', transform: 'translate(54.003637, 22.500000) scale(1, -1) translate(-54.003637, -22.500000)', xlinkHref: "#{$path}"),
            rect(fill: '#FFFFFF', fillRule: 'evenodd', mask: "url(#{$mask})", x: 39, y: 2, width: 31, height: 16, rx: 5),
            g(strokeWidth: 1, fillRule: 'evenodd', mask: "url(#{$mask})", fill: '#FF4F6D', children: [
                g(transform: 'translate(38.000000, 24.000000)', children: [
                    circle(cx: 11, cy: 11, r: 11),
                    circle(cx: 21, cy: 11, r: 11),
                ]),
            ]),
        ]);
    }
}
