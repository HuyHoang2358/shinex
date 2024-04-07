@extends('layouts.mainLayout')
@section('subTitle')
    Trang chủ |
@endsection

@section('content')

    <!-- banner -->
    @include('partial.frontBanner')
    <!-- //banner -->

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
                    <a href="{{url('/about')}}" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- best in -->
    <div class="models-agile pb-5 py-xl-0 py-md-5">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="row">
                <div class="offset-xl-2"></div>
                <div class="col-xl-5 col-md-6 left-models mt-lg-5 mt-md-3 pt-lg-4">
                    <h3 class="title text-bl font-weight-bold mb-1">Phòng thí nghiệm</h3>
                    <p class="title-sub mb-sm-4 mb-3">Quy tụ chuyên gia hàng đầu</p>
                    <p>Phòng thí nghiệm French Senting Innovation quy tụ
                        nhiều chuyên gia xuất sắc trong các lĩnh vực hóa học,
                        sinh học và tế bào học, đồng thời hợp tác kỹ thuật
                        với các viện nghiên cứu khoa học, cơ sở y tế và
                        trường đại học nổi tiếng trong và ngoài nước. Các phòng thí nghiệm này dành riêng cho các
                        dịch vụ của các thương hiệu quốc tế như Chanel, Lancome, Dior, Givenchy, Cissley, Leberni,...</p>

                    <a href="{{url('/about')}}" style="max-width: 150px;" class="btn button-style button-style-3 mt-sm-5">Xem thêm</a>
                </div>
                <div class="col-xl-5 col-md-6 right-models text-center mt-md-0 mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                   <img src="{{asset('images/brand/chanel.png')}}" alt="chanel" style="width:100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('images/brand/dior.jpg')}}" alt="dior" style="width:100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('images/brand/lancome.jpg')}}" alt="lancome" style="width:100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('images/brand/givenchy.jpg')}}" alt="dior" style="width:100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //best in -->

    <!-- middle section two -->
    <div class="middle-w3l text-center py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="py-xl-4 py-lg-2">
                <p class="mx-auto font-weight-bold"><span class="fa fa-quote-left mr-3" aria-hidden="true"></span>Các cách chăm sóc da mà không giải quyết
                    được vấn đề về da đều vô nghĩa!<span class="fa fa-quote-right ml-3" aria-hidden="true"></span></p>
                <a href="{{url('/contact')}}" style="max-width: 250px;" class="btn button-style mt-sm-5 mt-4">Liên hệ với chúng tôi</a>
            </div>
        </div>
    </div>
    <!-- //middle section two -->

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

    <!-- product section -->
    <div class="product py-5" id="product">
        <div class="container-fluid py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center mb-lg-0 mb-4">
                    <img src="{{asset('images/product.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-xl-4 col-lg-6 mt-xl-2">
                    <h3 class="title text-bl font-weight-bold mb-4">Hợp tác quốc tế với nhiều nhà cung cấp nguyên liệu hàng đầu</h3>
                    <p>Tuân thủ triết lý sản xuất: “đảm bảo chất lượng từ nguồn,” hầu hết các thành phần của các dòng
                        sản phẩm SHINEX được nhập khẩu từ nước ngoài, giúp các hoạt chất của chúng có tác động tốt hơn trên da</p>
                    <p>Tiêu chuẩn dược phẩm quốc tế, trước khi đưa ra thị trường được kiểm nghiệm bởi các cơ quan bên
                        thứ ba, phù hợp với các nguyên tắc giám sát an toàn cao nhất</p>
                </div>
                <div class="col-xl-2"></div>
            </div>
        </div>
    </div>
    <!-- //product section -->

@endsection

