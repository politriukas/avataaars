<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face\EyeBrows;

use SVG\Nodes\SVGNode;

interface EyeBrows
{
    public function generate(): SVGNode;
}
