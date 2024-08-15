<!-- footer -->
<div class="container mx-auto xl:px-36 bg-blue-400 flex justify-between items-center py-3">
    <!-- List icon -->
    <div class="flex justify-start items-center gap-5 text-3xl">
        <div class="w-10 h-10 bg-white rounded-full p-2 text-blue-600 flex justify-center items-center">
            <a href="{{Config::get('website.url_facebook')}}">
                <i class="fa-brands fa-facebook hover:rotate-45 duration-700 ease-in-out"></i>
            </a>
        </div>

        <div class="w-10 h-10 bg-white rounded-full p-2 text-pink-500 flex justify-center items-center text-2xl">
            <a href="{{Config::get('website.url_messenger')}}">
                <i class="fa-brands fa-facebook-messenger hover:rotate-45 duration-700 ease-in-out"></i>
            </a>
        </div>

        <div class="w-10 h-10 bg-white rounded-full p-2 text-black flex justify-center items-center text-2xl">
            <a href="{{Config::get('website.url_instagram')}}">
                <i class="fa-brands fa-instagram hover:rotate-45 duration-700 ease-in-out"></i>
            </a>
        </div>

        <div class="w-10 h-10 bg-white rounded-full p-2 text-red-600 flex justify-center items-center text-2xl">
            <a href="{{Config::get('website.url_youtube')}}">
                <i class="fa-brands fa-youtube hover:rotate-45 duration-700 ease-in-out"></i>
            </a>
        </div>

    </div>

    <!-- Enter email -->
    <div class="flex items-center">
        <input class="px-4 py-2 text-sm w-72 outline-none border-0" type="text" placeholder="Nhập email của bạn">
        <button class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 hover:bg-[#f9d9c6]">Đăng kí</button>
    </div>
</div>

<!-- footer detail -->
<div class="container mx-auto xl:px-36 py-8">
    <div class="grid grid-cols-4 gap-8">
        <div class="col-span-1 p-4">
            <img class="w-full pb-5" src="{{asset('/images/logo/logo.png')}}" alt="shinex-logo">
            <ul class="text-sm font-semibold text-gray-500">
                <li class="flex justify-start items-center gap-3 py-2">
                    <i class="fa-solid fa-map-location-dot text-xl text-blue-500"></i>
                    <p class="flex items-center" >{{Config::get('website.address')}}</p>
                </li>
                <li class="flex items-center gap-3 py-2">
                    <i class="fa-solid fa-envelope text-xl text-blue-500"></i>
                    <a href="#"><p class="flex items-center">{{Config::get('website.email')}}</p></a>
                </li>
                <li class="flex items-center gap-3 py-2">
                    <i class="fa-solid fa-phone  text-xl text-blue-500"></i>
                    <p class="flex items-center ">{{Config::get('website.hotline')}}</p>
                </li>
            </ul>
        </div>
        <div class="col-span-2 p-4">
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-3">
                    <div>
                        <h4 class="pt-3 pb-1 text-base font-bold text-black tracking-wider">PHÒNG THÍ NGHIỆM HÀNG ĐẦU</h4>
                        <p class="pl-4 text-sm text-gray-400">Phòng thí nghiệm French Senting Innovation quy tụ nhiều chuyên gia xuất sắc trong các lĩnh vực hóa học, sinh học và tế bào học.</p>
                        <div class="grid grid-cols-2 gap-2 mt-2 px-4">
                            <img src="{{asset('/images/brand/chanel.png')}}" alt="chanel-logo" class="rounded-lg border border-gray-300 w-full hover:border-blue-400"/>
                            <img src="{{asset('/images/brand/dior.jpg')}}" alt="dior-logo" class="rounded-lg border border-gray-300 w-full hover:border-blue-400"/>
                            <img src="{{asset('/images/brand/lancome.jpg')}}" alt="lancome-logo" class="rounded-lg border border-gray-300 w-full hover:border-blue-400"/>
                            <img src="{{asset('/images/brand/givenchy.jpg')}}" alt="givenchy-logo" class="rounded-lg border border-gray-300 w-full hover:border-blue-400"/>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <h4 class="py-3 text-base font-bold text-black tracking-wider">HỖ TRỢ KHÁCH HÀNG</h4>
                    <ul class="pl-6 text-base text-gray-600 font-semibold ">
                        <li class="flex items-center gap-3 py-1"><a href="{{url('/')}}" class="hover:text-blue-600">Trang chủ</a></li>
                        <li class="flex items-center gap-3 py-1"><a href="{{route('about')}}" class="hover:text-blue-600">Giới thiệu</a></li>
                        <li class="flex items-center gap-3 py-1"><a href="#" class="hover:text-blue-600">Tin tức</a></li>
                        <li class="flex items-center gap-3 py-1"><a href="{{route('contact')}}" class="hover:text-blue-600">Liên hệ</a></li>
                        <li class="flex items-center gap-3 py-1"><a href="#" class="hover:text-blue-600">Sản phẩm</a></li>
                        <li class="flex items-center gap-3 py-1"><a href="#" class="hover:text-blue-600">Blog sức khỏe</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-span-1 p-4">
            <div>
                <h4 class="py-3 text-base font-bold text-black tracking-wider">GIỜ MỞ CỬA</h4>
                <p class="text-sm">Từ 9:00 - 21:30 tất cả các ngày trong tuần (bao gồm cả các ngày lễ, ngày Tết).</p>
            </div>
            <div class="py-2">
                <h2 class="py-3 text-base font-bold text-black  tracking-wider">GÓP Ý, KHIẾU NẠI</h2>
                <div class="flex justify-start items-center gap-3 py-1">
                    <i class="fa-solid fa-phone text-xl text-blue-500"></i>
                    <p class="flex items-center text-base">{{Config::get('website.hotlinehome')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="h-[2px] w-full bg-gray-300"></div>
    <p class="py-5 text-center text-sm text-gray-500">Bản quyền thuộc về <span class="text-blue-600 font-semibold">shinex.com.vn ©</span></p>
</div>
