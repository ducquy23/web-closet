<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\ProductImage;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;
    
    protected ?int $primaryImageId = null;
    protected array $galleryImages = [];

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Load ảnh chính và gallery vào form
        $product = $this->record;
        $primaryImage = $product->primaryImage;
        $galleryImages = $product->images()
            ->where('is_primary', false)
            ->orderBy('sort_order')
            ->pluck('media_id')
            ->toArray();
        
        $data['primary_image_id'] = $primaryImage?->media_id;
        $data['gallery_images'] = $galleryImages;
        
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Lưu ảnh chính và gallery vào property
        $this->primaryImageId = $data['primary_image_id'] ?? null;
        $this->galleryImages = $data['gallery_images'] ?? [];
        
        // Xóa các field không thuộc bảng products
        unset($data['primary_image_id'], $data['gallery_images']);
        
        return $data;
    }

    protected function afterSave(): void
    {
        $product = $this->record;
        
        // Xóa tất cả ảnh cũ
        ProductImage::where('product_id', $product->id)->delete();
        
        // Tạo lại ảnh chính
        if ($this->primaryImageId) {
            ProductImage::create([
                'product_id' => $product->id,
                'media_id' => $this->primaryImageId,
                'is_primary' => true,
                'sort_order' => 0,
            ]);
        }
        
        // Tạo lại gallery ảnh
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
