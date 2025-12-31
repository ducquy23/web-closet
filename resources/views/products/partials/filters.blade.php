<aside class="w-full lg:w-64 flex-shrink-0 space-y-8">
    <div class="hidden lg:block space-y-6">
        <!-- Categories -->
        <div>
            <h3 class="text-[#0d121b] dark:text-white font-bold mb-3 flex items-center justify-between">
                Danh mục
                <span class="material-symbols-outlined text-gray-400">expand_less</span>
            </h3>
            <div class="flex flex-col gap-2 pl-1">
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input checked class="form-checkbox rounded text-primary border-gray-300 focus:ring-primary h-4 w-4" type="checkbox"/>
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-primary">Tất cả</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input class="form-checkbox rounded text-primary border-gray-300 focus:ring-primary h-4 w-4" type="checkbox"/>
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-primary">Áo thun</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input class="form-checkbox rounded text-primary border-gray-300 focus:ring-primary h-4 w-4" type="checkbox"/>
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-primary">Sơ mi</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input class="form-checkbox rounded text-primary border-gray-300 focus:ring-primary h-4 w-4" type="checkbox"/>
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-primary">Quần Jeans</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input class="form-checkbox rounded text-primary border-gray-300 focus:ring-primary h-4 w-4" type="checkbox"/>
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-primary">Áo khoác</span>
                </label>
            </div>
        </div>
        <hr class="border-[#e7ebf3] dark:border-gray-800"/>
        
        <!-- Price Range -->
        <div>
            <h3 class="text-[#0d121b] dark:text-white font-bold mb-3">Khoảng giá</h3>
            <div class="flex items-center gap-2 mb-4">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-xs">₫</span>
                    </div>
                    <input class="block w-full pl-6 pr-2 py-1.5 sm:text-xs border-gray-300 rounded-md focus:ring-primary focus:border-primary bg-white dark:bg-gray-800 dark:border-gray-700 dark:text-white" placeholder="Từ" type="text"/>
                </div>
                <span class="text-gray-400">-</span>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-xs">₫</span>
                    </div>
                    <input class="block w-full pl-6 pr-2 py-1.5 sm:text-xs border-gray-300 rounded-md focus:ring-primary focus:border-primary bg-white dark:bg-gray-800 dark:border-gray-700 dark:text-white" placeholder="Đến" type="text"/>
                </div>
            </div>
        </div>
        <hr class="border-[#e7ebf3] dark:border-gray-800"/>
        
        <!-- Size -->
        <div>
            <h3 class="text-[#0d121b] dark:text-white font-bold mb-3">Kích thước</h3>
            <div class="grid grid-cols-4 gap-2">
                <button class="h-9 rounded-md border border-gray-200 dark:border-gray-700 hover:border-primary hover:text-primary text-sm font-medium transition-colors bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300">S</button>
                <button class="h-9 rounded-md border border-primary bg-primary/10 text-primary text-sm font-bold transition-colors">M</button>
                <button class="h-9 rounded-md border border-gray-200 dark:border-gray-700 hover:border-primary hover:text-primary text-sm font-medium transition-colors bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300">L</button>
                <button class="h-9 rounded-md border border-gray-200 dark:border-gray-700 hover:border-primary hover:text-primary text-sm font-medium transition-colors bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300">XL</button>
            </div>
        </div>
        <hr class="border-[#e7ebf3] dark:border-gray-800"/>
        
        <!-- Colors -->
        <div>
            <h3 class="text-[#0d121b] dark:text-white font-bold mb-3">Màu sắc</h3>
            <div class="flex flex-wrap gap-3">
                <button class="size-8 rounded-full bg-black border border-gray-200 ring-2 ring-offset-2 ring-primary"></button>
                <button class="size-8 rounded-full bg-white border border-gray-300 hover:ring-2 hover:ring-offset-2 hover:ring-gray-300"></button>
                <button class="size-8 rounded-full bg-blue-600 hover:ring-2 hover:ring-offset-2 hover:ring-blue-600"></button>
                <button class="size-8 rounded-full bg-red-500 hover:ring-2 hover:ring-offset-2 hover:ring-red-500"></button>
            </div>
        </div>
    </div>
</aside>

