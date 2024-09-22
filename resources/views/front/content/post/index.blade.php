@extends('layouts.newLayout')
@section('title')
    Tin tức
@endsection

@section('seo')
@endsection

@section('banner')
    @include('front.common.titlePage', ['pageName' => 'Tin tức', 'routeName' => 'news.index'])
@endsection

@section('content')
    <!-- content -->
    <div class="md:px-52 px-10 mt-20">
        <div class="grid md:grid-cols-3 items-center">
            <div class="col-span-2 overflow-hidden">
                <a href="#" class="w-full ">
                    <img
                        class="w-full max-h-[500px] hover:scale-110 duration-700 ease-in-out"
                        src="{{asset('images/products/image_1_1.jpg')}}"
                        alt=""
                    />
                </a>
            </div>
            <div class="col-span-1 bg-blue-50 p-8 h-full text-base">
                <a href="#">
                    <h3 class="md:text-xl text-2xl font-medium hover:text-blue-700">Bio Beauty tại Korea Lotte Department Store</h3>
                </a>
                <div class="flex justify-start text-lg items-center gap-2 text-gray-600 py-2">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span class="font-medium">9/10/2024</span>
                </div>

                <p class="text-lg leading-relaxed text-justify overflow-hidden text-ellipsis line-clamp-3 pt-2 md:pt-1 md:mb-3 mb-5">
                    Sứ mệnh cao cả trong việc mang đến những sản phẩm cao cấp, lành tính từ thiên nhiên, Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc, nhằm mang
                </p>
                <a href="#">
                    <button type="button" class="px-16 py-2 text-white bg-blue-600 hover:text-blue-600 hover:bg-white rounded-tr-3xl rounded-bl-3xl text-lg font-semibold hover:duration-500 ease-in-out ">Xem thêm</button>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 my-10">
            @for($i=0; $i<=5; $i++)
                @include('front.common.newCard', [
                    'new' => [
                            "image" => "images/products/image_1_1.jpg",
                            "title" => "Bio Beauty tại Korea Lotte Department Store",
                            "created_at" => "9/10/2024",
                            "description" => "Sứ mệnh cao cả trong việc mang đến những sản phẩm cao cấp, lành tính từ thiên nhiên, Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc, nhằm mang Y2C Bio Beauty tự hào khi hiện diện tại nhiều Lotte Department tại Hàn Quốc, nhằm mang"
                    ]
                ])
            @endfor
        </div>
    </div>
@endsection

