<?php

namespace App\Curations;

use Awcodes\Curator\Curations\CurationPreset;

class ProductGalleryPreset extends CurationPreset
{
    public function getKey(): string
    {
        return 'product-gallery';
    }

    public function getLabel(): string
    {
        return 'Product Gallery (800x1000)';
    }

    public function getWidth(): int
    {
        return 800;
    }

    public function getHeight(): int
    {
        return 1000;
    }

    public function getFormat(): string
    {
        return 'webp';
    }

    public function getQuality(): int
    {
        return 90;
    }
}
