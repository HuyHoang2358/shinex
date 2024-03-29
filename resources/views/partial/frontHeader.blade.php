<header style="display: block">
    <div class="container-fluid">
        <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2" >
            <!-- logo -->
            <div id="logo">
                <div class="row">
                    <h1><a class="" href="{{url('/')}}">{{Config::get('website.webName')}}</a></h1>
                </div>
                <div class="row">
                    <h4 style="color:white">The next to shine is you</h4>
                </div>
               {{-- <img src="{{asset('images/logo/logo.png')}}" alt="shinex-logo" class="h-25"/>--}}
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle">Danh mục</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li>
                            @if($page == 'homepage' )
                                <a href="{{url('/')}}" class="active">Trang chủ</a>
                            @else
                                <a href="{{url('/')}}">Trang chủ</a>
                            @endif
                        </li>
                        <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                            @if($page == 'about' )
                                <a href="{{url('/about')}}" class="active">Về chúng tôi</a>
                            @else
                                <a href="{{url('/about')}}">Về chúng tôi</a>
                            @endif
                        </li>
                        <li>
                            @if($page == 'gallery' )
                                <a href="{{url('/gallery')}}" class="active">Bộ sưu tập</a>
                            @else
                                <a href="{{url('/gallery')}}">Bộ sưu tập</a>
                            @endif



                        </li>
                        <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">Sản phẩm <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            @if($page == 'product-detail')
                                <a href="#" class="active">Sản phẩm <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            @else
                                <a href="#" >Sản phẩm <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            @endif
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="{{url('/whitening-remove-freckle-cream')}}" class="drop-text">Whitening Remove Freckle Cream</a></li>
                                <li><a href="{{url('/repair-anti-aging-cream')}}" class="drop-text">Repair Anti-Aging Cream</a></li>
                                <li><a href="{{url('/soothing-balance-repair-cream')}}" class="drop-text">Soothing balance repair cream</a></li>
                                <li><a href="{{url('/soothing-and-restoring-essential-oils')}}" class="drop-text">Serum smoothing and restoring essential oils</a></li>
                                <li><a href="{{url('/repairing-active-white-serum')}}" class="drop-text">Repairing active white serum</a></li>
                                <li><a href="{{url('/polypeptide-heal-damaged-skin-ice-crystal')}}" class="drop-text">Polypeptide</a></li>
                            </ul>
                        </li>
                        <li>
                            @if($page == 'contact' )
                                <a href="{{url('/contact')}}" class="active">Liên hệ</a>
                            @else
                                <a href="{{url('/contact')}}">Liên hệ</a>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</header>
