<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing\Graphics;

use SVG\Nodes\SVGNode;

interface ClothingGraphics
{
    public function generate(string $mask): SVGNode;
}
