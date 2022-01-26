<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\Eyes;

use SVG\Nodes\SVGNode;

interface Eyes
{
    public function generate(): SVGNode;
}
