@extends('layouts.app')

@section('title', 'Trang chủ - Fashion Store')

@section('content')
<!-- Hero Section -->
<section class="px-4 py-6 md:px-10 lg:px-40 pb-10">
    <div class="max-w-[1200px] mx-auto rounded-2xl overflow-hidden relative min-h-[500px] flex items-center bg-cover bg-center group" data-alt="Stylish model posing in modern streetwear against urban background" style='background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0hZe5TV68RNw5e_3rQyeFv2bvcnAFS-gCrgrOKzl-tmiYDWdegGYIzpE3hpaXTRp3lhKC_jYcadQpM0N4rD66ZG9gw0TFH7mW01wnqPNFR_w5TOhCD0UjLupW0HyuWWB0jy_UN4SE_FHYdgR-UgsByYVp0zx3i-k3neJb9RtEWmwE-vxHNxHsDFBVPRmT7e2nS1F07Zc1x_vh6YE6Y4JBeYEj05Nhq1cLBhvksFND5Qihn75lE3q3ntj-kQOfOk5lZ9WBouJyzGc");'>
        <div class="relative z-10 px-8 md:px-16 max-w-2xl flex flex-col items-start gap-6 text-white">
            <span class="bg-primary/90 px-3 py-1 rounded text-xs font-bold uppercase tracking-wider">Bộ sưu tập mới</span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">Phong Cách <br/> Mùa Hè 2024</h1>
            <p class="text-lg md:text-xl font-medium opacity-90">Khám phá những mẫu thiết kế mới nhất, mang đậm hơi thở hiện đại và sự thoải mái tối đa.</p>
            <a href="{{ route('products.index') }}" class="mt-4 bg-white text-slate-900 hover:bg-primary hover:text-white transition-all duration-300 font-bold py-3 px-8 rounded-lg text-sm md:text-base flex items-center gap-2">
                Mua Ngay
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="px-4 md:px-10 lg:px-40 py-8">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Danh mục nổi bật</h2>
            <a class="text-primary font-medium text-sm hover:underline flex items-center gap-1" href="{{ route('products.index') }}">
                Xem tất cả <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <a class="group relative overflow-hidden rounded-xl aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/3]" href="{{ route('products.category', 'nam') }}">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Men fashion collection dark moody style" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCDRuB_yHOXpegIdrkXRpR5GJo9-TlTmHQKzOJ_4Jj5dexKLgHodPgCn3mt5Drl-vTsE0IWXtWepi8chIiDG1Cf-IQ8gVXD49kon6VtmAboSjpvkK3TZobj2_8HIcc9NLv0oAgUm9ZV0j1vEs3mu3ovvi7IQi_6hHVJ6pUu7GBxDpFC1Knru8-ImjofBQ7k0RkmW5dBFjnDMwMrhESkciXfFIUM-BjJgXaGwXZthOF6StO0QFGkMui4lnvsTtKgLh18wGLV-4QG5nk");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                    <h3 class="text-white text-2xl font-bold mb-1">Nam Giới</h3>
                    <p class="text-white/80 text-sm">Lịch lãm & Hiện đại</p>
                </div>
            </a>
            <!-- Card 2 -->
            <a class="group relative overflow-hidden rounded-xl aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/3]" href="{{ route('products.category', 'nu') }}">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Women fashion summer vibes bright colors" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBqS3kjWFn6GpVWWdmmOkhyHCMdQKsLK64mcqfVLLjrq3lipAseGofwhPp252U0oEolfyqXgaoPaULAG8LAnpow1h1ij1rb1I6YhEE1U_Oa8eR0ogFCPQINsMOaCq57-Kbf4iSTDDGYMiiQeQ04-csObYdY-FVO56-3LM6p9dpktS_BITkDd4-OxHJ6gCbNzdy6IOW6WhOZh3fprQd791gGqUYCW0uJO15HdU_mlEwBHdJAW3lM3hdc-RmnwWIw9zIv1YU07vfywUI");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                    <h3 class="text-white text-2xl font-bold mb-1">Nữ Giới</h3>
                    <p class="text-white/80 text-sm">Quyến rũ & Cá tính</p>
                </div>
            </a>
            <!-- Card 3 -->
            <a class="group relative overflow-hidden rounded-xl aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/3]" href="{{ route('products.category', 'tre-em') }}">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Kids fashion playful and colorful" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDtlQoWgKxoAUb1KvWvQHN_AOt6u-84Z-yv7igEASUyUA8Qk9ZsXpYyPNiRwUFJ6okBJSCfWaN3Y5OnteDeuiEo9IknnS7d4vD9D4P-yuk4_ZxJgvy6293c2L01jlRZjhrZEqA0tZ_FgdqSt_BHw1sWOHnx3qo-__gpI5FC7JIY_5SecV5TZGeHTEEfTNnShwG4yx8AdCwYyWNFkpqkGSJE3T02-k0YsZk6qdzijQMy00XEXWPeXCnmAbvDhdGssn0QV4EhVyi4BLc");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                    <h3 class="text-white text-2xl font-bold mb-1">Trẻ Em</h3>
                    <p class="text-white/80 text-sm">Thoải mái & Năng động</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="px-4 md:px-10 lg:px-40 py-12 bg-white dark:bg-slate-900/50">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex items-end justify-between mb-8">
            <div>
                <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white mb-2">Sản phẩm mới về</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Cập nhật xu hướng thời trang mới nhất tuần này</p>
            </div>
            <div class="flex gap-2">
                <button class="p-2 rounded-full border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-lg">arrow_back</span>
                </button>
                <button class="p-2 rounded-full border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-10">
            @include('partials.product-card', ['products' => $featuredProducts ?? []])
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="px-4 md:px-10 lg:px-40 py-16">
    <div class="max-w-[1200px] mx-auto bg-slate-100 dark:bg-slate-800 rounded-2xl p-8 md:p-12 text-center relative overflow-hidden">
        <!-- Abstract Background Pattern -->
        <div class="absolute -top-24 -left-24 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="relative z-10 max-w-2xl mx-auto">
            <span class="material-symbols-outlined text-4xl text-primary mb-4">mail</span>
            <h2 class="text-3xl font-bold mb-4 text-slate-900 dark:text-white">Đăng ký nhận tin</h2>
            <p class="text-slate-600 dark:text-slate-300 mb-8">Nhận thông tin cập nhật mới nhất về sản phẩm mới và các chương trình khuyến mãi đặc biệt.</p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}">
                @csrf
                <input class="flex-1 rounded-lg border-transparent focus:border-primary focus:ring-primary bg-white dark:bg-slate-900 dark:text-white px-4 py-3 text-sm outline-none shadow-sm" placeholder="Nhập địa chỉ email của bạn" type="email" name="email" required/>
                <button class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors whitespace-nowrap" type="submit">
                    Đăng ký
                </button>
            </form>
            <p class="text-xs text-slate-400 mt-4">Chúng tôi tôn trọng quyền riêng tư của bạn. Hủy đăng ký bất cứ lúc nào.</p>
        </div>
    </div>
</section>
@endsection

