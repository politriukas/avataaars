<?php

declare(strict_types=1);

namespace Politriukas\Avataaars\Clothing;

use Politriukas\Avataaars\AvatarGlobalId;
use SVG\Nodes\Structures\SVGGroup;

use function Politriukas\Avataaars\defs;
use function Politriukas\Avataaars\g;
use function Politriukas\Avataaars\mask;
use function Politriukas\Avataaars\path;
use function Politriukas\Avataaars\svgUse;

final class ShirtScoopNeck implements Clothing
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
                path(d: 'M181.544255,32.3304167 C210.784209,41.4878872 232,68.7921987 232,101.051724 L232,110 L32,110 L32,101.051724 C32,68.3969699 53.7388273,40.8195914 83.5340368,32.0020332 C83.182234,33.4201865 83,34.8712315 83,36.3476251 C83,52.6289957 105.161905,65.8276544 132.5,65.8276544 C159.838095,65.8276544 182,52.6289957 182,36.3476251 C182,34.9849859 181.844766,33.6439396 181.544255,32.3304167 Z', id: $path),
            ]),
            mask(id: $mask, fill: '#FFFFFF', children: [
                svgUse(xlinkHref: "#{$path}"),
            ]),
            svgUse(fill: '#E6E6E6', fillRule: 'evenodd', xlinkHref: "#{$path}"),
            $this->color->generate($mask),
        ]);
    }
}
