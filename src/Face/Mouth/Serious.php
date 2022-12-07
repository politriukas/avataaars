<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\rect;

final class Serious implements Mouth
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(2.000000, 52.000000)', fill: '#000000', fillOpacity: '0.699999988', children: [
            rect(x: 42, y: 18, width: 24, height: 6, rx: 3),
        ]);
    }
}
