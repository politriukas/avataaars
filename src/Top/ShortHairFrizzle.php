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

final class ShortHairFrizzle implements Top
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
                rect(id: $path2, x: 0, y: 0, width: 264, height: 280),
                path(d: 'M90.9102919,55.3613196 L175.085702,55.3613196 C193.333279,44.8338001 196.759397,26.1510357 183.849606,9.92600089 C180.635746,5.88682054 175.085702,21.6755614 158.028596,22.6504878 C140.97149,23.6254143 142.608865,16.3498661 124.45759,19.0739248 C106.306316,21.7979835 108.311575,36.37843 96.4671989,39.8768239 C88.5709482,42.2090865 86.7186458,47.370585 90.9102919,55.3613196 Z', id: $path1),
                filter(x: '-0.8%', y: '-2.0%', width: '101.5%', height: '108.0%', filterUnits: 'objectBoundingBox', id: $filter, children: [
                    feOffset(dx: 0, dy: 2, in: 'SourceAlpha', result: 'shadowOffsetOuter1'),
                    feColorMatrix(values: '0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0', type: 'matrix', in: 'shadowOffsetOuter1', result: 'shadowMatrixOuter1'),
                    feMerge([
                        feMergeNode(in: 'shadowMatrixOuter1'),
                        feMergeNode(in: 'SourceGraphic'),
                    ]),
                ]),
            ]),
            mask(id: $mask2, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path2}"),
            ]),
            g(mask: "url(#{$mask2})", children: [
                g(transform: 'translate(-1.000000, 0.000000)', children: [
                    $this->facialHair->generate(),
                    mask(id: $mask1, fill: '#FFFFFF', children: [
                        svgUse(xlinkHref: "#{$path1}"),
                    ]),
                    svgUse(stroke: 'none', fill: '#252E32', fillRule: 'evenodd', xlinkHref: "#{$path1}"),
                    $this->hairColor->generate($mask1),
                    $this->accessory->generate(),
                ]),
            ]),
        ]);
    }
}
