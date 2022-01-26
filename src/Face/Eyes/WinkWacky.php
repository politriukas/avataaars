<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\circle;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\path;

final class WinkWacky implements Eyes
{
    public function generate(): SVGGroup
    {
        return g(transform: 'translate(0.000000, 8.000000)', children: [
            circle(fill: '#FFFFFF', cx: '82', cy: '22', r: '12'),
            circle(fillOpacity: '0.699999988', fill: '#000000', cx: '82', cy: '22', r: '6'),
            path(d: 'M16.1601674,25.4473116 C18.006676,21.648508 22.1644225,19 26.9975803,19 C31.8136766,19 35.9591217,21.629842 37.8153518,25.4071242 C38.3667605,26.5291977 37.5821037,27.4474817 36.790607,26.7670228 C34.3395063,24.6597833 30.8587163,23.3437884 26.9975803,23.3437884 C23.2572061,23.3437884 19.8737584,24.5787519 17.4375392,26.5716412 C16.5467928,27.3002944 15.6201012,26.5583844 16.1601674,25.4473116 Z', fillOpacity: '0.599999964', fill: '#000000'),
        ]);
    }
}
