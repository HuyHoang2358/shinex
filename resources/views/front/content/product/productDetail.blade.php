@extends('layouts.newLayout')
@section('title')
    {{$product->name}}
@endsection
@section('content')
    <div class="container mx-auto xl:px-36 text-lg">
        <div class="w-full py-16">
            <!-- BreadCrumb -->
            @include('partial.component_Breadcrumb', ["routeName" => 'product.detail', "breadcrumb" => (object)['name' => $product->name, 'slug' => $product->slug] ])

            <!-- Main Information of Product -->
            <div class="grid grid-cols-5 gap-16 mt-4">
                <div class="col-span-2">
                    <div class="w-full">
                        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 border border-gray-300">
                                <!-- Item 1 -->
                                @foreach($product->images as $image)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                        <img src="{{asset($image)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider indicators -->
                            <div class="grid grid-cols-5 gap-2 mt-4">
                                @foreach($product->images as $image)
                                    <button type="button" aria-current="true" aria-label="Slide {{$loop->index}}" data-carousel-slide-to="{{$loop->index}}"
                                            class="shadow border border-gray-300 rounded-lg hover:border-blue-500">
                                        <img src="{{asset($image)}}" class="w-full  rounded-lg " alt="product-image">
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
               {{-- <div class="col-span-1"></div>--}}
                <div class="col-span-3">
                    <h3 class="font-semibold text-lg text-blue-400">Tắm & Dưỡng Thể - Tẩy Da Chết</h3>

                    <h1 class="font-medium text-3xl my-2">{{$product->name}}</h1>
                    <h2 class="font-semibold text-xl text-gray-400">{{$product->title}}</h2>
                    <p class="text- base pt-3 pb-5 opacity-85">{{$product->description}}</p>

                   {{-- <div class="flex flex-wrap py-3 border-y-[1px] border-black text-xs">
                        <div class="flex items-center gap-2 pr-5">
                            <img class="w-20 h-20" src="{{asset('/images/logo/quality')}}" alt="">
                        </div>
                        <div class="flex items-center gap-2 pr-5">
                            <img class="w-24 h-20" src="{{asset('/images/logo/heal.png')}}" alt="">
                        </div>
                        <div class="flex items-center gap-2 pr-5">
                            <img class="w-24 h-20" src="{{asset('/images/logo/nature.png')}}" alt="">
                        </div>
                    </div>--}}

                    <div class="text-base py-5">
                        <div class="border-b-[1px] border-gray-300 pb-5">
                            <h1 class="font-medium">Thích hợp với</h1>
                            <p class="opacity-85 mt-4">Mọi loại da cơ thể</p>
                        </div>
                        <div class="pt-5">
                            <h1 class="font-medium">Thành phần chính</h1>
                            <div class="flex justify-start items-center gap-4 mt-4">
                                @foreach($product->components as $component)
                                    <div class="w-28 h-28 rounded-lg shadow">
                                        <img src="{{$component->image}}" alt="{{$component->name}}" class="w-full h-full rounded-lg">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="font-medium flex justify-between text-lg">
                        <div class="flex gap-4 items-center">
                            <p class="text-gray-600">Chia sẻ</p>
                            <a href="#"><i class="fa-brands fa-facebook text-2xl opacity-20 hover:opacity-100"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram text-2xl opacity-20 hover:opacity-100"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter text-2xl opacity-20 hover:opacity-100"></i></a>
                        </div>
                        <div>
                            <a href="#" class="text-2xl text-yellow-300"><i class="fa-solid fa-ranking-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product detail -->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700 mt-16">
                <ul class="flex flex-wrap -mb-px text-lg font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Mô tả sản phẩm</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Thành phần chính</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Chỉ định</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Cách dùng</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- description -->
                    <div class="pt-4 text-center">
                        <h3 class="text-3xl font-semibold text-blue-800 pb-3">Chăm sóc da hiệu quả</h3>
                        <div class="flex justify-center">
                            <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                        <div class="text-lg font-italic font-semibold text-blue-400">
                            <p class="py-1">Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa.</p>
                            <p class="py-1">Trong thời đại chú trong tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất</p>
                            <p class="py-1">Với Shinex, thay đổi làn da một cách hiệu quả là thay đổi chất lượng cuộc sống trọn vẹn và đầy ý nghĩa.</p>
                        </div>
                    </div>


                    <div class="px-10 flex my-10 py-4">
                        <div class="w-[35%] flex flex-col items-center justify-center">
                            <h4 class="text-lg font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề thực sự về da</h4>
                            <div>
                                <img class="w-64" src="{{asset('/images/background/section1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="w-[65%] flex flex-col gap-10">
                            @foreach($product->numbers as $number)
                                <div class="flex gap-10">
                                    <img class="w-32 h-32 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset($number->image)}}" alt="">
                                    <div class="text-lg">
                                        <h4 class="font-semibold">{{$number->title}}</h4>
                                        <p class="text-base text-gray-500 flex items-center">{{$number->content}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="pt-4 text-center">
                        <h3 class="text-3xl font-semibold text-blue-800 pb-3">Thành phần chính</h3>
                        <div class="flex justify-center">
                            <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                        <div class="text-lg font-italic font-semibold text-blue-400">
                            <p class="py-1">Ưu tiên các thành phần thảo dược, không gây kích ứng da, mang lại hiệu quả trong điều trị </p>
                            <p class="py-1">Với Shinex, thay đổi làn da một cách hiệu quả là thay đổi chất lượng cuộc sống trọn vẹn và đầy ý nghĩa.</p>
                        </div>
                    </div>


                    <div class="flex my-10 py-4">
                        <div class="grid grid-cols-2 gap-8">
                            @foreach($product->components as $component)
                                <div class="flex gap-10">
                                    <img class="w-36 h-36 rounded-tr-[50px] rounded-bl-[50px]  border border-red-50" src="{{asset($component->image)}}" alt="">
                                    <div class="text-lg">
                                        <h4 class="font-semibold">{{$component->name}}</h4>
                                        <p class="text-base text-gray-500 flex items-center">{{$component->title}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <!-- assign -->
                    <div class="pt-4 text-center">
                        <h3 class="text-3xl font-semibold text-blue-800 pb-3">Chỉ định</h3>
                        <div class="flex justify-center">
                            <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                    </div>
                    <div class="px-10 flex my-10 py-4">
                        <div class="w-[35%] flex flex-col items-center justify-center">
                            <h4 class="text-lg font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề thực sự về da</h4>
                            <div>
                                <img class="w-64" src="{{asset('/images/background/section1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="w-[65%] flex flex-col gap-10">
                            @foreach($product->assigns as $assign)
                                <div class="flex gap-10">
                                    <img class="w-32 h-32 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset($assign->image)}}" alt="">
                                    <div class="text-lg">
                                        <h4 class="font-semibold">{{$assign->title}}</h4>
                                        <p class="text-base text-gray-500 flex items-center">{{$assign->content}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <h4 class="text-lg font-semibold">Cách dùng</h4>
                    <p class="text-base text-gray-500 dark:text-gray-400 mt-4">
                        Thoa đều sản phẩm sau khi làm sạch da vào buổi tối, tránh vùng mắt, mát xa đến khi sản phẩm được thẩm thấu hoàn toàn.
                    </p>
                </div>
            </div>

            <!-- Related Product -->
            <div class="border-t border-gray-200">
                <h3 class="text-xl font-semibold text-blue-800 leading-10 py-4"><span class="font-normal text-blue-600">SẢN PHẨM NÀO</span><br>
                    PHÙ HỢP VỚI BẠN?
                </h3>
                <div class="flex gap-8">
                    @foreach($relatedProducts as $item)
                        <div>
                            <div class="hover:box-border">
                                <img class="hover:scale-110 ease-in-out duration-300 h-56 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                            </div>
                            <div class="py-2">
                                <h4 class="font-semibold text-lg"><a href="{{route('product.detail', $item->slug)}}">{{$item->name}}</a></h4>
                                <h5 class="text-base"><a href="{{route('product.detail', $item->slug)}}">{{$item->title}}</a></h5>
                                <div class="mt-4">
                                    <a href="{{route('product.detail', $item->slug)}}" class="mt-24">
                                        <button class="w-full text-sm font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">XEM THÊM</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>

   {{-- <div class="flex px-20 gap-16 items-center">
        <div class="basis-1/2 h-[90%]">
            <img class="rounded-xl" src={{asset('/ImgProduct/3.jpg')}} alt="">
        </div>
        <div class="basis-1/2 text-black">
            <div class="flex">
                <h1 class="font-semibold text-lg text-blue-400">Tắm & Dưỡng Thể - Tẩy Da Chết</h1>
                <img src="" alt="">
            </div>
            <div class="pr-24">
                <div class="font-medium text-2xl py-3">
                    <h1>Repair Anti-Aging cream</h1>
                    <h1>Kem dưỡng phục hồi chống lão hóa</h1>
                </div>
                <span class="text-lg font-medium">125.000đ</span>
                <p class="text-md pt-3 pb-5">Hạt cà phê nguyên chất từ Đắk Lắk kết hợp với bơ ca cao Tiền Giang giúp làm sạch da chết cơ thể hiệu quả, làm đều màu da, khơi dậy năng lượng giúp da trở nên mềm mịn và rạng rỡ.</p>
                <div class="flex flex-wrap py-3 border-y-[1px] border-black text-xs">
                    <div class="flex items-center gap-2 pr-5">
                        <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                        <p>không sulfate</p>
                    </div><div class="flex items-center gap-2 pr-5">
                        <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                        <p>không sulfate</p>
                    </div>
                    <div class="flex items-center gap-2 pr-5">
                        <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                        <p>không sulfate</p>
                    </div>
                    <div class="flex items-center gap-2 pr-5">
                        <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                        <p>không sulfate</p>
                    </div>
                    <div class="flex items-center gap-2 pr-5">
                        <img src="{{asset('/images/logo/symbol/sultafe.svg')}}" alt="">
                        <p>không sulfate</p>
                    </div>
                </div>
                <div class="text-base py-5">
                    <div class="border-b-[1px] border-gray-300 pb-5">
                        <h1 class="font-medium">Thích hợp với</h1>
                        <p class="opacity-85">Mọi loại da cơ thể</p>
                    </div>
                    <div class="pt-5">
                        <h1 class="font-medium">Thành phần chính</h1>
                        <p class="opaci ty-85">Với hạt cà phê nguyên chất và Bơ ca cao</p>
                    </div>
                </div>
                <div class="flex gap-10 py-3">
                    <img class="w-20 h-20" src="{{asset('/images/logo/quality')}}" alt="">
                    <img class="w-24 h-20" src="{{asset('/images/logo/heal.png')}}" alt="">
                    <img class="w-24 h-20" src="{{asset('/images/logo/nature.png')}}" alt="">
                </div>
                <div class="bg-black text-white text-xl text-center py-5 rounded-md hover:opacity-70 duration-500 ease-in-out group/item my-5">
                    THÊM VÀO GIỎ - 385.000 Đ
                    <i class="fa-solid fa-bag-shopping pl-8 pr-2 group-hover/item:translate-x-3 duration-300 ease-in-out"></i>
                </div>
                <div class="font-medium flex justify-between text-lg">
                    <div class="flex gap-4 items-center">
                        <p>Chia sẻ</p>
                        <a href="#"><i class="fa-brands fa-facebook text-2xl opacity-20 hover:opacity-100"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram text-2xl opacity-20 hover:opacity-100"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter text-2xl opacity-20 hover:opacity-100"></i></a>
                    </div>
                    <div>
                        <a href="#"><p>Viết đáng giá</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    {{--Infor of Product--}}
{{--    <div class="flex gap-16 my-5 justify-center bg-blue-200 text-lg text-blue-700 font-medium">
        <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Mô tả sản phẩm</h1></a>
        <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Thành phần</h1></a>
        <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Chu trình chăm da</h1></a>
        <a href="#"><h1 class="py-3 mt-1 hover:scale-110 box-border">Đánh giá </h1></a>
    </div>

    <div class="flex gap-16 px-20 py-10 v   BN =Ư">
        <div class="basis-1/2">
            <h1 class="text-4xl bg-gradient-to-br from-blue-500 to-blue-900 inline-block text-transparent bg-clip-text">Tính năng - Đặc điểm</h1>
            <p class="text-sm py-5">Loại bỏ tình trạng ngứa ran, mẩn đỏ, khô, ngứa, rát da. Chăm sóc toàn diện cho làn da bị tổn thương.
                Phục hồi da sau các can thiệp phẫu thuật. Làm dịu da, giảm tình trạng đỏ sau khi tiếp xúc với ánh nắng
                mặt trời. Phục hồi da sau khi xăm hoặc có vết thương. Bổ sung keratin, làm dày da, cải thiện tình trạng da mỏng lộ
                mao mạch. Nuôi dưỡng và phục hồi mô dưới da.
            </p>
        </div>
        <div class="basis-1/2">
            <img src="{{asset('/ImgProduct/4.jpg')}}" alt="">
        </div>
    </div>

    <div class="px-20">
        <h1 class="text-4xl font-bold text-blue-800 py-12">Phương pháp chăm sóc da cơ bản</h1>
        <div class="grid grid-cols-2 gap-10">
            <div>
                <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">1</span>
                    WET SKIN
                </h1>
                <p class="text-lg text-center text-blue-700">Take a shower and wet your skin thoroughly</p>
            </div>
            <div>
                <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">2</span>
                    APPLY
                </h1>
                <p class="text-lg text-center text-blue-700">Apply the shower gel to your whole body, face & hair</p>
            </div>
            <div>
                <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">3</span>
                    MASSAGE
                </h1>
                <p class="text-lg text-center text-blue-700">Massage the shower gel into your skin</p>
            </div>
            <div>
                <h1 class="font-medium text-xl text-blue-700 flex justify-center items-end"><span class="pr-2 text-5xl font-bold text-blue-800">4</span>
                    RINSE
                </h1>
                <p class="text-lg text-center text-blue-700 justify-center">Rinse the residues off thoroughly before patting yourself dry</p>
            </div>
        </div>
    </div>


    <div class="px-32 py-10">
        <h1 class="text-2xl font-semibold text-black leading-10 py-9    "><span class="font-normal">SẢN PHẨM NÀO</span><br>
            PHÙ HỢP VỚI BẠN?
        </h1>
        <div class="flex gap-5 text-black">
            <div class="flex gap-3">
                <div class="basis-1/2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-lg"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 pt-10 pb-4">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300">KIỂM TRA</div>
                    </a>
                </div>
                <div class="basis-1/2 hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
            </div>
            <span class="flex items-center font-semibold text-2xl">OR</span>
            <div class="flex gap-3">
                <div class="basis-1/2 hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
                <div class="basis-1/2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-lg"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 pt-10 pb-4">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300">KIỂM TRA</div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="px-32">
        <h1 class="text-2xl font-semibold text-blue-800 leading-10 py-9"><span class="font-normal text-blue-600">SẢN PHẨM NÀO</span><br>
            PHÙ HỢP VỚI BẠN?
        </h1>
        <div class="flex gap-8">
            <div>
                <div class="hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
                <div class="py-2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-base"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                    </a>
                </div>
            </div>
            <div>
                <div class="hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
                <div class="py-2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-base"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                    </a>
                </div>
            </div>
            <div>
                <div class="hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
                <div class="py-2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-base"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                    </a>
                </div>
            </div>
            <div>
                <div class="hover:box-border">
                    <img class="hover:scale-110 ease-in-out duration-300 h-80 w-full rounded-lg" src="{{asset('/ImgProduct/9.jpg')}}" alt="">
                </div>
                <div class="py-2">
                    <h1 class="font-semibold text-lg"><a href="#">CICAPLAST</a></h1>
                    <h1 class="text-base"><a href="#">LEVRES</a></h1>
                    <p class="text-sm text-gray-400 py-3">Kem Dưỡng Môi Chăm Sóc, Giữ Ẩm Vùng Da / Môi Bị Kích Ứng</p>
                    <a href="#">
                        <div class="text-lg font-medium text-blue-600 border-[1px] border-blue-600 py-2 text-center hover:text-white hover:bg-blue-600 ease-in-out duration-300 rounded-tr-xl rounded-bl-xl">KIỂM TRA</div>
                    </a>
                </div>
            </div>
        </div>
    </div>--}}

@endsection
