<!-- Header -->
<div class="shadow fixed z-50 w-full bg-white">
    <div class="container mx-auto md:px-36 ">
        <div class="w-full">
            <div class="flex justify-between ">
                <div class="flex gap-8 items-center">
                    <a class="hover:text-blue-500" href="{{route('homepage')}}">TRANG CHỦ</a>
                    <a class="hover:text-blue-500" href="{{route('about')}}">GIỚI THIỆU</a>
                    <a class="hover:text-blue-500" href="{{route('product.list')}}">SẢN PHẨM</a>
                </div>
                <div class="h-20">
                    <a href="#">
                        <img class="h-full py-4" src="{{asset('/images/logo/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="flex justify-end items-center">
                    <a class="hover:text-blue-500" href="{{route('post.index')}}">TIN TỨC</a>
                    <a class="hover:text-blue-500 px-8" href="{{route('contact')}}">LIÊN HỆ</a>
                    <a href="#"><i class="fa-solid fa-magnifying-glass text-2xl "></i></a>
                    <a href="#"><i class="fa-solid fa-basket-shopping pl-3 text-2xl text-blue-500"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


