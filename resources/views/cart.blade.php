@extends('layouts.app')

@section('title', 'Giỏ hàng - Fashion Store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-8">Giỏ hàng của bạn</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Cart Items -->
        <div class="lg:col-span-2 space-y-4">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                <div class="flex gap-4">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ1XEypopUbyvcYLU34kmBl4V9IsDrm4PMTrssSTVUfVUsVogUS9FLAiU5Fs-UuXd8PpfejzqwZx5xDeW3pb17aip_nX2BHM8YrEyWCzjV4XNItReRsTpA8YBP88zIXPxo5O0O3rHPL_V3im1gupM1WpIcAcAFlpaxeZwgjoPV1512wlCbcXfJEUUeHWPWIWJLlChiCNFcCO_8nY9FxnllMfwpAt2lZWal-FRp2DC4esmKpgXX0mJ3aF-vIEfNrTJwMEO6TRHM94I" 
                         alt="Product" class="w-24 h-24 object-cover rounded-lg"/>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-900 dark:text-white mb-2">Áo Thun Basic Cotton</h3>
                        <p class="text-sm text-gray-500 mb-2">Size: M | Màu: Đen</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <button class="px-2 py-1 border rounded">-</button>
                                <span class="px-4">1</span>
                                <button class="px-2 py-1 border rounded">+</button>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-primary">250.000đ</p>
                                <button class="text-red-500 text-sm mt-1">Xóa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700 sticky top-20">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Tóm tắt đơn hàng</h2>
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Tạm tính</span>
                        <span class="text-slate-900 dark:text-white">250.000đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Phí vận chuyển</span>
                        <span class="text-slate-900 dark:text-white">Miễn phí</span>
                    </div>
                    <hr class="border-gray-200 dark:border-gray-700"/>
                    <div class="flex justify-between text-lg font-bold">
                        <span class="text-slate-900 dark:text-white">Tổng cộng</span>
                        <span class="text-primary">250.000đ</span>
                    </div>
                </div>
                <a href="{{ route('checkout') }}" class="block w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg text-center transition-colors">
                    Thanh toán
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

