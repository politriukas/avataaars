<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Nose;

use SVG\Nodes\SVGNode;

interface Nose
{
    public function generate(): SVGNode;
}
