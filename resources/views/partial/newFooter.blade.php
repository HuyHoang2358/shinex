<!-- footer -->
<div class="bg-gray-100">
    <div class="container mx-auto xl:px-36 flex justify-between items-center py-12">
        <div class="w-full">
            <div class="grid md:grid-cols-3">
                <div class="col-span-1 md:pr-12 px-5 md:px-0">
                    <div class="h-12 md:h-20 flex justify-center">
                        <a href="{{url('/')}}"><img class="h-full" src="{{asset('/images/logo/logo.png')}}" alt="shinex-logo"></a>
                    </div>
                    <h4 class="py-3 font-medium md:font-normal text-lg md:text-base">THÔNG TIN LIÊN HỆ</h4>
                    <ul class="text-gray-800 text-base md:text-lg pl-5 md:pl-0">
                        <li class="hover:text-blue-500 hover:underline">
                            <a class="flex gap-2" href="#">
                                <i class="fa-solid fa-house-chimney flex items-center"></i>
                                <p>{{config::get('website.address')}}</p>
                            </a>
                        </li>
                        <li class="py-3 hover:text-blue-500 hover:underline">
                            <a class="flex gap-2" href="#">
                                <i class="fa-solid fa-phone flex items-center"></i>
                                <p>Hotline: {{config::get('website.hotline')}} (Hỗ trợ 24/7)</p>
                            </a>
                        </li>
                        <li class="hover:text-blue-500 hover:underline">
                            <a class="flex gap-2" href="#">
                                <i class="fa-solid fa-envelope flex items-center"></i>
                                <p>Email: {{config::get('website.email')}}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-span-1 md:grid grid-cols-2 border-y md:border-0 border-gray-400 my-6 px-5 md:px-0">
                    <div class="col-span-1 group/item py-4 md:py-0">
                        <div class="flex justify-between md:justify-start">
                            <h4 class="font-medium md:font-normal text-lg md:text-base group-hover/item:text-blue-600 md:group-hover/item:text-black">VỀ SẢN PHẨM</h4>
                            <div class="pr-5 md:hidden">
                                <i class="fa-solid fa-plus md:hidden group-hover/item:hidden block duration-700 ease-in-out"></i>
                                <i class="fa-solid fa-minus md:hidden group-hover/item:block hidden"></i>
                            </div>
                        </div>
                        <ul class="text-gray-800 flex flex-col gap-2 pt-2 pl-5 md:pl-0 group-hover/item:block hidden md:block duration-700 ease-in-out">
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Whitening Remove Freckle Cream</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Repair Anti-Aging Cream</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Soothing balance repair cream</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Serum smoothing and restoring essential oils</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Repairing active white serum</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="#">Polypeptide</a></li>
                        </ul>
                    </div>

                    <div class="col-span-1 md:flex md:flex-col md:items-center border-t md:border-0 border-gray-400 pt group/item py-4 md:py-0">
                        <div class="flex justify-between md:justify-start">
                            <h4 class="font-medium md:font-normal text-lg md:text-base group-hover/item:text-blue-600 md:group-hover/item:text-black">LIÊN KẾT NHANH</h4>
                            <div class="pr-5 md:hidden">
                                <i class="fa-solid fa-plus md:hidden group-hover/item:hidden block duration-700 ease-in-out"></i>
                                <i class="fa-solid fa-minus md:hidden group-hover/item:block hidden"></i>
                            </div>
                        </div>
                        <ul class="text-gray-800 flex flex-col gap-2 pt-2 pl-5 md:pl-0 group-hover/item:block hidden md:block duration-700 ease-in-out">
                            <li class="hover:text-blue-500 hover:underline"><a href="{{route('about')}}">Giới thiệu</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="{{route('product.index')}}">Sản phẩm</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="{{route('news.index')}}">Tin tức</a></li>
                            <li class="hover:text-blue-500 hover:underline"><a href="{{route('contact')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="md:pl-12 px-5 md:px-0">
                    <p class="font-medium md:font-normal text-lg md:text-base"> ĐĂNG KÝ NHẬN TIN MỚI</p>
                    <div class="border-b border-black flex my-5">
                        <label class="w-full">
                            <input class="mb-1 pr-2 w-full outline-none border-gray-100 focus:outline-none focus:border-[1px] focus:border-gray-100 px-0 py-0 ring-0 focus:ring-0 bg-gray-100" type="text" placeholder="Nhập email của bạn"/>
                        </label>
                        <button class="px-4 py-1 mb-1 bg-blue-300 hover:bg-blue-500 rounded-tl-3xl rounded-br-3xl">Gửi</button>
                    </div>
                    <div class="text-xl flex gap-3 pb-4 pt-2 border-b border-gray-300">
                        <a href="{{Config::get('website.url_facebook')}}"><i class="fa-brands fa-facebook-f hover:text-blue-500"></i></a>
                        <a href="{{Config::get('website.url_tiktok')}}"><i class="fa-brands fa-tiktok hover:text-blue-500"></i></a>
                        <a href="{{Config::get('website.url_instagram')}}"><i class="fa-brands fa-instagram hover:text-blue-500"></i></a>
                        <a href="{{Config::get('website.url_youtube')}}"><i class="fa-brands fa-youtube hover:text-blue-500"></i></a>
                        <a href="{{Config::get('website.url_twitter')}}"><i class="fa-brands fa-x-twitter hover:text-blue-500"></i></a>
                    </div>
                    <p class="py-2">Nhập khẩu và phân phối độc quyền tại Việt Nam bởi: </p>
                    <p class=" uppercase text-blue-600 font-medium text-xl">{{Config::get('website.author')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <p class="py-2 text-center text-sm text-gray-500 border-t border-gray-300">Copyright © 2024 <a href="{{route('homepage')}}">Shinex</a>. All Rights Reserved.</p>
</div>

<!-- right icon -->
<!-- làm sau -->

