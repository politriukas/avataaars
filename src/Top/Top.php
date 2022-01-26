<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top;

use SVG\Nodes\SVGNode;

interface Top
{
    public function generate(): SVGNode;
}
