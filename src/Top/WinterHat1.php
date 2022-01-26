<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top;

use Politriukas\Avataaars\AvatarGlobalId;
use Politriukas\Avataaars\Top\Accessory\Accessory;
use Politriukas\Avataaars\Top\FacialHair\FacialHair;
use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\feColorMatrix;
use function Politriukas\Avataaars\feOffset;
use function Politriukas\Avataaars\filter;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class WinterHat1 implements Top
{
    public function __construct(
        private HatColor $hatColor,
        private FacialHair $facialHair,
        private Accessory $accessory,
    ) {
    }

    public function generate(): SVGGroup
    {
        $path1 = AvatarGlobalId::get('path-');
        $path2 = AvatarGlobalId::get('path-');
        $path3 = AvatarGlobalId::get('path-');
        $mask1 = AvatarGlobalId::get('mask-');
        $mask2 = AvatarGlobalId::get('mask-');
        $filter = AvatarGlobalId::get('filter-');

        return g([
            defs([
                rect(id: $path3, x: 0, y: 0, width: 264, height: 280),
                path(d: 'M120,54 L20,54 L20,155 C20,160.522847 15.5228475,165 10,165 C4.4771525,165 6.76353751e-16,160.522847 0,155 L0,54 L0,44 C-2.9759565e-15,19.699471 19.699471,4.46393476e-15 44,0 L96,0 C120.300529,-4.46393476e-15 140,19.699471 140,44 L140,54 L140,155 C140,160.522847 135.522847,165 130,165 C124.477153,165 120,160.522847 120,155 L120,54 Z', id: $path1),
                filter(x: '-0.8%', y: '-2.8%', width: '101.7%', height: '111.1%', filterUnits: 'objectBoundingBox', id: $filter, children: [
                    feOffset(dx: 0, dy: 2, in: 'SourceAlpha', result: 'shadowOffsetOuter1'),
                    feColorMatrix(values: '0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.1 0', type: 'matrix', in: 'shadowOffsetOuter1'),
                ]),
                rect(id: $path2, x: 74, y: 50, width: 118, height: 36, rx: 8),
            ]),
            mask(id: $mask1, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path3}"),
            ]),
            g(transform: 'translate(-1.000000, 0.000000)', children: [
                g(strokeWidth: '1', fillRule: 'evenodd', transform: 'translate(63.000000, 20.000000)', children: [
                    path(d: 'M1,48 L23.6714286,48 L23.6714286,153.664286 C23.6714286,159.924828 18.5962564,165 12.3357143,165 C6.07517216,165 1,159.924828 1,153.664286 L1,48 Z M116.328571,48 L139,48 L139,153.664286 C139,159.924828 133.924828,165 127.664286,165 C121.403744,165 116.328571,159.924828 116.328571,153.664286 L116.328571,48 Z', fill: '#F4F4F4'),
                    mask(id: $mask2, fill: '#FFFFFF', children: [
                        svgUse(xlinkHref: "#{$path1}"),
                    ]),
                    svgUse(fill: '#D8D8D8', xlinkHref: "#{$path1}"),
                    $this->hatColor->generate($mask2),
                ]),
                g([
                    svgUse(fill: '#000000', fillOpacity: '1', filter: "url(#{$path2})", xlinkHref: "#{$path2}"),
                    svgUse(fill: '#F4F4F4', fillRule: 'evenodd', xlinkHref: "#{$path2}"),
                ]),
                $this->facialHair->generate(),
                $this->accessory->generate(),
            ]),
        ]);
    }
}
