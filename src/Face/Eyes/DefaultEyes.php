<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\g;

final class DefaultEyes implements Eyes
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(0.000000, 8.000000)', fillOpacity: '0.599999964', children: [
            circle(cx: '30', cy: '22', r: '6'),
            circle(cx: '82', cy: '22', r: '6'),
        ]);
    }
}
