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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('size')->nullable(); // Kích thước: S, M, L, XL, XXL
            $table->string('color')->nullable(); // Màu sắc: đen, trắng, xanh, v.v.
            $table->string('color_code')->nullable(); // Mã màu hex: #000000
            $table->decimal('price', 10, 2)->nullable(); // Giá riêng cho variant (nếu khác giá chính)
            $table->integer('stock_quantity')->default(0); // Số lượng tồn kho cho variant
            $table->string('sku')->unique()->nullable(); // SKU riêng cho variant
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
