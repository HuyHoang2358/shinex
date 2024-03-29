@extends('layouts.mainLayout')
@section('subTitle')
    Liên hệ |
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
            <li class="breadcrumb-item active" aria-current="page"> Liên hệ</li>
        </ol>
    </div>

    <!-- contact -->
    <section class="contact py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-bl font-weight-bold mb-1">Liên hệ</h3>
            <p class="title-sub text-center mb-sm-5 mb-4">Vui lòng điền form dưới đây</p>
            <div class="contact-form mx-auto text-left">
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label> Tên của bạn *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Địa chỉ Email *</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Số điện thoại No. *</label>
                                <input type="text" class="form-control" placeholder="Enter Phone no." name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4 mb-5">
                        <label>Chúng tôi có thể giúp gì bạn?</label>
                        <textarea name="message" class="form-control" placeholder="Enter Your Message Here" required></textarea>
                    </div>
                    <div class="contact-page">
                        <button type="submit" class="btn btn-default">Gửi </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->

@endsection
