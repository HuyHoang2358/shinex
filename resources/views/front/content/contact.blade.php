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
    <div class="container mx-auto px-2 xl:px-36 text-lg grid grid-cols-2 pt-12 my-32 gap-16 ">
        <div class="col-span-1">
            <h1 class="text-3xl font-medium text-blue-500">LIÊN HỆ TƯ VẤN MIỄN PHÍ</h1>
            <div class="flex justify-between mr-16 mt-6 mb-2 font-medium">
                <p><a class="flex items-center hover:text-blue-500" href="#"><i class="fa-solid fa-phone-volume py-1 px-1 text-blue-500 pr-2 text-2xl"></i>{{Config::get('website.hotline')}}</a></p>
                <p><a class="flex items-center hover:text-blue-500" href="#"><i class="fa-solid fa-envelope py-1 px-1 text-blue-500 pr-2 text-2xl"></i>{{Config::get('website.email')}}</a></p>
            </div>
            <p><a class="flex items-center font-medium mr-16 hover:text-blue-500" href="#"><i class="fa-solid fa-location-dot py-1 px-1 text-blue-500 pr-2 text-2xl"></i>{{Config::get('website.address')}}</a></p>
            <div class="pt-5">
                <div class="flex gap-8">
                    <input class="w-full h-12 py-0 border-1 border-gray-300 " name="name" autocomplete="name" autofocus required type="text" placeholder="Tên khách hàng">
                    <input class="w-full h-12 border-1 border-gray-300" name="phone" autocomplete="phone" required type="text" placeholder="Số điện thoại">
                </div>
                <input class="w-full my-6 h-12 border-1 border-gray-300" type="text" placeholder="Địa chỉ"><br>
                <textarea class="w-full h-32 border-1 border-gray-300" placeholder="Ghi chú"></textarea>
            </div>
            <button class="mt-5 bg-blue-500 rounded-tr-3xl rounded-bl-3xl px-9 py-2 text-white">GỬI YÊU CẦU</button>
        </div>
        <div class="col-span-1">
            <iframe class="h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3725064351283!2d105.78100657587142!3d20.977699989529178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adfb2968be57%3A0x9c41d21e83e735a4!2zVOG6p25nIDkgVMOyYSBuaMOgIEjhu5MgR8awxqFtIFBsYXph!5e0!3m2!1svi!2s!4v1724643395657!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection

