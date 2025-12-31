@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm - Fashion Store')

@section('content')
<!-- Breadcrumbs -->
<nav class="flex flex-wrap items-center gap-2 text-sm mb-8 px-4 lg:px-8">
    <a class="text-[#4c669a] hover:text-primary transition-colors" href="{{ route('home') }}">Trang chủ</a>
    <span class="material-symbols-outlined text-[#9ca3af] text-sm">chevron_right</span>
    <a class="text-[#4c669a] hover:text-primary transition-colors" href="{{ route('products.index') }}">Sản phẩm</a>
    <span class="material-symbols-outlined text-[#9ca3af] text-sm">chevron_right</span>
    <span class="text-[#0d121b] dark:text-white font-medium">Chi tiết sản phẩm</span>
</nav>

<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
        <!-- Product Images -->
        <div class="space-y-4">
            <div class="aspect-square rounded-xl overflow-hidden bg-gray-100">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ1XEypopUbyvcYLU34kmBl4V9IsDrm4PMTrssSTVUfVUsVogUS9FLAiU5Fs-UuXd8PpfejzqwZx5xDeW3pb17aip_nX2BHM8YrEyWCzjV4XNItReRsTpA8YBP88zIXPxo5O0O3rHPL_V3im1gupM1WpIcAcAFlpaxeZwgjoPV1512wlCbcXfJEUUeHWPWIWJLlChiCNFcCO_8nY9FxnllMfwpAt2lZWal-FRp2DC4esmKpgXX0mJ3aF-vIEfNrTJwMEO6TRHM94I" alt="Product" class="w-full h-full object-cover"/>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="aspect-square rounded-lg overflow-hidden bg-gray-100 cursor-pointer border-2 border-primary">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ1XEypopUbyvcYLU34kmBl4V9IsDrm4PMTrssSTVUfVUsVogUS9FLAiU5Fs-UuXd8PpfejzqwZx5xDeW3pb17aip_nX2BHM8YrEyWCzjV4XNItReRsTpA8YBP88zIXPxo5O0O3rHPL_V3im1gupM1WpIcAcAFlpaxeZwgjoPV1512wlCbcXfJEUUeHWPWIWJLlChiCNFcCO_8nY9FxnllMfwpAt2lZWal-FRp2DC4esmKpgXX0mJ3aF-vIEfNrTJwMEO6TRHM94I" alt="Thumbnail" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>
        
        <!-- Product Info -->
        <div class="space-y-6">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Áo Thun Basic Cotton</h1>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-400 material-symbols-outlined">star</span>
                        <span class="text-yellow-400 material-symbols-outlined">star</span>
                        <span class="text-yellow-400 material-symbols-outlined">star</span>
                        <span class="text-yellow-400 material-symbols-outlined">star</span>
                        <span class="text-yellow-400 material-symbols-outlined">star_half</span>
                        <span class="text-sm text-gray-500 ml-2">(45 đánh giá)</span>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-3xl font-bold text-primary">250.000đ</span>
                    <span class="text-xl text-gray-400 line-through">320.000đ</span>
                    <span class="bg-red-500 text-white text-sm font-bold px-2 py-1 rounded">-20%</span>
                </div>
            </div>
            
            <div class="space-y-4">
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-2">Kích thước</h3>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-primary hover:text-primary">S</button>
                        <button class="px-4 py-2 border border-primary bg-primary/10 text-primary rounded-lg font-bold">M</button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-primary hover:text-primary">L</button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-primary hover:text-primary">XL</button>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-2">Màu sắc</h3>
                    <div class="flex gap-2">
                        <button class="size-10 rounded-full bg-black border-2 border-primary"></button>
                        <button class="size-10 rounded-full bg-white border-2 border-gray-300"></button>
                        <button class="size-10 rounded-full bg-blue-600"></button>
                    </div>
                </div>
                
                <div class="flex gap-4 pt-4">
                    <div class="flex items-center border border-gray-300 rounded-lg">
                        <button class="px-4 py-2 hover:bg-gray-100">-</button>
                        <span class="px-6 py-2">1</span>
                        <button class="px-4 py-2 hover:bg-gray-100">+</button>
                    </div>
                    <button class="flex-1 bg-primary hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                        Thêm vào giỏ hàng
                    </button>
                </div>
            </div>
            
            <div class="pt-6 border-t border-gray-200">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Mô tả sản phẩm</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Áo thun basic cotton với chất liệu cao cấp, thoáng mát và bền màu. Thiết kế đơn giản, dễ phối đồ, phù hợp cho mọi dịp.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

