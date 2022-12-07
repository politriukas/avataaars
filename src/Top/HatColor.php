<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top;

use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\rect;

enum HatColor: string
{
    case Black = '#262E33';
    case Blue01 = '#65C9FF';
    case Blue02 = '#5199E4';
    case Blue03 = '#25557C';
    case Gray01 = '#E6E6E6';
    case Gray02 = '#929598';
    case Heather = '#3C4F5C';
    case PastelBlue = '#B1E2FF';
    case PastelGreen = '#A7FFC4';
    case PastelOrange = '#FFDEB5';
    case PastelRed = '#FFAFB9';
    case PastelYellow = '#FFFFB1';
    case Pink = '#FF488E';
    case Red = '#FF5C5C';
    case White = '#FFFFFF';

    public function generate(string $mask): SVGGroup
    {
        return g(fill: $this->value, fillRule: 'evenodd', mask: "url(#{$mask})", children: [
            rect(x: 0, y: 0, width: 264, height: 280),
        ]);
    }
}
