<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Awcodes\Curator\Models\Media;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'media_id',
        'is_primary',
        'sort_order',
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    /**
     * Get the product that owns this image
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the media from Curator
     */
    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
