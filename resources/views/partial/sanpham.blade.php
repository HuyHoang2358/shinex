@include('partial.frontHeader')

<div class="flex px-20 gap-16 items-center">
    <div class="basis-1/2 h-[90%]">
        <img class="rounded-xl" src={{asset('/ImgProduct/3.jpg')}} alt="">
    </div>
    <div class="basis-1/2 text-black">
        <div class="flex">
            <h1 class="font-semibold text-lg text-blue-400">Tắm & Dưỡng Thể - Tẩy Da Chết</h1>
            <img src="" alt="">
        </div>
        <div class="pr-24">
            <div class="font-medium text-2xl py-3">
                <h1>Repair Anti-Aging cream</h1>
                <h1>Kem dưỡng phục hồi chống lão hóa</h1>
            </div>
            <span class="text-lg font-medium">125.000đ</span>
            <p class="text-md pt-3 pb-5">Hạt cà phê nguyên chất từ Đắk Lắk kết hợp với bơ ca cao Tiền Giang giúp làm sạch da chết cơ thể hiệu quả, làm đều màu da, khơi dậy năng lượng giúp da trở nên mềm mịn và rạng rỡ.</p>
            <div class="flex flex-wrap py-3 border-y-[1px] border-black text-xs">
                <div class="flex items-center gap-2 pr-5">
                    <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                    <p>không sulfate</p>
                </div><div class="flex items-center gap-2 pr-5">
                    <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                    <p>không sulfate</p>
                </div>
                <div class="flex items-center gap-2 pr-5">
                    <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                    <p>không sulfate</p>
                </div>
                <div class="flex items-center gap-2 pr-5">
                    <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                    <p>không sulfate</p>
                </div>
                <div class="flex items-center gap-2 pr-5">
                    <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                    <p>không sulfate</p>
                </div>
            </div>
            <div class="text-base py-5">
                <div class="border-b-[1px] border-gray-300 pb-5">
                    <h1 class="font-medium">Thích hợp với</h1>
                    <p class="opacity-85">Mọi loại da cơ thể</p>
                </div>
                <div class="pt-5">
                    <h1 class="font-medium">Thành phần chính</h1>
                    <p class="opaci ty-85">Với hạt cà phê nguyên chất và Bơ ca cao</p>
                </div>
            </div>
            <div class="flex gap-10 py-3">
                <img class="w-20 h-20" src="{{asset('/images/logo/quality')}}" alt="">
                <img class="w-24 h-20" src="{{asset('/images/logo/heal.png')}}" alt="">
                <img class="w-24 h-20" src="{{asset('/images/logo/nature.png')}}" alt="">
            </div>
            <div class="bg-black text-white text-xl text-center py-5 rounded-md hover:opacity-70 duration-500 ease-in-out group/item my-5">
                THÊM VÀO GIỎ - 385.000 Đ
                <i class="fa-solid fa-bag-shopping pl-8 pr-2 group-hover/item:translate-x-3 duration-300 ease-in-out"></i>
            </div>
            <div class="font-medium flex justify-between text-lg">
                <div class="flex gap-4 items-center">
                    <p>Chia sẻ</p>
                    <a href="#"><i class="fa-brands fa-facebook text-2xl opacity-20 hover:opacity-100"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram text-2xl opacity-20 hover:opacity-100"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter text-2xl opacity-20 hover:opacity-100"></i></a>
                </div>
                <div>
                    <a href="#"><p>Viết đáng giá</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Infor of Product--}}
<div class="flex gap-16 my-5 justify-center bg-blue-200 text-lg text-blue-700 font-medium">
    <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Mô tả sản phẩm</h1></a>
    <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Thành phần</h1></a>
    <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Chu trình chăm da</h1></a>
    <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Đánh giá </h1></a>
</div>

<div class="flex gap-16 px-20 py-10 v   BN =Ư">
    <div class="basis-1/2">
        <h1 class="text-4xl bg-gradient-to-br from-blue-500 to-blue-900 inline-block text-transparent bg-clip-text">Tính năng - Đặc điểm</h1>
        <p class="text-sm py-5">Loại bỏ tình trạng ngứa ran, mẩn đỏ, khô, ngứa, rát da. Chăm sóc toàn diện cho làn da bị tổn thương.
            Phục hồi da sau các can thiệp phẫu thuật. Làm dịu da, giảm tình trạng đỏ sau khi tiếp xúc với ánh nắng
            mặt trời. Phục hồi da sau khi xăm hoặc có vết thương. Bổ sung keratin, làm dày da, cải thiện tình trạng da mỏng lộ
            mao mạch. Nuôi dưỡng và phục hồi mô dưới da.
        </p>
    </div>
    <div class="basis-1/2">
        <img src="{{asset('/ImgProduct/4.jpg')}}" alt="">
    </div>
</div>

<div class="px-20">
    <h1 class="text-4xl font-bold text-blue-800 py-12">Phương pháp chăm sóc da cơ bản</h1>
    <div class="grid grid-cols-2 gap-10">
        <div>
            <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">1</span>
                WET SKIN
            </h1>
            <p class="text-lg text-center text-blue-700">Take a shower and wet your skin thoroughly</p>
        </div>
        <div>
            <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">2</span>
                APPLY
            </h1>
            <p class="text-lg text-center text-blue-700">Apply the shower gel to your whole body, face & hair</p>
        </div>
        <div>
            <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">3</span>
                MASSAGE
            </h1>
            <p class="text-lg text-center text-blue-700">Massage the shower gel into your skin</p>
        </div>
        <div>
            <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">4</span>
                RINSE
            </h1>
            <p class="text-lg text-center text-blue-700 justify-center">Rinse the residues off thoroughly before patting yourself dry</p>
        </div>
    </div>
</div>


<div class="px-32 py-10">
    <h1 class="text-2xl font-semibold text-black leading-10 py-9    "><span class="font-normal">SẢN PHẨM NÀO</span><br>
        PHÙ HỢP VỚI BẠN?
    </h1>
    <div class="flex gap-5 text-black">
        <div class="flex gap-3">
            <div class="basis-1/2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-lg"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 pt-10 pb-4">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300">KIỂM TRA</div>
                </a>
            </div>
            <div class="basis-1/2 hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
        </div>
        <span class="flex items-center font-semibold text-2xl">OR</span>
        <div class="flex gap-3">
            <div class="basis-1/2 hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
            <div class="basis-1/2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-lg"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 pt-10 pb-4">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300">KIỂM TRA</div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="px-32">
    <h1 class="text-2xl font-semibold text-blue-800 leading-10 py-9"><span class="font-normal text-blue-600">SẢN PHẨM NÀO</span><br>
        PHÙ HỢP VỚI BẠN?
    </h1>
    <div class="flex gap-8">
        <div>
            <div class="hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
            <div class="py-2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-base"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                </a>
            </div>
        </div>
        <div>
            <div class="hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
            <div class="py-2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-base"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                </a>
            </div>
        </div>
        <div>
            <div class="hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
            <div class="py-2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-base"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                </a>
            </div>
        </div>
        <div>
            <div class="hover:box-border">
                <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
            </div>
            <div class="py-2">
                <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                <h1 class="text-base"><a href="#">LEVRES</a></h1>
                <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                <a href="#">
                    <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                </a>
            </div>
        </div>
    </div>
</div>
