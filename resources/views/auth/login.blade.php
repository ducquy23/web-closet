@extends('layouts.app')

@section('title', 'Đăng nhập - Fashion Store')

@section('content')
<div class="flex min-h-screen w-full overflow-hidden">
    <!-- Left Side: Hero Image (Hidden on mobile, visible on lg screens) -->
    <div class="hidden lg:block lg:w-1/2 relative bg-gray-100 dark:bg-gray-800">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center" data-alt="Stylish woman walking in a shopping district holding bags" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpx1KgUBM88NyOrnOj6FbE9V8ZhIHAAUiL4ZTdcKVGjO_fS1ifPStr7D66l768WpG-A8_a1X3nV6flYIQOImNAdDJgzjgBWfutfJmPLtes3FiwiUUexBriMfwnCfaZO_OKh3y-FEBrQDjbi6ijQfUXzgeAgae8DGHw7w0gwTpDm5q4SMy1jyoTA88Pe-wgQCfBvZgAiSPl6A1dCONnAF3bO0v6xx8QHJqJG4ofhBKMX_RT-ABqGzfMh9d3k_PaJG0kMaIWQ3wPR1s");'>
        </div>
        <!-- Overlay gradient for text readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent flex flex-col justify-end p-12">
            <blockquote class="text-white max-w-lg">
                <p class="text-2xl font-bold mb-4">"Phong cách là một phương thức để nói lên bạn là ai mà không khiến bạn tốn một lời."</p>
                <footer class="text-white/80 font-medium">— Rachel Zoe</footer>
            </blockquote>
        </div>
    </div>
    
    <!-- Right Side: Login Form -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 sm:p-12 relative bg-background-light dark:bg-background-dark overflow-y-auto">
        <div class="w-full max-w-[480px] flex flex-col gap-8">
            <!-- Logo & Header -->
            <div class="flex flex-col gap-6">
                <div class="flex items-center gap-3 text-[#0d121b] dark:text-white">
                    <div class="size-8 text-primary">
                        <svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold leading-tight tracking-tight">FashionStore</h2>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl sm:text-4xl font-black leading-tight tracking-[-0.033em] text-[#0d121b] dark:text-white">Chào mừng trở lại</h1>
                    <p class="text-[#4c669a] dark:text-slate-400 text-base font-normal">Vui lòng nhập thông tin của bạn để tiếp tục mua sắm</p>
                </div>
            </div>
            
            <!-- Form Inputs -->
            <form class="flex flex-col gap-5" method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Field -->
                <label class="flex flex-col gap-2">
                    <span class="text-[#0d121b] dark:text-slate-200 text-sm font-medium">Email hoặc Tên đăng nhập</span>
                    <input class="form-input flex w-full rounded-lg border border-[#cfd7e7] dark:border-slate-600 bg-white dark:bg-slate-800 text-[#0d121b] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#9ca3af]" 
                           placeholder="example@email.com" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                
                <!-- Password Field -->
                <label class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <span class="text-[#0d121b] dark:text-slate-200 text-sm font-medium">Mật khẩu</span>
                    </div>
                    <div class="relative flex w-full items-center">
                        <input class="form-input flex w-full rounded-lg border border-[#cfd7e7] dark:border-slate-600 bg-white dark:bg-slate-800 text-[#0d121b] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 pl-4 pr-12 text-base placeholder:text-[#9ca3af]" 
                               placeholder="******" type="password" name="password" id="password" required/>
                        <button type="button" onclick="togglePassword()" class="absolute right-0 top-0 h-full px-3 text-[#4c669a] hover:text-primary transition-colors flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px]" id="toggleIcon">visibility</span>
                        </button>
                    </div>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                
                <!-- Forgot Password Link -->
                <div class="flex justify-end">
                    <a class="text-sm font-medium text-primary hover:text-blue-700 dark:hover:text-blue-400 transition-colors" href="{{ route('password.request') }}">Quên mật khẩu?</a>
                </div>
                
                <!-- Login Button -->
                <button class="mt-2 flex w-full items-center justify-center rounded-lg bg-primary py-3.5 px-4 text-base font-bold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-[#101622] transition-all" type="submit">
                    Đăng nhập
                </button>
            </form>
            
            <!-- Divider -->
            <div class="relative flex items-center py-2">
                <div class="flex-grow border-t border-[#e7ebf3] dark:border-slate-700"></div>
                <span class="flex-shrink-0 px-4 text-sm text-[#4c669a] dark:text-slate-400">Hoặc đăng nhập bằng</span>
                <div class="flex-grow border-t border-[#e7ebf3] dark:border-slate-700"></div>
            </div>
            
            <!-- Social Login -->
            <div class="grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center gap-3 rounded-lg border border-[#cfd7e7] dark:border-slate-600 bg-white dark:bg-slate-800 py-2.5 px-4 text-sm font-medium text-[#0d121b] dark:text-white hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                    <svg class="h-5 w-5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                    </svg>
                    Google
                </button>
                <button class="flex items-center justify-center gap-3 rounded-lg border border-[#cfd7e7] dark:border-slate-600 bg-white dark:bg-slate-800 py-2.5 px-4 text-sm font-medium text-[#0d121b] dark:text-white hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                    <svg class="h-5 w-5 text-[#1877F2]" fill="currentColor" viewbox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                    </svg>
                    Facebook
                </button>
            </div>
            
            <!-- Footer / Sign Up -->
            <p class="text-center text-sm text-[#4c669a] dark:text-slate-400">
                Chưa có tài khoản? 
                <a class="font-semibold text-primary hover:underline hover:text-blue-700 dark:hover:text-blue-400" href="{{ route('register') }}">Đăng ký ngay</a>
            </p>
        </div>
        
        <!-- Bottom Links (Help/Privacy) -->
        <div class="absolute bottom-6 w-full flex justify-center gap-6 text-xs text-[#9ca3af]">
            <a class="hover:text-primary transition-colors" href="#">Trợ giúp</a>
            <a class="hover:text-primary transition-colors" href="#">Điều khoản & Quyền riêng tư</a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        
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

