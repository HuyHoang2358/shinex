<!-- Header -->
<div class="shadow fixed z-50 w-full bg-white">
    <div class="container mx-auto md:px-36">
        <div class="w-full">
            <div class="flex justify-between px-3">
                <div class="md:flex gap-8 items-center hidden md:block">
                    <a class="hover:text-blue-500" href="{{url('/')}}">TRANG CHỦ</a>
                    <a class="hover:text-blue-500" href="{{route('about')}}">GIỚI THIỆU</a>
                    <a class="hover:text-blue-500" href="{{route('product.index')}}">SẢN PHẨM</a>
                </div>

                <div class="h-20">
                    <a href="{{url('/')}}">
                        <img class="h-full py-4" src="{{asset('/images/logo/logo.png')}}" alt="shinex-logo">
                    </a>
                </div>

                <div class="md:flex justify-end items-center hidden md:block">
                    <a class="hover:text-blue-500" href="{{route('news.index')}}">TIN TỨC</a>
                    <a class="hover:text-blue-500 px-8" href="{{route('contact')}}">LIÊN HỆ</a>
                    <a href="#"><i class="fa-solid fa-magnifying-glass text-2xl "></i></a>
                    <a href="#"><i class="fa-solid fa-basket-shopping pl-3 text-2xl text-blue-500"></i></a>
                </div>

                <div class="md:hidden flex items-center gap-3">
                    <a href="#"><i class="fa-solid fa-basket-shopping pl-3 text-2xl text-blue-500"></i></a>

                    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-blue-600 py-5 text-xl inline-flex dark:hover:bg-blue-700" type="button">
                        <i class="fa-solid fa-bars-staggered group-focus/item:hidden"></i>
                        <i class="fa-solid fa-xmark hidden group-focus/item:block"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDivider" class="z-50 hidden bg-white divide-y divide-gray-100 shadow w-full h-[900px] dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-2 px-7 border-t border-gray-200">
                            <div class="w-full relative">
                                <input type="text" class="w-full focus:outline-none rounded-full bg-[#f7f7f7]" placeholder="Tìm kiếm...">
                                <i class="fa-solid fa-magnifying-glass absolute right-3 top-[15%] text-xl"></i>
                            </div>
                        </div>
                        <ul class="text-base text-gray-700 font-medium dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                            <li>
                                <a href="{{url('/')}}" class="block py-4 px-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-200">Trang chủ</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}" class="block py-4 px-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-200">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="{{route('product.index')}}" class="block py-4 px-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-200">Sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('news.index')}}" class="block py-4 px-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-200">Tin tức</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" class="block py-4 px-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-200">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


