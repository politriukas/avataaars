<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Nose;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class DefaultNose implements Nose
{
    public function __construct()
    {
    }

    public function generate(): SVGGroup
    {
        return g(fillOpacity: '0.16', transform: 'translate(28.000000, 40.000000)', children: [
            path(d: 'M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8'),
        ]);
    }
}
