# PHP library for Avataaars

PHP Library for generating SVG avatars based on [React Avataaars](https://github.com/fangpenlin/avataaars).

## Install

`composer require politriukas/avataaars`

## Example

```php
<?php

use Politriukas\Avataaars\Avatar;
use Politriukas\Avataaars\AvatarStyle;
use Politriukas\Avataaars\Clothing\ClothingColor;
use Politriukas\Avataaars\Clothing\GraphicShirt;
use Politriukas\Avataaars\Clothing\Graphics\Deer;
use Politriukas\Avataaars\Face\DefaultFace;
use Politriukas\Avataaars\Face\EyeBrows\RaisedExcitedNatural;
use Politriukas\Avataaars\Face\Eyes\EyeRoll;
use Politriukas\Avataaars\Face\Mouth\Grimace;
use Politriukas\Avataaars\Face\Nose\DefaultNose;
use Politriukas\Avataaars\Skin;
use Politriukas\Avataaars\Top\Accessory\Wayfarers;
use Politriukas\Avataaars\Top\FacialHair\FacialHairColor;
use Politriukas\Avataaars\Top\FacialHair\MoustacheFancy;
use Politriukas\Avataaars\Top\HairColor;
use Politriukas\Avataaars\Top\LongHairDreads;

require __DIR__.'/vendor/autoload.php';

// $avatar is instanceof SVG\SVG from `meyfa/php-svg` library
$avatar = (new Avatar())
    ->generate(
        skin: Skin::Tanned,
        face: new DefaultFace(
            eyeBrows: new RaisedExcitedNatural(),
            eyes: new EyeRoll(),
            nose: new DefaultNose(),
            mouth: new Grimace(),
        ),
        top: new LongHairDreads(
            hairColor: HairColor::SilverGray,
            facialHair: new MoustacheFancy(color: FacialHairColor::Red),
            accessory: new Wayfarers(),
        ),
        clothing: new GraphicShirt(
            color: ClothingColor::Blue03,
            graphics: new Deer(),
        ),
        style: AvatarStyle::Transparent,
    );

// Output to browser
header('Content-Type: image/svg+xml');

echo $avatar->toXMLString(false);
```
