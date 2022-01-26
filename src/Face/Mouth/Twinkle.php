<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class Twinkle implements Mouth
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(2.000000, 52.000000)', fillOpacity: '0.599999964', fillRule: 'nonzero', fill: '#000000', children: [
            path(d: 'M40,16 C40,21.371763 46.1581544,25 54,25 C61.8418456,25 68,21.371763 68,16 C68,14.8954305 67.050301,14 66,14 C64.7072748,14 64.1302316,14.9051755 64,16 C62.7575758,18.9378973 59.6832595,20.7163149 54,21 C48.3167405,20.7163149 45.2424242,18.9378973 44,16 C43.8697684,14.9051755 43.2927252,14 42,14 C40.949699,14 40,14.8954305 40,16 Z'),
        ]);
    }
}
