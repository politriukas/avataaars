<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class Cry implements Eyes
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(0.000000, 8.000000)', children: [
            circle(fillOpacity: '0.599999964', fill: '#000000', fillRule: 'evenodd', cx: '30', cy: '22', r: '6'),
            path(d: 'M25,27 C25,27 19,34.2706667 19,38.2706667 C19,41.5846667 21.686,44.2706667 25,44.2706667 C28.314,44.2706667 31,41.5846667 31,38.2706667 C31,34.2706667 25,27 25,27 Z', fill: '#92D9FF', fillRule: 'nonzero'),
            circle(fillOpacity: '0.599999964', fill: '#000000', fillRule: 'evenodd', cx: '82', cy: '22', r: '6'),
        ]);
    }
}
