<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Face;

use Politriukas\Avataaars\Face\EyeBrows\EyeBrows;
use Politriukas\Avataaars\Face\Eyes\Eyes;
use Politriukas\Avataaars\Face\Mouth\Mouth;
use Politriukas\Avataaars\Face\Nose\Nose;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\g;

final class DefaultFace implements Face
{
    public function __construct(
        private EyeBrows $eyeBrows,
        private Eyes $eyes,
        private Nose $nose,
        private Mouth $mouth,
    ) {
    }

    public function generate(): SVGGroup
    {
        return g(fill: '#000000', transform: 'translate(76.000000, 82.000000)', children: [
            $this->mouth->generate(),
            $this->nose->generate(),
            $this->eyes->generate(),
            $this->eyeBrows->generate(),
        ]);
    }
}
