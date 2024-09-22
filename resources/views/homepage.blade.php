@extends('layouts.newLayout')
@section('title')
    Trang chủ
@endsection
@section('seo')
    <meta name="title" content="Trang chủ | Shinex">
    <meta name="keywords" content="Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="description" content="Shinex – nhãn hàng dược mỹ phẩm hàng đầu mang đến giải pháp chuyên sâu cho mọi loại da, kể cả làn da nhạy cảm nhất.">

    <meta name="og:title" content="Trang chủ | Shinex">
    <meta name="og:description" content="Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="og:keywords" content="Shinex – nhãn hàng dược mỹ phẩm hàng đầu mang đến giải pháp chuyên sâu cho mọi loại da, kể cả làn da nhạy cảm nhất.">
@endsection
@section('content')
    <div class="grid md:grid-cols-2 mt-[56px]">
        <div class="col-span-1 h-full group/item relative">
            <img class="h-full " src="{{asset('images/components/adsHome_2.jpg')}}" alt="">
            <div class="absolute text-center bottom-0 text-white w-full h-full bg-black bg-opacity-40 flex flex-col justify-center">
                <h3 class="text-2xl">NGUỒN NGUYÊN LIỆU QUÝ HIẾM</h3>
                <p class="underline group-hover/item:block hidden duration-500 ease-in-out ">Từ thiên nhiên Hàn Quốc</p>
            </div>
        </div>
        <div class="col-span-1 h-full group/item relative">
            <img class="h-full " src="{{asset('images/components/adsHome_1.jpg')}}" alt="">
            <div class="absolute text-center bottom-0 text-white w-full h-full bg-black bg-opacity-40 flex flex-col justify-center">
                <h3 class="text-2xl">CÔNG NGHỆ LÊN MEN KÉP</h3>
                <p class="underline group-hover/item:block hidden duration-500 ease-in-out ">Độc quyền hiện đại</p>
            </div>
        </div>
    </div>
@endsection
