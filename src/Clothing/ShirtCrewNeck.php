<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;
use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\ellipse;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class ShirtCrewNeck implements Clothing
{
    public function __construct(private ClothingColor $color)
    {
    }

    public function generate(): SVGGroup
    {
        $path = AvatarGlobalId::get('path-');
        $mask = AvatarGlobalId::get('mask-');

        return g(transform: 'translate(0.000000, 170.000000)', children: [
            defs([
                path(d: 'M165.960472,29.2949161 C202.936473,32.3249982 232,63.2942856 232,101.051724 L232,110 L32,110 L32,101.051724 C32,62.9525631 61.591985,31.7649812 99.0454063,29.2195264 C99.0152598,29.5931145 99,29.9692272 99,30.3476251 C99,42.2107177 113.998461,51.8276544 132.5,51.8276544 C151.001539,51.8276544 166,42.2107177 166,30.3476251 C166,29.9946691 165.986723,29.6437014 165.960472,29.2949161 Z', id: $path),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#E6E6E6', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            $this->color->generate($mask),
            g(opacity: '0.599999964', strokeWidth: '1', fillRule: 'evenodd', mask: "url(#{$mask})", fillOpacity: '0.16', fill: '#000000', children: [
                g(transform: 'translate(92.000000, 4.000000)', children: [
                    ellipse(cx: '40.5', cy: '27.8476251', rx: '39.6351047', ry: '26.9138272'),
                ]),
            ]),
        ]);
    }
}
