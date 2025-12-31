@extends('layouts.app')

@section('title', 'Đăng ký - Fashion Store')

@section('content')
<div class="flex min-h-screen w-full">
    <!-- Left Section: Registration Form -->
    <div class="flex flex-col justify-center w-full lg:w-1/2 px-4 py-24 sm:px-12 xl:px-32 z-10 bg-background-light dark:bg-background-dark">
        <div class="w-full max-w-[480px] mx-auto flex flex-col gap-8">
            <!-- Header -->
            <div class="flex flex-col gap-3 text-center sm:text-left">
                <h1 class="text-3xl sm:text-4xl font-black leading-tight tracking-[-0.033em] text-[#0d121b] dark:text-white">
                    Tham gia cùng chúng tôi
                </h1>
                <p class="text-[#4c669a] dark:text-gray-400 text-base font-normal leading-normal">
                    Tạo tài khoản để bắt đầu mua sắm các bộ sưu tập mới nhất và nhận nhiều ưu đãi độc quyền.
                </p>
            </div>
            
            <!-- Form -->
            <form class="flex flex-col gap-5" method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Full Name -->
                <label class="flex flex-col gap-2">
                    <span class="text-sm font-bold text-[#0d121b] dark:text-white">Họ và tên</span>
                    <div class="relative group">
                        <input class="form-input w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-[#f8f9fc] dark:bg-gray-800 text-[#0d121b] dark:text-white h-12 pl-11 pr-4 focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-[#4c669a] text-base transition-all" 
                               placeholder="Ví dụ: Nguyễn Văn A" type="text" name="name" value="{{ old('name') }}" required autofocus/>
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] group-focus-within:text-primary transition-colors text-[20px]">person</span>
                    </div>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                
                <!-- Email Address -->
                <label class="flex flex-col gap-2">
                    <span class="text-sm font-bold text-[#0d121b] dark:text-white">Địa chỉ Email</span>
                    <div class="relative group">
                        <input class="form-input w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-[#f8f9fc] dark:bg-gray-800 text-[#0d121b] dark:text-white h-12 pl-11 pr-4 focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-[#4c669a] text-base transition-all" 
                               placeholder="example@email.com" type="email" name="email" value="{{ old('email') }}" required/>
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] group-focus-within:text-primary transition-colors text-[20px]">mail</span>
                    </div>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                
                <!-- Password Fields Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-bold text-[#0d121b] dark:text-white">Mật khẩu</span>
                        <div class="relative group">
                            <input class="form-input w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-[#f8f9fc] dark:bg-gray-800 text-[#0d121b] dark:text-white h-12 pl-11 pr-10 focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-[#4c669a] text-base transition-all" 
                                   placeholder="Tối thiểu 8 ký tự" type="password" name="password" id="password" required/>
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] group-focus-within:text-primary transition-colors text-[20px]">lock</span>
                            <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-[#4c669a] hover:text-[#0d121b] dark:hover:text-white cursor-pointer flex items-center">
                                <span class="material-symbols-outlined text-[20px]" id="toggleIcon1">visibility</span>
                            </button>
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-bold text-[#0d121b] dark:text-white">Xác nhận mật khẩu</span>
                        <div class="relative group">
                            <input class="form-input w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-[#f8f9fc] dark:bg-gray-800 text-[#0d121b] dark:text-white h-12 pl-11 pr-4 focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-[#4c669a] text-base transition-all" 
                                   placeholder="Nhập lại mật khẩu" type="password" name="password_confirmation" id="password_confirmation" required/>
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] group-focus-within:text-primary transition-colors text-[20px]">lock_reset</span>
                        </div>
                    </label>
                </div>
                
                <!-- Terms Checkbox -->
                <label class="flex items-start gap-3 cursor-pointer py-1">
                    <input class="mt-1 size-4 rounded border-[#cfd7e7] bg-white text-primary focus:ring-primary dark:bg-gray-800 dark:border-gray-600 cursor-pointer" type="checkbox" name="terms" required/>
                    <span class="text-sm text-[#4c669a] dark:text-gray-400 leading-normal select-none">
                        Tôi đồng ý với <a class="text-primary font-bold hover:underline" href="#">Điều khoản dịch vụ</a> và <a class="text-primary font-bold hover:underline" href="#">Chính sách bảo mật</a>.
                    </span>
                </label>
                
                <!-- Main Action Button -->
                <button class="group flex w-full items-center justify-center rounded-lg h-12 px-5 bg-primary hover:bg-blue-700 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all shadow-sm hover:shadow-md" type="submit">
                    Tạo tài khoản
                </button>
                
                <!-- Social Login Divider -->
                <div class="relative flex py-2 items-center">
                    <div class="flex-grow border-t border-[#e7ebf3] dark:border-gray-700"></div>
                    <span class="flex-shrink-0 mx-4 text-xs font-bold text-[#4c669a] uppercase tracking-wider">Hoặc đăng ký bằng</span>
                    <div class="flex-grow border-t border-[#e7ebf3] dark:border-gray-700"></div>
                </div>
                
                <!-- Social Buttons -->
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" class="flex items-center justify-center h-12 gap-2 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-[#f8f9fc] dark:hover:bg-gray-700 transition-colors text-[#0d121b] dark:text-white font-medium text-sm">
                        <svg class="size-5" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"></path>
                            <path d="M12.24 24.0008C15.4765 24.0008 18.2058 22.9382 20.19 21.1039L16.323 18.1056C15.2511 18.8375 13.8627 19.252 12.24 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.2812H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.24 24.0008Z" fill="#34A853"></path>
                            <path d="M5.50705 14.2812C5.02668 12.8342 5.02668 11.1658 5.50705 9.71876V6.60876H1.5166C-0.185367 10.0225 -0.185367 13.9775 1.5166 17.3912L5.50705 14.2812Z" fill="#FBBC05"></path>
                            <path d="M12.24 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.24 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.60876L5.50705 9.71876C6.45946 6.86004 9.11388 4.74966 12.24 4.74966Z" fill="#EA4335"></path>
                        </svg>
                        Google
                    </button>
                    <button type="button" class="flex items-center justify-center h-12 gap-2 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-[#f8f9fc] dark:hover:bg-gray-700 transition-colors text-[#0d121b] dark:text-white font-medium text-sm">
                        <svg class="size-5 text-[#1877F2]" fill="currentColor" viewbox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                        </svg>
                        Facebook
                    </button>
                </div>
                
                <!-- Footer Link -->
                <p class="text-center text-sm text-[#4c669a] dark:text-gray-400 mt-2">
                    Đã có tài khoản? 
                    <a class="text-primary font-bold hover:underline transition-colors" href="{{ route('login') }}">Đăng nhập</a>
                </p>
            </form>
        </div>
    </div>
    
    <!-- Right Section: Hero Image -->
    <div class="hidden lg:block lg:w-1/2 relative bg-gray-100 dark:bg-gray-900 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center transition-transform hover:scale-105 duration-1000 ease-in-out" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBtBtY70l7OEmxwOQZM0PpZR1zqet_sBoCUXtFKl5r-WwcvdFFy6p2lawehmUHjQ-iSFEjozvecJN4ueorlAwFWokygpVckhgAOEw9AKW-OJIqz04_6rOXWB5rex5IMSL4MN1jc32Vwm8go4dEbquWeQekxv9uMb7L98b49l9yJNmyu4yOyHaFMjmXbzXmqggSj_uhOvTegSmgQzrSK50la8rmnotZdkke8Wv_gyQtXnJ8nnz6kXXlWrQpVZIaKs4VwDI3tvA7AdgQ');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
        </div>
        <div class="absolute bottom-0 left-0 w-full p-16 text-white z-10">
            <div class="max-w-lg">
                <div class="flex items-center gap-2 mb-4">
                    <span class="flex h-0.5 w-8 bg-primary"></span>
                    <span class="text-sm font-bold tracking-widest uppercase">Bộ sưu tập mới</span>
                </div>
                <h2 class="text-4xl font-black mb-4">Thời trang hiện đại</h2>
                <p class="text-lg opacity-90">Khám phá những xu hướng mới nhất</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function togglePassword(fieldId) {
        const passwordInput = document.getElementById(fieldId);
        const toggleIcon = document.getElementById(fieldId === 'password' ? 'toggleIcon1' : 'toggleIcon2');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            toggleIcon.textContent = 'visibility';
        }
    }
</script>
@endpush
@endsection

