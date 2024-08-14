<div class="px-24 py-3 flex justify-between items-center">
    <div>
        <a href="{{route('homepage')}}">
            <img class="w-48" src="{{asset('/images/logo/newlogo.png')}}" alt="">
        </a>
    </div>
    <div>
        <div class="flex gap-10 text-base font-serif">
            <a href="{{route('homepage')}}">TRANG CHỦ</a>
            <a class="text-blue-400" href="{{route('contact')}}">CONTACT</a>
            <a href="{{route('about')}}">ABOUT US</a>
            <div class="group/item relative">
                <a class="text-blue-400" href="../partial/sanpham.blade.php">SẢN PHẨM <i class="fa-solid fa-angles-down"></i></a>
                <div class="group-hover/item:block hidden absolute z-50 bg-[#333] w-[170%] rounded-md">
                    <ul class="text-white p-2 text-sm">
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Whitening Remove Freckle Cream</li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Repair Anti-Aging Cream</li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Soothing balance repair cream</li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Serum smoothing and restoring essential oils</li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Repairing active white serum</li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">Polypeptide</li>
                    </ul>
                </div>
            </div>
            <a href="">
                GIỎ HÀNG
                <i class="fa-solid fa-box-open relative px-1">
                    <span class="absolute top-[-8px] right-[-1px] px-[5px] py-[4px] rounded-full text-[8px] bg-[#ffb9a4] text-white">0</span>
                </i>
            </a>
        </div>
    </div>
</div>



