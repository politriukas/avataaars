<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\g;

final class Surprised implements Eyes
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(0.000000, 8.000000)', children: [
            circle(fill: '#FFFFFF', cx: '30', cy: '22', r: '14'),
            circle(fill: '#FFFFFF', cx: '82', cy: '22', r: '14'),
            circle(fillOpacity: '0.699999988', fill: '#000000', cx: '30', cy: '22', r: '6'),
            circle(fillOpacity: '0.699999988', fill: '#000000', cx: '82', cy: '22', r: '6'),
        ]);
    }
}
