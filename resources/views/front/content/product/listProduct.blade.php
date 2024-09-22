@extends('layouts.newLayout')

@section('title')
    Sản phẩm
@endsection

@section('banner')
    @include('front.common.titlePage', ['pageName' => 'Sản phẩm', 'routeName' => 'product.index'])
@endsection


@section('content')
    <div class="grid grid-cols-2 md:grid-cols-3 px-5 md:px-40 py-12 gap-7 md:gap-10 mb-24">
        @foreach($products as $product)
            <div class="col-span-1">
                <div class="w-full h-80 overflow-hidden rounded-lg">
                    <a href="{{route('product.detail', $product->slug)}}">
                        <img class="h-full w-full hover:scale-110 duration-700 ease-in-out" src="{{asset($product->images[0])}}" alt="{{$product->slug}}">
                    </a>
                </div>
                <div class="text-center">
                    <h3 class="text-base md:text-xl font-medium py-3 h-20 ">{{$product->name}}</h3>
                    <a href="{{route('product.detail', $product->slug)}}">
                        <button type="button"
                                class="bg-blue-500 px-10 md:px-16 md:py-2 py-3 rounded-tr-3xl rounded-bl-3xl text-white justify-self-end
                        font-semibold hover:scale-110 hover:duration-500 hover:ease-in-out text-sm md:text-base"
                        >
                            XEM THÊM
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
