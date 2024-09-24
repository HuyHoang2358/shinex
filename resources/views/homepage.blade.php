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
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="flex w-full h-[80%] transition-all duration-500">
            <div class="relative w-[50%] h-full overflow-hidden transition-all duration-700 hover:w-[60%] group/item">
                <a href="#">
                    <img src="{{asset('images/components/adsHome_2.jpg')}}" alt="Image 1"
                         class="h-full w-full object-cover transition-all duration-700">
                    <div class="absolute text-center bottom-0 text-white w-full h-full bg-black bg-opacity-40 flex flex-col justify-center">
                        <h3 class="text-2xl">NGUỒN NGUYÊN LIỆU QUÝ HIẾM</h3>
                        <p class="underline group-hover/item:block hidden duration-700 transition-all ease-in-out">Từ thiên nhiên Hàn Quốc</p>
                    </div>
                </a>
            </div>

            <div class="relative w-[50%] h-full overflow-hidden transition-all duration-700 hover:w-[60%] group/item">
                <a href="#">
                    <img src="{{asset('images/components/adsHome_1.jpg')}}" alt="Image 2"
                         class="h-full w-full object-cover transition-all duration-700">
                    <div class="absolute text-center bottom-0 text-white w-full h-full bg-black bg-opacity-40 flex flex-col justify-center">
                        <h3 class="text-2xl">CÔNG NGHỆ LÊN MEN KÉP</h3>
                        <p class="underline group-hover/item:block hidden duration-700 transition-all ease-in-out">Độc quyền hiện đại</p>
                    </div>
                </a>
            </div>
        </div>
@endsection
