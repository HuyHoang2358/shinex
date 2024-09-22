<!-- Title Page -->
<div class="w-full mt-12 relative">
    <img class="w-full h-72" src="{{asset('images/nav/6.jpg')}}" alt="">
    <div class="absolute bottom-12 md:left-72 left-16 font-semibold text-black">
        <div class="flex justify-start items-center gap-4">
            <a href="{{url('/')}}" class="text-black hover:text-blue-700"> Trang chủ </a>
            <p>/</p>
            <a href="{{route($routeName)}}" class="text-black hover:text-blue-700"> {{$pageName}} </a>
        </div>

        <h1 class="text-3xl uppercase font-bold mt-2">{{$pageName}}</h1>
    </div>
</div>
