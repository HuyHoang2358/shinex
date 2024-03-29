<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('subTitle')| Admin Manager</title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/frontend-custom.css')}}" >
    <!-- CSRF Token -->
    @yield('head')

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<div class="w-full h-screen bg-[#E9E9E9]">
    <div class="grid grid-cols-6 h-full p-4 pr-4 gap-4">
        <div class="col-span-1 h-full">
            @include('partial.adminSidebar')
        </div>
        <div class="col-span-5 h-full flex flex-col gap-4">
            @include('partial.adminHeader')
            <div class="w-full h-full">
                <div class="w-full h-full bg-white rounded-xl p-8">
                    <div class="w-full h-full">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
