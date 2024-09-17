<div>
    <div class="overflow-hidden">
        <a href="#"><img class="w-full h-[350px] hover:scale-110 duration-700 ease-in-out" src="{{asset($new['image'])}}" alt=""></a>
    </div>
    <div>
        <a href="#"><h3 class="text-xl font-medium hover:text-blue-700 pt-5">{{$new['title']}}</h3></a>
        <i class="fa-regular fa-calendar-days text-gray-600 text-lg pt-10"></i><span class="px-2 text-gray-600 font-medium text-base">{{$new['created_at']}}</span>
        <p class="text-base leading-relaxed text-justify overflow-hidden text-ellipsis line-clamp-3 pt-1 mb-3">
            {{$new['description']}}
        </p>
        <button class="px-16 py-2 text-white bg-blue-600 hover:text-blue-600 hover:bg-white rounded-tr-3xl rounded-bl-3xl text-lg font-semibold hover:duration-500 ease-in-out">Xem thêm</button>
    </div>
</div>
