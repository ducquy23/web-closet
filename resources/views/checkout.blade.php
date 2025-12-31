@extends('layouts.app')

@section('title', 'Thanh toán - Fashion Store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-8">Thanh toán</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Checkout Form -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Shipping Info -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Thông tin giao hàng</h2>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Họ và tên" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                        <input type="tel" placeholder="Số điện thoại" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                    </div>
                    <input type="text" placeholder="Địa chỉ" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="Thành phố" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                        <input type="text" placeholder="Quận/Huyện" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                    </div>
                </form>
            </div>
            
            <!-- Payment Method -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Phương thức thanh toán</h2>
                <div class="space-y-3">
                    <label class="flex items-center gap-3 p-4 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer hover:border-primary">
                        <input type="radio" name="payment" value="cod" class="text-primary" checked/>
                        <span class="flex-1">Thanh toán khi nhận hàng (COD)</span>
                    </label>
                    <label class="flex items-center gap-3 p-4 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer hover:border-primary">
                        <input type="radio" name="payment" value="bank" class="text-primary"/>
                        <span class="flex-1">Chuyển khoản ngân hàng</span>
                    </label>
                </div>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700 sticky top-20">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Đơn hàng</h2>
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
                <button class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                    Đặt hàng
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

