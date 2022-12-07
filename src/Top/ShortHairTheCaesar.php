<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top;

use Politriukas\Avataaars\AvatarGlobalId;
use Politriukas\Avataaars\Top\Accessory\Accessory;
use Politriukas\Avataaars\Top\FacialHair\FacialHair;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\feColorMatrix;
use function Politriukas\Avataaars\feMerge;
use function Politriukas\Avataaars\feMergeNode;
use function Politriukas\Avataaars\feOffset;
use function Politriukas\Avataaars\filter;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class ShortHairTheCaesar implements Top
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
        $filter = AvatarGlobalId::get('filter-');

        return g(strokeWidth: '1', fillRule: 'evenodd', children: [
            defs([
                rect(id: $path1, x: 0, y: 0, width: 264, height: 280),
                path(d: 'M1,64 C1.34685629,65.488448 2.67275588,65.2226722 3,64 C2.53726005,62.445722 6.29594493,35.2480719 16,28 C19.618222,25.4833872 39.0082164,23.2319099 58.3126144,23.245568 C77.4086061,23.2590787 96.4208396,25.5105561 100,28 C109.704055,35.2480719 113.46274,62.445722 113,64 C113.327244,65.2226722 114.653144,65.488448 115,64 C115.719178,53.7019177 115,0.274362825 58,1 C1,1.72563718 0.280821545,53.7019177 1,64 Z', id: $path2),
                filter(x: '-0.8%', y: '-2.0%', width: '101.5%', height: '108.0%', filterUnits: 'objectBoundingBox', id: $filter, children: [
                    feOffset(dx: 0, dy: 2, in: 'SourceAlpha', result: 'shadowOffsetOuter1'),
                    feColorMatrix(values: '0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0', type: 'matrix', in: 'shadowOffsetOuter1', result: 'shadowMatrixOuter1'),
                    feMerge([
                        feMergeNode(in: 'shadowMatrixOuter1'),
                        feMergeNode(in: 'SourceGraphic'),
                    ]),
                ]),
            ]),
            mask(id: $mask1, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path1}"),
            ]),
            g(mask: "url(#{$mask1})", children: [
                g(transform: 'translate(-1.000000, 0.000000)', children: [
                    $this->facialHair->generate(),
                    g(strokeWidth: '1', fillRule: 'evenodd', transform: 'translate(75.000000, 34.000000)', children: [
                        mask(id: $mask2, fill: '#FFFFFF', children: [
                            svgUse(xlinkHref: "#{$path2}"),
                        ]),
                        svgUse(fill: '#28354B', xlinkHref: "#{$path2}"),
                        $this->hairColor->generate($mask2),
                    ]),
                    $this->accessory->generate(),
                ]),
            ]),
        ]);
    }
}
