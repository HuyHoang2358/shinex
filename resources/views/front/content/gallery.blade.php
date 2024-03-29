@extends('layouts.mainLayout')
@section('subTitle')
    Bộ sưu tập |
@endsection
@section('head')

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
            <li class="breadcrumb-item active" aria-current="page"> Bộ sưu tập</li>
        </ol>
    </div>


    <!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-lg-5">
            <h3 class="title text-center text-bl font-weight-bold mb-1">Bộ sưu tập</h3>
            <p class="title-sub text-center mb-sm-5 mb-4">Click vào ảnh để khám phá</p>
            <div class="news-grids pb-lg-5 text-center">
                <div class="row">
                    <div class="col-md-4 gal-img">
                        <a href="#gal1"><img src="{{asset('images/products/image_1_1.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img my-md-0 my-4">
                        <a href="#gal2"><img src="{{asset('images/products/image_1_2.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal3"><img src="{{asset('images/products/image_1_3.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-4 gal-img">
                        <a href="#gal4"><img src="{{asset('images/products/image_1_4.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img my-md-0 my-4">
                        <a href="#gal5"><img src="{{asset('images/products/image_1_5.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal6"><img src="{{asset('images/products/image_1_6.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="row my-md-0 my-4">
                    <div class="col-md-4 gal-img">
                        <a href="#gal7"><img src="{{asset('images/products/image_1_7.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img my-md-0 my-4">
                        <a href="#gal8"><img src="{{asset('images/products/image_1_8.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal9"><img src="{{asset('images/products/image_1_1.jpg')}}" alt="news image" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popup-->
    <div id="gal1" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_1.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_2.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_3.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_4.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal5" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_5.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal6" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_6.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal7" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_7.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal8" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_8.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal9" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('images/products/image_1_1.jpg')}}" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
@endsection
