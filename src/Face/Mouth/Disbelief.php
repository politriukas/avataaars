<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class Disbelief implements Mouth
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(2.000000, 52.000000)', fillOpacity: '0.699999988', fill: '#000000', children: [
            path(d: 'M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15', transform: 'translate(54.000000, 22.000000) scale(1, -1) translate(-54.000000, -22.000000)'),
        ]);
    }
}
