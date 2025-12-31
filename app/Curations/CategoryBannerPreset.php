<?php

namespace App\Curations;

use Awcodes\Curator\Curations\CurationPreset;

class CategoryBannerPreset extends CurationPreset
{
    public function getKey(): string
    {
        return 'category-banner';
    }

    public function getLabel(): string
    {
        return 'Category Banner (1200x600)';
    }

    public function getWidth(): int
    {
        return 1200;
    }

    public function getHeight(): int
    {
        return 600;
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
