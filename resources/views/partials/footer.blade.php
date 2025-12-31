<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 pt-16 pb-8 px-4 md:px-10 lg:px-40">
    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
            <div>
                <div class="flex items-center gap-2 mb-6">
                    <div class="size-6 text-primary">
                        <svg class="w-full h-full" fill="currentColor" viewbox="0 0 48 48">
                            <path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-lg font-bold text-slate-900 dark:text-white">Fashion Store</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">
                    Nơi phong cách gặp gỡ sự thoải mái. Chúng tôi mang đến những bộ sưu tập thời trang chất lượng cao cho mọi lứa tuổi.
                </p>
                <div class="flex gap-4">
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">thumb_up</span>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">photo_camera</span>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-slate-900 dark:text-white mb-4">Mua Sắm</h4>
                <ul class="flex flex-col gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <li><a class="hover:text-primary" href="{{ route('products.category', 'nam') }}">Nam</a></li>
                    <li><a class="hover:text-primary" href="{{ route('products.category', 'nu') }}">Nữ</a></li>
                    <li><a class="hover:text-primary" href="{{ route('products.category', 'tre-em') }}">Trẻ em</a></li>
                    <li><a class="hover:text-primary" href="#">Phụ kiện</a></li>
                    <li><a class="hover:text-primary" href="{{ route('products.sale') }}">Khuyến mãi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-slate-900 dark:text-white mb-4">Hỗ Trợ</h4>
                <ul class="flex flex-col gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <li><a class="hover:text-primary" href="#">Trạng thái đơn hàng</a></li>
                    <li><a class="hover:text-primary" href="#">Chính sách đổi trả</a></li>
                    <li><a class="hover:text-primary" href="#">Hướng dẫn chọn size</a></li>
                    <li><a class="hover:text-primary" href="#">Liên hệ</a></li>
                    <li><a class="hover:text-primary" href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-slate-900 dark:text-white mb-4">Liên Hệ</h4>
                <ul class="flex flex-col gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <li class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-lg mt-0.5">location_on</span>
                        123 Đường Nguyễn Huệ,<br/>Quận 1, TP. Hồ Chí Minh
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">call</span>
                        +84 123 456 789
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        support@fashionstore.vn
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-200 dark:border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
            <p>© 2024 Fashion Store. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="hover:text-primary" href="#">Điều khoản dịch vụ</a>
                <a class="hover:text-primary" href="#">Chính sách bảo mật</a>
            </div>
        </div>
    </div>
</footer>

