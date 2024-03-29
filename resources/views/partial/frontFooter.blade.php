<!-- footer -->
<footer class="footer-w3ls py-5">
    <div class="container py-sm-4">
        <div class="row">
            <div class="col-lg-3 col-sm-6 agileinfo_footer_grid">
                <!-- logo -->
                <div class="logo-2 mb-sm-4 mb-3">
                    <h2><a href="{{url('/')}}">{{Config::get('website.webName')}}</a></h2>
                </div>
                <!-- //logo -->
                <p>{{Config::get('website.slogan')}}</p>
            </div>
            <div class="col-lg-3 col-sm-6 agileinfo_footer_grid mt-sm-0 mt-5">
                <h4 class="mb-sm-5 mb-4">Sản phẩm nổi bật</h4>
                <ul class="list-unstyled">
                    <li><span class="fa fa-angle-double-right mr-2"></span> Whitening Remove Freckle Cream</li>
                    <li><span class="fa fa-angle-double-right mr-2"></span> Repair Anti-Aging Cream</li>
                    <li><span class="fa fa-angle-double-right mr-2"></span> Soothing balance repair cream</li>
                    <li><span class="fa fa-angle-double-right mr-2"></span> Repairing active white serum</li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 agileinfo_footer_grid pl-lg-0 mt-lg-0 mt-5">
                <h4 class="mb-sm-5 mb-4">Bộ sưu tập</h4>
                <div class="d-flex">
                    @php
                        $album1 = [
                            "images/products/image_1_1.jpg",
                            "images/products/image_1_2.jpg",
                            "images/products/image_1_3.jpg",
                        ]
                    @endphp
                    @foreach($album1 as $image)
                        <div class="col-sm-4 col-3 agileinfo_footer_grid1">
                            <a href="#">
                                <img src="{{asset($image)}}" alt=" " class="img-fluid">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex mt-2">
                    @php
                        $album1 = [
                            "images/products/image_1_4.jpg",
                            "images/products/image_1_5.jpg",
                            "images/products/image_1_6.jpg",
                        ]
                    @endphp
                    @foreach($album1 as $image)
                        <div class="col-sm-4 col-3 agileinfo_footer_grid1">
                            <a href="#">
                                <img src="{{asset($image)}}" alt=" " class="img-fluid">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 agileinfo_footer_grid mt-lg-0 mt-5">
                <h4 class="mb-sm-5 mb-4">Địa chỉ</h4>
                <ul class="list-unstyled">
                    <li><span class="fa fa-map-marker mr-2"></span> {{Config::get('website.address')}}</li>
                    <li>
                        <span class="fa fa-envelope mr-2"></span>
                        <a href="mailto:{{Config::get('website.email')}}">{{Config::get('website.email')}}</a>
                    </li>
                    <li>
                        <span class="fa fa-phone mr-2"></span>{{Config::get('website.phone')}}</li>
                    <li>
                        <span class="fa fa-clock-o mr-2"></span>Hàng ngày 9:00-17:00</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

<!-- footer last -->
<div class="newsletter-main text-center py-md-5 py-4">
    <div class="container">
        <a href="{{url('/')}}" class="move-top text-center"></a>
        <!-- newsletter -->
        <div class="agileinfo_footer_grid mt-3">
            <h4 class="mb-4"> Đăng ký nhận tin tức</h4>
            <form action="#" method="post" class="newsletter">
                <input class="email" type="email" name="email" placeholder=" Địa chỉ email của bạn..." required>
                <button type="submit" class="btn"> Đăng ký </button>
            </form>
            <div class="clearfix"> </div>
        </div>
        <!-- //newsletter -->
        <!-- copyright -->
        <div class="w3agile_footer_copy mt-sm-5 mt-4">
            <p>© 2024 Shinex. All rights reserved | Design by
                <a href="{{url('/')}}">Shinex.</a>
            </p>
        </div>
        <!-- //copyright -->
    </div>
</div>
<!-- //footer last -->
