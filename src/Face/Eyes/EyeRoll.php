<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\g;

final class EyeRoll implements Eyes
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(0.000000, 8.000000)', children: [
            circle(cx: 30, cy: 22, r: 14, fill: '#FFFFFF'),
            circle(cx: 82, cy: 22, r: 14, fill: '#FFFFFF'),
            circle(cx: 30, cy: 14, r: 6, fill: '#000000', fillOpacity: '0.699999988'),
            circle(cx: 82, cy: 14, r: 6, fill: '#000000', fillOpacity: '0.699999988'),
        ]);
    }
}
