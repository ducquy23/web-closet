@extends('layouts.app')

@section('title', 'Tài khoản - Fashion Store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-8">Tài khoản của tôi</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                <div class="text-center mb-6">
                    <div class="w-20 h-20 bg-primary rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-bold">
                        U
                    </div>
                    <h3 class="font-bold text-slate-900 dark:text-white">Nguyễn Văn A</h3>
                    <p class="text-sm text-gray-500">user@example.com</p>
                </div>
                <nav class="space-y-2">
                    <a href="#" class="block px-4 py-2 bg-primary text-white rounded-lg font-medium">Thông tin cá nhân</a>
                    <a href="#" class="block px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">Đơn hàng</a>
                    <a href="#" class="block px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">Địa chỉ</a>
                    <a href="#" class="block px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">Đổi mật khẩu</a>
                </nav>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="lg:col-span-3">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Thông tin cá nhân</h2>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Họ và tên</label>
                            <input type="text" value="Nguyễn Văn A" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email</label>
                            <input type="email" value="user@example.com" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Số điện thoại</label>
                        <input type="tel" value="0123456789" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Ngày sinh</label>
                        <input type="date" class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-3"/>
                    </div>
                    <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                        Lưu thay đổi
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

