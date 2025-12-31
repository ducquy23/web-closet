@extends('layouts.app')

@section('title', 'Quên mật khẩu - Fashion Store')

@section('content')
<div class="flex min-h-screen items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-black text-slate-900 dark:text-white mb-2">Quên mật khẩu?</h1>
            <p class="text-slate-600 dark:text-slate-400">Nhập email của bạn để nhận liên kết đặt lại mật khẩu</p>
        </div>
        
        <form method="POST" action="{{ route('password.email') }}" class="bg-white dark:bg-slate-800 rounded-xl p-8 shadow-lg">
            @csrf
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required 
                       class="w-full rounded-lg border border-[#cfd7e7] dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4" 
                       placeholder="example@email.com"/>
                @error('email')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                Gửi liên kết đặt lại mật khẩu
            </button>
            
            <div class="mt-6 text-center">
                <a href="{{ route('login') }}" class="text-primary hover:underline text-sm">Quay lại đăng nhập</a>
            </div>
        </form>
    </div>
</div>
@endsection

