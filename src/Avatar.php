<?php

declare(strict_types=1);

namespace Politriukas\Avataaars;

use Politriukas\Avataaars\Clothing\Clothing;
use Politriukas\Avataaars\Face\Face;
use Politriukas\Avataaars\Top\Top;
use SVG\SVG;

final class Avatar
{
    public function generate(Skin $skin, Face $face, Top $top, Clothing $clothing, AvatarStyle $style): SVG
    {
        $path1 = AvatarGlobalId::get('path-');
        $path2 = AvatarGlobalId::get('path-');
        $path3 = AvatarGlobalId::get('path-');
        $mask1 = AvatarGlobalId::get('mask-');
        $mask2 = AvatarGlobalId::get('mask-');
        $mask3 = AvatarGlobalId::get('mask-');

        return svg(width: '264px', height: '280px', viewBox: '0 0 264 280', children: [
            defs([
                circle(cx: 120, cy: 120, r: 120, id: $path1),
                path(d: 'M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z', id: $path2),
                path(d: 'M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z', id: $path3),
            ]),
            g(fill: 'none', fillRule: 'evenodd', stroke: 'none', strokeWidth: '1', children: [
                g(transform: 'translate(-825.000000, -1100.000000)', children: [
                    g(transform: 'translate(825.000000, 1100.000000)', children: [
                        $style === AvatarStyle::Circle ? g(fillRule: 'evenodd', strokeWidth: 1, transform: 'translate(12.000000, 40.000000)', children: [
                            mask(fill: 'white', id: $mask1, children: [
                                svgUse(xlinkHref: "#{$path1}"),
                            ]),
                            svgUse(fill: '#E6E6E6', xlinkHref: "#{$path1}"),
                            g(fill: '#65C9FF', mask: "url(#{$mask1})", children: [
                                rect(x: 0, y: 0, width: 240, height: 240),
                            ]),
                        ]) : null,
                        $style === AvatarStyle::Circle ? mask(fill: 'white', id: $mask2, children: [
                            svgUse(xlinkHref: "#{$path2}"),
                        ]) : null,
                        g(fillRule: 'evenodd', mask: "url(#{$mask2})", strokeWidth: '1', children: [
                            g(transform: 'translate(32.000000, 36.000000)', children: [
                                mask(fill: '#FFFFFF', id: $mask3, children: [
                                    svgUse(xlinkHref: "#{$path3}"),
                                ]),
                                svgUse(fill: '#D0C6AC', xlinkHref: "#{$path3}"),
                                $skin->generate($mask3),
                                path(d: 'M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z', fill: '#000000', fillOpacity: '0.100000001', mask: "url(#{$mask3})"),
                            ]),
                            $clothing->generate(),
                            $face->generate(),
                            $top->generate(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
}
