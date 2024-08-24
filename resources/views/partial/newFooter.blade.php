<!-- footer -->
<div class="container mx-auto xl:px-36 bg-white flex justify-between items-center py-12 pt-52">
    <div class="w-full">
        <!-- grid -cols- 3 -->
            <!-- col-1 logo+ address-->
                <!-- img logo-->
                <!-- ul -->
                    <!-- li -->
                        <!-- a justify-start gap-4 -->
                            <!-- i lấy trên mạng-->
                            <!-- p -->

            <!-- col-1 category-->
                <!-- grid cols-2 -->
                    <!-- col-1 -->
                        <!-- ul -->
                            <!-- li -->
                                <!-- a -->
                    <!-- col-1 -->
                        <!-- ul -->
                            <!-- li -->
                                <!-- a -->
            <!-- col-1 info more -->
                <!-- mail -->
                    <!-- input -->
                    <!-- button -->
                <!-- list icon -->
                <!-- name company -->

        <div class="grid grid-cols-3">
            <div class="col-span-1 pr-12">
                <div class="h-20">
                    <a href="#"><img class="h-full" src="{{asset('/images/logo/logo.png')}}" alt=""></a>
                </div>
                <ul class="text-gray-800">
                    <li class="py-3">THÔNG TIN LIÊN HỆ</li>
                    <li class="hover:text-blue-500 hover:underline">
                        <a class="flex gap-2" href="#">
                            <i class="fa-solid fa-house-chimney text-lg flex items-center"></i>
                            <p>{{config::get('website.address')}}</p>
                        </a>
                    </li>
                    <li class="py-3 hover:text-blue-500 hover:underline">
                        <a class="flex gap-2" href="#">
                            <i class="fa-solid fa-phone text-lg flex items-center"></i>
                            <p>Hotline: {{config::get('website.hotline')}} (Hỗ trợ 24/7)</p>
                        </a>
                    </li>
                    <li class="hover:text-blue-500 hover:underline">
                        <a class="flex gap-2" href="#">
                            <i class="fa-solid fa-envelope text-lg flex items-center"></i>
                            <p>Email: {{config::get('website.email')}}</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-span-1 flex justify-between px-10">
                <div>
                    <p>VỀ SẢN PHẨM</p>
                    <ul class="text-gray-800 flex flex-col gap-2 pt-2 pl-2">
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Cleanser</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Essence</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Serum</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Moisture</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Protect</a></li>
                    </ul>
                </div>

                <div>
                    <p>LIÊN KẾT NHANH</p>
                    <ul class="text-gray-800 flex flex-col gap-2 pt-2 pl-2">
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Giới thiệu</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Sản phẩm</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Tin tức</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Liên hệ</a></li>
                        <li class="hover:text-blue-500 hover:underline"><a href="#">Chính sách</a></li>
                    </ul>
                </div>
            </div>

            <div class="pl-12">
                <p> ĐĂNG KÝ NHẬN TIN MỚI</p>
                <div class="border-b border-black flex my-5">
                    <label class="w-full">
                        <input class="mb-1 outline-none border-white focus:outline-none focus:border-[1px] focus:border-white px-0 py-0 ring-0 focus:ring-0" type="text" placeholder="Nhập email của bạn"/>
                    </label>
                    <button class="px-4 py-1 mb-1 bg-blue-300 hover:bg-blue-500 rounded-tl-3xl rounded-br-3xl">Gửi</button>
                </div>
                <div class="text-xl flex gap-3 pb-4 pt-2 border-b border-gray-300">
                    <a href="#"><i class="fa-brands fa-facebook-f hover:text-blue-500"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok hover:text-blue-500"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram hover:text-blue-500"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube hover:text-blue-500"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter hover:text-blue-500"></i></a>
                </div>
                <p class="py-2">Nhập khẩu và phân phối độc quyền tại Việt Nam bởi: </p>
                <p class=" uppercase text-blue-600">{{Config::get('website.author')}}</p>
            </div>
        </div>
    </div>
</div>
<div>
    <p class="py-2 text-center text-sm text-gray-500 border-t border-gray-300">Copyright © 2024 Shinex. All Rights Reserved.</p>
</div>
<!-- copyright -->

<!-- right icon -->
<!-- làm sau -->

