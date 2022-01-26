<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\Accessory;

use SVG\Nodes\SVGNode;

interface Accessory
{
    public function generate(): ?SVGNode;
}
