<div class="xl:px-36 py-3 flex justify-between items-center shadow fixed w-full z-50 bg-white">
    <a href="{{route('homepage')}}">
        <img class="w-48" src="{{asset('/images/shinex/logo-jolly.png')}}" alt="shinex-logo">
    </a>
    <div>
        <div class="flex gap-10 text-base font-serif">
            <a class="{{$page == 'homepage' ? 'font-bold text-blue-400' : ''}}" href="{{route('homepage')}}">TRANG CHỦ</a>
            <a class="{{$page == 'contact' ? 'font-bold text-blue-400' : ''}}" href="#">LIÊN HỆ</a>
            <a class="{{$page == 'about' ? 'font-bold text-blue-400' : ''}}" href="#">VỀ CHÚNG TÔI</a>
            <div class="group/item relative">
                <button type="button" class="{{$page == 'product' ? 'font-bold text-blue-400' : ''}}" >SẢN PHẨM <i class="fa-solid fa-angles-down pl-1"></i></button>
                <div class="group-hover/item:block hidden absolute z-50 bg-blue-400 w-[170%] rounded-md">
                    <ul class="text-white p-2 text-sm">
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">  Whitening Remove Freckle Cream </a>
                        </li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'repair-anti-aging-cream')}}"> Repair Anti-Aging Cream</a>
                        </li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}"> Soothing balance repair cream </a>
                        </li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'soothing-and-restoring-essential-oils')}}"> Serum smoothing and restoring essential oils </a>
                        </li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'repairing-active-white-serum')}}"> Repairing active white serum </a>
                        </li>
                        <li class="px-3 py-2 my-2 hover:bg-white hover:text-gray-700 rounded-md duration-300 ease-in-out">
                            <a href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">  Polypeptide </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


