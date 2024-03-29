@extends('layouts.mainLayout')
@section('subTitle')
    {{$product->name}} |
@endsection
@section('head')
    <style>
        .product-content li{
            margin-left: 5%;
        }
        .product-content strong{
            color: #000;
        }
        .product-content p{
            padding-top: 2%;
            padding-bottom: 3%;
        }
    </style>
@endsection
@section('content')
    <!-- banner -->
    <div class="banner_w3lspvt-2">

    </div>

    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> {{$product->name}}</li>
        </ol>
    </div>

    <!-- single -->
    <div class="blog-w3l pb-5 pt-2">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-bl font-weight-bold mb-1">{{$product->name}}</h3>
            <div class="row blog-content pt-lg-3">
                <!-- left side -->
                <div class="col-lg-8 left-blog-info text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <div id="carouselExampleIndicators" class="carousel slide  pointer-event">
                                    <div class="carousel-indicators">
                                        @foreach($product->images as $img)
                                            @if($loop->index == 0)
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{$loop->index +1 }}"></button>
                                            @else
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" aria-label="Slide {{$loop->index + 1}}"></button>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach($product->images as $img)
                                            @if($loop->index == 0)
                                                <div class="carousel-item active">
                                                    <img src="{{asset($img)}}" class="d-block w-100" alt="..." style="max-height: 500px">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img src="{{asset($img)}}" class="d-block w-100" alt="..." style="max-height: 500px">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p style="margin-top:30px">{{$product->description}}</p>
                        <div class="my-3 product-content">
                            {!! $product->content !!}
                        </div>
                    </div>
                </div>
                <!-- //left side -->
                <!-- right side -->
                @include('partial.frontRightSide')
                <!-- //right side -->
            </div>
        </div>
    </div>
@endsection
