<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Mouth;

use SVG\Nodes\SVGNode;

interface Mouth
{
    public function generate(): SVGNode;
}
