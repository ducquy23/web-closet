@forelse($products as $product)
<!-- Product Card -->
<div class="group flex flex-col gap-3">
    <div class="relative aspect-[3/4] overflow-hidden rounded-lg bg-slate-100 dark:bg-slate-800">
        <img alt="{{ $product->name ?? 'Product image' }}" class="h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-105" src="{{ $product->image ?? 'https://via.placeholder.com/300x400' }}"/>
        @if(isset($product->discount) && $product->discount > 0)
        <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">-{{ $product->discount }}%</div>
        @endif
        <button class="absolute bottom-3 right-3 h-10 w-10 bg-white dark:bg-slate-800 rounded-full shadow-lg flex items-center justify-center opacity-0 translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 text-slate-900 dark:text-white hover:bg-primary hover:text-white dark:hover:bg-primary">
            <span class="material-symbols-outlined text-[20px]">add_shopping_cart</span>
        </button>
    </div>
    <div>
        <h3 class="text-sm font-medium text-slate-900 dark:text-white">
            <a href="{{ route('products.show', $product->id ?? 1) }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $product->name ?? 'Tên sản phẩm' }}
            </a>
        </h3>
        <div class="flex items-center gap-2 mt-1">
            <p class="text-sm font-bold text-slate-900 dark:text-white">{{ number_format($product->price ?? 0) }}đ</p>
            @if(isset($product->original_price) && $product->original_price > $product->price)
            <p class="text-xs text-slate-500 line-through">{{ number_format($product->original_price) }}đ</p>
            @endif
        </div>
    </div>
</div>
@empty
<!-- Default Product Cards -->
<div class="group flex flex-col gap-3">
    <div class="relative aspect-[3/4] overflow-hidden rounded-lg bg-slate-100 dark:bg-slate-800">
        <img alt="White cotton t-shirt" class="h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ1XEypopUbyvcYLU34kmBl4V9IsDrm4PMTrssSTVUfVUsVogUS9FLAiU5Fs-UuXd8PpfejzqwZx5xDeW3pb17aip_nX2BHM8YrEyWCzjV4XNItReRsTpA8YBP88zIXPxo5O0O3rHPL_V3im1gupM1WpIcAcAFlpaxeZwgjoPV1512wlCbcXfJEUUeHWPWIWJLlChiCNFcCO_8nY9FxnllMfwpAt2lZWal-FRp2DC4esmKpgXX0mJ3aF-vIEfNrTJwMEO6TRHM94I"/>
        <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">-20%</div>
        <button class="absolute bottom-3 right-3 h-10 w-10 bg-white dark:bg-slate-800 rounded-full shadow-lg flex items-center justify-center opacity-0 translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 text-slate-900 dark:text-white hover:bg-primary hover:text-white dark:hover:bg-primary">
            <span class="material-symbols-outlined text-[20px]">add_shopping_cart</span>
        </button>
    </div>
    <div>
        <h3 class="text-sm font-medium text-slate-900 dark:text-white">
            <a href="#"><span aria-hidden="true" class="absolute inset-0"></span>Áo Thun Basic Cotton</a>
        </h3>
        <div class="flex items-center gap-2 mt-1">
            <p class="text-sm font-bold text-slate-900 dark:text-white">250.000đ</p>
            <p class="text-xs text-slate-500 line-through">320.000đ</p>
        </div>
    </div>
</div>
@endforelse

