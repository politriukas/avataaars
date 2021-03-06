<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing\Graphics;

use SVG\Nodes\SVGNode;

interface Graphics
{
    public function generate(string $mask): SVGNode;
}
