<?php

declare(strict_types=1);

namespace Politriukas\Avataaars;

use SVG\Nodes\Filters\SVGFEColorMatrix;
use SVG\Nodes\Filters\SVGFEComposite;
use SVG\Nodes\Filters\SVGFEMerge;
use SVG\Nodes\Filters\SVGFEMergeNode;
use SVG\Nodes\Filters\SVGFEOffset;
use SVG\Nodes\Filters\SVGFilter;
use SVG\Nodes\Presentation\SVGLinearGradient;
use SVG\Nodes\Presentation\SVGStop;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGEllipse;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGDefs;
use SVG\Nodes\Structures\SVGGroup;
use SVG\Nodes\Structures\SVGMask;
use SVG\Nodes\Structures\SVGUse;
use SVG\Nodes\SVGNode;
use SVG\SVG;
use function array_filter;

/**
 * @param list<SVGNode|null> $children
 */
function svg(
    int|float|string $width,
    int|float|string $height,
    string $viewBox,
    array $children = [],
): SVG {
    $svg = new SVG();
    $document = $svg->getDocument();
    $document->setAttribute('height', (string) $height);
    $document->setAttribute('viewBox', $viewBox);
    $document->setAttribute('width', (string) $width);

    foreach (array_filter($children) as $child) {
        $document->addChild($child);
    }

    return $svg;
}

/**
 * @param 'evenodd'|'nonzero'|null   $fillRule
 * @param array<string, string|null> $styles
 */
function svgUse(
    ?string $fill = null,
    int|float|string|null $fillOpacity = null,
    ?string $fillRule = null,
    ?string $filter = null,
    ?string $stroke = null,
    array $styles = [],
    ?string $transform = null,
    ?string $xlinkHref = null,
): SVGUse {
    $use = new SVGUse();
    $use->setAttribute('fill', $fill);
    $use->setAttribute('fill-opacity', $fillOpacity !== null ? (string) $fillOpacity : null);
    $use->setAttribute('fill-rule', $fillRule);
    $use->setAttribute('filter', $filter);
    $use->setAttribute('stroke', $stroke);
    $use->setAttribute('transform', $transform);
    $use->setAttribute('xlink:href', $xlinkHref);
    foreach ($styles as $style => $value) {
        $use->setStyle($style, $value);
    }

    return $use;
}

/**
 * @param list<SVGNode|null>         $children
 * @param 'evenodd'|'nonzero'|null   $fillRule
 * @param array<string, string|null> $styles
 */
function g(
    array $children = [],
    ?string $fill = null,
    int|float|string|null $fillOpacity = null,
    ?string $fillRule = null,
    ?string $filter = null,
    ?string $mask = null,
    int|float|string|null $opacity = null,
    ?string $stroke = null,
    int|float|string|null $strokeWidth = null,
    ?string $transform = null,
    array $styles = [],
): SVGGroup {
    $group = new SVGGroup();
    $group->setAttribute('fill', $fill);
    $group->setAttribute('fill-opacity', $fillOpacity !== null ? (string) $fillOpacity : null);
    $group->setAttribute('fill-rule', $fillRule);
    $group->setAttribute('filter', $filter);
    $group->setAttribute('mask', $mask);
    $group->setAttribute('opacity', $opacity !== null ? (string) $opacity : null);
    $group->setAttribute('stroke', $stroke);
    $group->setAttribute('stroke-width', $strokeWidth !== null ? (string) $strokeWidth : null);
    $group->setAttribute('transform', $transform);
    foreach ($styles as $k => $v) {
        $group->setStyle($k, $v);
    }

    foreach (array_filter($children) as $child) {
        $group->addChild($child);
    }

    return $group;
}

/**
 * @param 'evenodd'|'nonzero'|null $fillRule
 */
function path(
    ?string $d = null,
    ?string $fill = null,
    int|float|string|null $fillOpacity = null,
    ?string $fillRule = null,
    ?string $id = null,
    ?string $mask = null,
    string|int|float|null $opacity = null,
    ?string $stroke = null,
    ?string $transform = null,
): SVGPath {
    $path = new SVGPath(d: $d);
    $path->setAttribute('fill', $fill);
    $path->setAttribute('fill-opacity', $fillOpacity !== null ? (string) $fillOpacity : null);
    $path->setAttribute('fill-rule', $fillRule);
    $path->setAttribute('id', $id);
    $path->setAttribute('mask', $mask);
    $path->setAttribute('opacity', $opacity !== null ? (string) $opacity : null);
    $path->setAttribute('stroke', $stroke);
    $path->setAttribute('transform', $transform);

    return $path;
}

/**
 * @param list<SVGNode|null> $children
 */
function defs(array $children): SVGDefs
{
    $defs = new SVGDefs();
    foreach (array_filter($children) as $child) {
        $defs->addChild($child);
    }

    return $defs;
}

/**
 * @param 'evenodd'|'nonzero'|null $fillRule
 */
function rect(
    int|float|string $x,
    int|float|string $y,
    int|float|string $width,
    int|float|string $height,
    int|float|string|null $rx = null,
    ?string $id = null,
    ?string $fill = null,
    int|float|string|null $fillOpacity = null,
    ?string $fillRule = null,
    ?string $mask = null,
): SVGRect {
    $rect = new SVGRect();
    $rect->setAttribute('fill', $fill);
    $rect->setAttribute('fill-opacity', $fillOpacity !== null ? (string) $fillOpacity : null);
    $rect->setAttribute('fill-rule', $fillRule);
    $rect->setAttribute('height', (string) $height);
    $rect->setAttribute('id', $id);
    $rect->setAttribute('mask', $mask);
    $rect->setAttribute('rx', $rx !== null ? (string) $rx : null);
    $rect->setAttribute('width', (string) $width);
    $rect->setAttribute('x', (string) $x);
    $rect->setAttribute('y', (string) $y);

    return $rect;
}

/**
 * @param 'evenodd'|'nonzero'|null $fillRule
 */
function circle(
    int|float|string $cx,
    int|float|string $cy,
    int|float|string $r,
    ?string $fill = null,
    int|float|string|null $fillOpacity = null,
    ?string $fillRule = null,
    ?string $id = null,
    ?string $mask = null,
): SVGCircle {
    $circle = new SVGCircle();
    $circle->setAttribute('cx', (string) $cx);
    $circle->setAttribute('cy', (string) $cy);
    $circle->setAttribute('fill', $fill);
    $circle->setAttribute('fill-opacity', $fillOpacity !== null ? (string) $fillOpacity : null);
    $circle->setAttribute('fill-rule', $fillRule);
    $circle->setAttribute('id', $id);
    $circle->setAttribute('mask', $mask);
    $circle->setAttribute('r', (string) $r);

    return $circle;
}

function ellipse(
    int|float|string $cx,
    int|float|string $cy,
    int|float|string $rx,
    int|float|string $ry,
    ?string $fill = null,
    ?string $mask = null,
): SVGEllipse {
    $ellipse = new SVGEllipse();
    $ellipse->setAttribute('cx', (string) $cx);
    $ellipse->setAttribute('cy', (string) $cy);
    $ellipse->setAttribute('fill', $fill);
    $ellipse->setAttribute('mask', $mask);
    $ellipse->setAttribute('rx', (string) $rx);
    $ellipse->setAttribute('ry', (string) $ry);

    return $ellipse;
}

/**
 * @param 'evenodd'|'nonzero'|null $fillRule
 */
function polygon(
    string $points,
    ?string $fill = null,
    ?string $fillRule = null,
    ?string $id = null,
    ?string $transform = null
): SVGPolygon {
    $polygon = new SVGPolygon();
    $polygon->setAttribute('fill', $fill);
    $polygon->setAttribute('fill-rule', $fillRule);
    $polygon->setAttribute('id', $id);
    $polygon->setAttribute('points', $points);
    $polygon->setAttribute('transform', $transform);

    return $polygon;
}

/**
 * @param list<SVGNode|null> $children
 */
function mask(string $id, ?string $fill = null, array $children = []): SVGMask
{
    $mask = new SVGMask();
    $mask->setAttribute('fill', $fill);
    $mask->setAttribute('id', $id);

    foreach (array_filter($children) as $child) {
        $mask->addChild($child);
    }

    return $mask;
}

/**
 * @param list<SVGNode|null> $children
 */
function filter(
    int|float|string $x,
    int|float|string $y,
    int|float|string $width,
    int|float|string $height,
    string $filterUnits,
    string $id,
    array $children,
): SVGFilter {
    $filter = new SVGFilter();
    $filter->setAttribute('filterUnits', $filterUnits);
    $filter->setAttribute('height', (string) $height);
    $filter->setAttribute('id', $id);
    $filter->setAttribute('width', (string) $width);
    $filter->setAttribute('x', (string) $x);
    $filter->setAttribute('y', (string) $y);

    foreach (array_filter($children) as $child) {
        $filter->addChild($child);
    }

    return $filter;
}

function feOffset(int|float|string $dx, int|float|string $dy, string $in, string $result): SVGFEOffset
{
    $feOffset = new SVGFEOffset();
    $feOffset->setAttribute('dx', (string) $dx);
    $feOffset->setAttribute('dy', (string) $dy);
    $feOffset->setAttribute('in', $in);
    $feOffset->setAttribute('result', $result);

    return $feOffset;
}

function feColorMatrix(string $values, string $type, string $in, ?string $result = null): SVGFEColorMatrix
{
    $feColorMatrix = new SVGFEColorMatrix();
    $feColorMatrix->setAttribute('in', $in);
    $feColorMatrix->setAttribute('result', $result);
    $feColorMatrix->setAttribute('type', $type);
    $feColorMatrix->setAttribute('values', $values);

    return $feColorMatrix;
}

/**
 * @param list<SVGFEMergeNode|null> $children
 */
function feMerge(array $children): SVGFEMerge
{
    $feMerge = new SVGFEMerge();

    foreach (array_filter($children) as $child) {
        $feMerge->addChild($child);
    }

    return $feMerge;
}

function feMergeNode(string $in): SVGFEMergeNode
{
    $feMergeNode = new SVGFEMergeNode();
    $feMergeNode->setAttribute('in', $in);

    return $feMergeNode;
}

function feComposite(
    ?string $in = null,
    ?string $in2 = null,
    int|float|string|null $k2 = null,
    int|float|string|null $k3 = null,
    ?string $operator = null,
    ?string $result = null,
): SVGFEComposite {
    $feComposite = new SVGFEComposite();
    $feComposite->setAttribute('in', $in);
    $feComposite->setAttribute('in2', $in2);
    $feComposite->setAttribute('k2', $k2 !== null ? (string) $k2 : null);
    $feComposite->setAttribute('k3', $k3 !== null ? (string) $k3 : null);
    $feComposite->setAttribute('operator', $operator);
    $feComposite->setAttribute('result', $result);

    return $feComposite;
}

/**
 * @param list<SVGNode|null> $children
 */
function linearGradient(
    string $x1,
    string $y1,
    string $x2,
    string $y2,
    string $id,
    array $children,
): SVGLinearGradient {
    $linearGradient = new SVGLinearGradient();
    $linearGradient->setAttribute('x1', $x1);
    $linearGradient->setAttribute('y1', $y1);
    $linearGradient->setAttribute('x2', $x2);
    $linearGradient->setAttribute('y2', $y2);
    $linearGradient->setAttribute('id', $id);

    foreach (array_filter($children) as $child) {
        $linearGradient->addChild($child);
    }

    return $linearGradient;
}

function stop(
    string $stopColor,
    string $stopOpacity,
    string $offset,
): SVGStop {
    $stop = new SVGStop();
    $stop->setAttribute('offset', $offset);
    $stop->setAttribute('stop-color', $stopColor);
    $stop->setAttribute('stop-opacity', $stopOpacity);

    return $stop;
}
