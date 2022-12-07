<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Tests;

use PHPUnit\Framework\Constraint\Constraint;
use SVG\Nodes\SVGNode;
use SVG\SVG;
use SVG\Writing\SVGWriter;

use function sprintf;

final class GeneratesSvgConstraint extends Constraint
{
    public function __construct(private string $expectedSvg)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('SVGNode equals to "%s" svg', $this->expectedSvg);
    }

    /**
     * {@inheritdoc}
     */
    protected function matches($other): bool
    {
        if (!$other instanceof SVG && !$other instanceof SVGNode) {
            return false;
        }

        return $this->expectedSvg === $this->getXmlFromSvgNode($other);
    }

    /**
     * {@inheritdoc}
     */
    protected function failureDescription($other): string
    {
        return sprintf('"%s"%s equals to "%s" svg', get_debug_type($other), $other instanceof SVG || $other instanceof SVGNode ? " ({$this->getXmlFromSvgNode($other)})" : '', $this->expectedSvg);
    }

    private function getXmlFromSvgNode(SVG|SVGNode $node): string
    {
        $writer = new SVGWriter(isStandalone: false);
        $writer->writeNode($node instanceof SVG ? $node->getDocument() : $node);

        return $writer->getString();
    }
}
