<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Top\FacialHair;

use SVG\Nodes\SVGNode;

interface FacialHair
{
    public function generate(): ?SVGNode;
}
