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
use function Politriukas\Avataaars\rect;
use function Politriukas\Avataaars\svgUse;

final class NoHair implements Top
{
    public function __construct(
        private FacialHair $facialHair,
        private Accessory $accessory,
    ) {
    }

    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');
        $filter = AvatarGlobalId::get('filter-');

        return g(strokeWidth: '1', fillRule: 'evenodd', children: [
            defs([
                rect(id: $path, x: 0, y: 0, width: 264, height: 280),
                filter(x: '-0.8%', y: '-2.0%', width: '101.5%', height: '108.0%', filterUnits: 'objectBoundingBox', id: $filter, children: [
                    feOffset(dx: 0, dy: 2, in: 'SourceAlpha', result: 'shadowOffsetOuter1'),
                    feColorMatrix(values: '0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0', type: 'matrix', in: 'shadowOffsetOuter1', result: 'shadowMatrixOuter1'),
                    feMerge([
                        feMergeNode(in: 'shadowMatrixOuter1'),
                        feMergeNode(in: 'SourceGraphic'),
                    ]),
                ]),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            g(mask: "url(#{$mask})", children: [
                g(transform: 'translate(-1.000000, 0.000000)', children: [
                    $this->facialHair->generate(),
                    $this->accessory->generate(),
                ]),
            ]),
        ]);
    }
}
