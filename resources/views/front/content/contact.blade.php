@extends('layouts.newLayout')
@section('title')
    Liên hệ
@endsection

@section('seo')
    <meta name="title" content="Liên hệ | Shinex">
    <meta name="keywords" content="Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="description" content="Shinex – nhãn hàng dược mỹ phẩm hàng đầu mang đến giải pháp chuyên sâu cho mọi loại da, kể cả làn da nhạy cảm nhất.">

    <meta name="og:title" content="Liên hệ | Shinex">
    <meta name="og:description" content="Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="og:keywords" content="Shinex – nhãn hàng dược mỹ phẩm hàng đầu mang đến giải pháp chuyên sâu cho mọi loại da, kể cả làn da nhạy cảm nhất.">
@endsection

@section('content')
    <div class="container mx-auto px-2 xl:px-36 text-lg">
        <div class="md:px-48 py-20 md:py-24">
            <h1 class="text-center text-2xl md:text-3xl font-medium text-blue-500">Liên hệ với chúng tôi</h1>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-16 pt-4 md:pt-16">
                <div class="col-span-1 md:col-span-2 text-sm md:text-base">
                    <h2 class="text-base md:text-lg font-semibold">Địa chỉ</h2>
                    <p class="py-1 pl-2 text-gray-500">{{Config::get('website.address')}}</p>

                    <h2 class="text-base md:text-lg font-semibold mt-2">Thời gian hoạt động</h2>
                    <p class="py-1 pl-2 text-gray-500">Từ 9:00 - đến 21:30</p>

                    <h2 class="text-base md:text-lg font-semibold mt-2">Số điện thoại</h2>
                    <p class="py-1 pl-2 text-gray-500">{{Config::get('website.hotline')}}</p>
                </div>
                <div class="col-span-1 md:col-span-3 text-sm md:text-base">
                    <h2 class="text-lg md:text-lg font-semibold text-center md:text-start">Để lại tin nhắn cho chúng tôi</h2>

                    <input class="text-sm md:text-base w-full bg-gray-100 px-4 py-2 text-gray-700 mt-8 border border-gray-100 " placeholder="Nhập tên của bạn" type="text">
                    <input class="text-sm md:text-base w-full bg-gray-100 px-4 py-2 text-gray-700 my-5 border border-gray-100" placeholder="Nhập địa chỉ email" type="text">
                    <textarea class="text-sm md:text-base w-full bg-gray-100 px-4 py-2 text-gray-700 border border-gray-100" rows=3 placeholder="Nhập ghi chú" type="text"></textarea>
                    <div class="flex justify-end pt-4">
                        <button class="px-10 py-3 rounded-tr-full rounded-bl-full bg-blue-400 text-white">Gửi tin nhắn</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

