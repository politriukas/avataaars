<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing;

use SVG\Nodes\SVGNode;

interface Clothing
{
    public function generate(): SVGNode;
}
