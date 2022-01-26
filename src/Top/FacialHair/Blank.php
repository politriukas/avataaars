<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\FacialHair;

use SVG\Nodes\SVGNode;

final class Blank implements FacialHair
{
    public function generate(): ?SVGNode
    {
        return null;
    }
}
