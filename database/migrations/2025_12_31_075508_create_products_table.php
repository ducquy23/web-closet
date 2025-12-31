<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name'); // Tên sản phẩm
            $table->string('slug')->unique(); // URL-friendly
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->text('short_description')->nullable(); // Mô tả ngắn
            $table->decimal('price', 10, 2); // Giá bán
            $table->decimal('original_price', 10, 2)->nullable(); // Giá gốc (nếu có giảm giá)
            $table->integer('discount_percent')->default(0); // Phần trăm giảm giá
            $table->string('sku')->unique()->nullable(); // Mã SKU sản phẩm
            $table->integer('stock_quantity')->default(0); // Số lượng tồn kho
            $table->boolean('is_featured')->default(false); // Sản phẩm nổi bật
            $table->boolean('is_active')->default(true); // Trạng thái hoạt động
            $table->integer('sort_order')->default(0); // Thứ tự hiển thị
            $table->json('meta')->nullable(); // Metadata bổ sung (màu sắc, kích thước, v.v.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
