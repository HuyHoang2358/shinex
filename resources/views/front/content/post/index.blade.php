@extends('layouts.newLayout')
@section('title')
    Tin tức
@endsection

@section('seo')
@endsection
@section('content')
    <!-- Title page  truyền biến title vào-->
    <div class="w-full mt-12 relative">
        <img class="w-full h-[350px]" src="{{asset('images/nav/6.jpg')}}" alt="">
        <div class="absolute bottom-12 left-72 font-semibold text-blue-600">
            Trang chủ / Tin tức
            <h1 class="text-3xl uppercase">Tin tức</h1>
        </div>
    </div>
    <!-- content -->
    <div class="px-52 mt-20">
        <div class="flex bg-blue-300">
            <div class="basis-2/3 overflow-hidden">
                <a href="#"><img class="w-full h-[500px] hover:scale-110 duration-700 ease-in-out" src="{{asset('images/products/image_1_1.jpg')}}" alt=""></a>
            </div>
            <div class="basis-1/3 p-8">
                <a href="#"><h1 class="text-xl font-medium hover:text-blue-700">Y2C Bio Beauty tại Korea Lotte Department Store</h1></a>
                <i class="fa-regular fa-calendar-days text-gray-600 text-xl pt-7"></i><span class="px-2 text-gray-600 font-medium text-xl">9/10/2024</span>
                <p class="text-base leading-relaxed text-justify overflow-hidden text-ellipsis line-clamp-3 pt-3 mb-5">
                    Sứ mệnh cao cả trong việc mang đến những sản phẩm cao cấp, lành tính từ thiên nhiên, Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc, nhằm mang
                </p>
                <button class="px-16 py-2 text-white bg-blue-600 hover:text-blue-600 hover:bg-white rounded-tr-3xl rounded-bl-3xl text-lg font-semibold hover:duration-500 ease-in-out">Xem thêm</button>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-10 my-10">
            @for($i=0; $i<=5; $i++)
                <div>
                    <div class="overflow-hidden">
                        <a href="#"><img class="w-full h-[350px] hover:scale-110 duration-700 ease-in-out" src="{{asset('images/products/image_1_1.jpg')}}" alt=""></a>
                    </div>
                    <div>
                        <a href="#"><h1 class="text-xl font-medium hover:text-blue-700 pt-5">Y2C Bio Beauty tại Korea Lotte Department Store</h1></a>
                        <i class="fa-regular fa-calendar-days text-gray-600 text-lg pt-10"></i><span class="px-2 text-gray-600 font-medium text-base">9/10/2024</span>
                        <p class="text-base leading-relaxed text-justify overflow-hidden text-ellipsis line-clamp-3 pt-1 mb-3">
                            Sứ mệnh cao cả trong việc mang đến những sản phẩm cao cấp, lành tính từ thiên nhiên, Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc, Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc,
                        </p>
                        <button class="px-16 py-2 text-white bg-blue-600 hover:text-blue-600 hover:bg-white rounded-tr-3xl rounded-bl-3xl text-lg font-semibold hover:duration-500 ease-in-out">Xem thêm</button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

