@extends('layouts.app')

@section('title', 'Danh sách sản phẩm - Fashion Store')

@section('content')
<!-- Breadcrumbs -->
<div class="w-full bg-white dark:bg-[#1a202c] border-b border-[#e7ebf3] dark:border-gray-800">
    <div class="max-w-[1440px] mx-auto px-4 lg:px-10 py-3">
        <div class="flex flex-wrap items-center gap-2 text-sm">
            <a class="text-[#4c669a] hover:text-primary transition-colors" href="{{ route('home') }}">Trang chủ</a>
            <span class="text-[#9ca3af] material-symbols-outlined text-[16px]">chevron_right</span>
            <a class="text-[#4c669a] hover:text-primary transition-colors" href="#">{{ ucfirst($category ?? 'Sản phẩm') }}</a>
            @if(isset($category))
            <span class="text-[#9ca3af] material-symbols-outlined text-[16px]">chevron_right</span>
            <span class="text-[#0d121b] dark:text-white font-medium">{{ ucfirst($category) }}</span>
            @endif
        </div>
    </div>
</div>

<!-- Main Content Layout -->
<div class="flex-grow w-full max-w-[1440px] mx-auto px-4 lg:px-10 py-6">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar Filters -->
        @include('products.partials.filters')
        
        <!-- Product Grid Area -->
        <main class="flex-1 min-w-0">
            <!-- Hero Section -->
            <div class="mb-8 rounded-xl overflow-hidden relative min-h-[200px] flex items-end">
                <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCwkj9bNhN5JqNaRuM4R9LKvTP7wIZiEBrPQz7PQZufUtyDgX4IvmZiKkveTYUsvOAvXkngk85aOsAuME647DZmEFvGerdj9n2YvD6_A3EjLM_Ahms9yDKZc2g2LFlGXquAdl-vdM9HaiEa3TdMshAKHmnOBy9VHGM608qZOx_t87lPCSuCCmX0yEeErV7esQ32CZxiI8Cbb5JDUOUbJyekXTpHof5hmY9eMF_t4KsKy9TAHGPK9_FL8yS0g7N2SMXNqVJMsSCUlF8");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="relative p-8 z-10">
                    <h1 class="text-3xl font-bold text-white mb-2">Thời trang {{ ucfirst($category ?? 'Tất cả') }}</h1>
                    <p class="text-gray-200 max-w-xl">Khám phá bộ sưu tập mới nhất với phong cách hiện đại, năng động và lịch lãm.</p>
                </div>
            </div>
            
            <!-- Toolbar -->
            <div class="sticky top-[73px] z-40 bg-background-light dark:bg-background-dark pb-4 pt-2">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                    <p class="text-gray-600 dark:text-gray-400 font-medium">
                        Hiển thị <span class="text-[#0d121b] dark:text-white font-bold">12</span> trên 
                        <span class="text-[#0d121b] dark:text-white font-bold">148</span> sản phẩm
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2">
                            <label class="text-sm text-gray-600 dark:text-gray-400 whitespace-nowrap">Sắp xếp:</label>
                            <select class="form-select pl-3 pr-8 py-2 text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 rounded-lg focus:ring-primary focus:border-primary cursor-pointer text-[#0d121b] dark:text-white">
                                <option>Phổ biến nhất</option>
                                <option>Mới nhất</option>
                                <option>Giá: Thấp đến Cao</option>
                                <option>Giá: Cao đến Thấp</option>
                            </select>
                        </div>
                        <div class="flex bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-1">
                            <button class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-primary">
                                <span class="material-symbols-outlined text-[20px]">grid_view</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-500 dark:text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">view_list</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                @include('partials.product-card', ['products' => $products ?? []])
            </div>
            
            <!-- Pagination -->
            <div class="mt-10 flex justify-center">
                <nav aria-label="Pagination" class="flex items-center gap-2">
                    <a class="p-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 hover:bg-gray-50 dark:hover:bg-gray-700" href="#">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-lg border border-primary bg-primary text-white font-medium" href="#">1</a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 font-medium transition-colors" href="#">2</a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 font-medium transition-colors" href="#">3</a>
                    <span class="w-10 h-10 flex items-center justify-center text-gray-500">...</span>
                    <a class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 font-medium transition-colors" href="#">12</a>
                    <a class="p-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 hover:bg-gray-50 dark:hover:bg-gray-700" href="#">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </a>
                </nav>
            </div>
        </main>
    </div>
</div>
@endsection

