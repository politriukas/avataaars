<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face;

use SVG\Nodes\SVGNode;

interface Face
{
    public function generate(): SVGNode;
}
