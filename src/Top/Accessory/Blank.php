<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\Accessory;

use SVG\Nodes\SVGNode;

final class Blank implements Accessory
{
    public function generate(): ?SVGNode
    {
        return null;
    }
}
