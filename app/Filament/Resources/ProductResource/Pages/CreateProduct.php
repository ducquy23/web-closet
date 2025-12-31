<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\ProductImage;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
    
    protected ?int $primaryImageId = null;
    protected array $galleryImages = [];

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Lưu ảnh chính và gallery vào property
        $this->primaryImageId = $data['primary_image_id'] ?? null;
        $this->galleryImages = $data['gallery_images'] ?? [];
        
        // Xóa các field không thuộc bảng products
        unset($data['primary_image_id'], $data['gallery_images']);
        
        return $data;
    }

    protected function afterCreate(): void
    {
        $product = $this->record;
        
        // Tạo ảnh chính
        if ($this->primaryImageId) {
            ProductImage::create([
                'product_id' => $product->id,
                'media_id' => $this->primaryImageId,
                'is_primary' => true,
                'sort_order' => 0,
            ]);
        }
        
        // Tạo gallery ảnh
        $sortOrder = 1;
        foreach ($this->galleryImages as $mediaId) {
            // Không tạo lại nếu đã là ảnh chính
            if ($mediaId != $this->primaryImageId) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'media_id' => $mediaId,
                    'is_primary' => false,
                    'sort_order' => $sortOrder++,
                ]);
            }
        }
    }
}
