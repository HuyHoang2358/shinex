@extends('layouts.mainLayout')
@section('subTitle')
    Giới thiệu |
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
            <li class="breadcrumb-item active" aria-current="page"> Giới thiệu</li>
        </ol>
    </div>

    <!-- about -->
    <section class="about-w3ls py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-bl font-weight-bold mb-1">Shinex</h3>
            <p class="title-sub text-center mb-sm-5 mb-4">The next to shine is you</p>
            <div class="row">
                <div class="col-lg-6 about-left-w3pvt">
                    <div class="main-img">
                        <img src="{{asset('images/ab.jpg')}}" alt="" class="img-fluid pos-aboimg2">
                    </div>
                </div>
                <div class="col-lg-6 about-right pt-5">
                    <h3 class="tittle-w3layouts text-uppercase pr-lg-5 mt-2" style="font-weight: 500">Trong thời đại chú
                        trọng tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất. </h3>
                    <p class="mt-4 mb-5" style="color:red; font-style: italic">"Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa"</p>
                </div>
            </div>
        </div>
    </section>



    <!-- services -->
    <div class="services py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-bl font-weight-bold mb-1">28 Ngày</h3>
            <p class="title-sub text-center mb-sm-5 mb-4">Chu kỳ dưỡng da tái tạo lại sức sống mới</p>
            <div class="ins-sec1">
                <div class="row">


                    <div class="col-lg-8 mx-auto mt-lg-5">
                        <div class="row">
                            <div class="col-lg-6 my-lg-0 my-md-5">
                                <div class="abt-block mt-sm-0">
                                    <div class="serv_abs  serv_bottom">
                                        <span class="fa fa-user-md"></span>
                                    </div>
                                    <h3>Bí quyết làm trắng</h3>
                                    <p> Bí quyết “điều chỉnh bên trong và duy
                                        trì vẻ bên ngoài” làn da.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-lg-0 mt-md-5">
                                <div class="abt-block">
                                    <div class="serv_abs  serv_bottom">
                                        <span class="fa fa-thumbs-o-up"></span>
                                    </div>
                                    <h3>Chăm sóc toàn diện</h3>
                                    <p> Phát triển các mô dưới da
                                        Sử dụng thường xuyên, có thể thấy
                                        sự thay đổi của làn da
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5 pt-md-5">
                    <div class="col-lg-4">
                        <div class="abt-block mb-lg-0 mb-md-5">
                            <div class="serv_abs serv_bottom">
                                <span class="fa fa-star"></span>
                            </div>
                            <h3>Sức mạnh làm trắng</h3>
                            <p> Làm giảm sắc tố melanin. <br>
                                Hiệu quả làm trắng được cải thiện.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-lg-0 my-md-5">
                        <div class="abt-block">
                            <div class="serv_abs serv_bottom">
                                <span class="fa fa-magic"></span>
                            </div>
                            <h3>Sức mạnh dưỡng ẩm</h3>
                            <p> Tăng độ ẩm cho da. <br>
                                Làm mờ vết nám, tàn nhang.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5">
                        <div class="abt-block">
                            <div class="serv_abs serv_bottom">
                                <span class="fa fa-child"></span>
                            </div>
                            <h3>Sức mạnh tái tạo</h3>
                            <p> Giảm tỷ lệ dị ứng, các vết đỏ <br>
                                Tăng cường sức đề kháng cho da</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <div class="agile-wthree-works py-5" id="some">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="grids-w3ls-right-2 offset-xl-7 offset-md-6" style="width:100%; flex-shrink: unset">
                    <h4 class="title text-dark mb-lg-2 mb-2">Shinex đặt hiệu quả lên hàng đầu</h4>
                    <p class="mt-2">
                        <span style="color:red; font-weight: bold;font-size: 24px; margin-right:5px">*</span>
                        Công nghệ điều trị theo hướng tác động của SHINEX dựa trên nhiều vấn đề về da,
                        cung cấp các giải pháp và sản phẩm dưỡng da để giải quyết chính xác và hiệu quả các vấn đề về
                        da như: Điều trị tàn nhang, đốm đồi mồi, nám da, ban xanh, sạm da do nhiễm chì, bớt sắc tố Ota,
                        mụn cóc, u ống tuyến mồ hôi, và bớt bẩm sinh. </p>

                    <p class="mt-2">
                        <span style="color:red; font-weight: bold;font-size: 20px; margin-right:5px">*</span>
                        Thay đổi hoàn toàn làn da vàng, đen, sần sùi, nếp
                        nhăn, bọng mắt, quầng mắt, vết chân chim, mụn
                        trứng cá ở cả thanh thiếu niên và người lớn, cũng
                        như các nguyên nhân khác gây ra sự thay đổi màu
                        da, tái tạo vết sẹo lõm, và làm phẳng sẹo lồi.
                        Giúp làn da trở nên trắng hồng, mịn màng và đầy sức
                        sống.
                    </p>
                    <a href="{{url('/')}}" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
