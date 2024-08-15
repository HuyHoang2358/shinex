@extends('layouts.newLayout')
@section('title')
    Liên hệ
@endsection

@section('content')

    <div class="bg-[#f9f9f9] px-96 py-12">
        <div class="bg-white px-48 py-20">
            <h1 class="text-center text-4xl font-medium text-black">Liên hệ với chúng tôi</h1>
            <div class="flex justify-center gap-16 pt-16">
                <div class="w-[40%] text-sm">
                    <p class="text-lg font-semibold">Location</p>
                    <p class="py-1">{{Config::get('website.address')}}</p>
                    <p class="text-lg font-semibold">Operating Hour</p>
                    <p class="py-1">Daily: 9:00am - 10:00pm</p>
                    <p>{{Config::get('website.hotline')}}</p>
                    <div class="flex gap-3 text-lg py-2">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-messenger"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="w-[60%]">
                    <p class="text-lg font-semibold">Để lại tin nhắn cho chúng tôi</p>
                    <input class="w-full bg-gray-100 px-4 py-2 text-gray-700 mt-8" placeholder="Name" type="text">
                    <input class="w-full bg-gray-100 px-4 py-2 text-gray-700 my-5" placeholder="Email" type="text">
                    <input class="w-full bg-gray-100 px-4 py-2 text-gray-700 h-36" placeholder="Ghi chú" type="text">
                    <div class="flex justify-end pt-8">
                        <button class="w-[30%] py-3 rounded-tr-full rounded-bl-full bg-blue-400 text-white">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

