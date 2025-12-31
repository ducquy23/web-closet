<?php

namespace App\Curations;

use Awcodes\Curator\Curations\CurationPreset;

class ProductThumbnailPreset extends CurationPreset
{
    public function getKey(): string
    {
        return 'product-thumbnail';
    }

    public function getLabel(): string
    {
        return 'Product Thumbnail (300x400)';
    }

    public function getWidth(): int
    {
        return 300;
    }

    public function getHeight(): int
    {
        return 400;
    }

    public function getFormat(): string
    {
        return 'webp';
    }

    public function getQuality(): int
    {
        return 85;
    }
}
