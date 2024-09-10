@extends('layouts.newLayout')
@section('subTitle')
    Danh sách sản phẩm | Shinex
@endsection
@section('head')

@endsection
@section('content')
    <div class="grid grid-cols-3 px-40 gap-10">
        @for($i=0; $i<=5; $i++)
            <div>
                <img class="h-[65%] w-full" src="{{asset('ImgProduct/9.jpg')}}" alt="">
                <div class="text-center">
                    <h3 class="text-xl font-medium py-3">Refresh serum</h3>
                    <button class="bg-blue-600 px-16 py-2 rounded-tr-3xl rounded-bl-3xl text-white font-semibold hover:scale-110 hover:duration-500 hover:ease-in-out">XEM THÊM</button>
                </div>
            </div>
        @endfor
    </div>
@endsection
