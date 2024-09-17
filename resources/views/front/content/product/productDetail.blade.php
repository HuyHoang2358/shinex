@extends('layouts.newLayout')

@section('title')
    {{$product->name}}
@endsection

@section('seo')
    <meta name="title" content="{{$product->name}} | Shinex">
    <meta name="keywords" content="{{$product->name}}, Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="description" content="{{$product->description}}">

    <meta name="og:title" content="{{$product->name}} | Shinex">
    <meta name="og:keywords" content="{{$product->name}}, Shinex, mỹ phẩm, kem bôi, kem dưỡng da, kem làm trắng da, mỹ phẩm chất lượng cao, chăm sóc da, phục hồi da, chăm sóc sắc đẹp, mỹ phẩm làm đẹp">
    <meta name="og:description" content="{{$product->description}}">
@endsection

@section('banner')
    <div class="pt-12 bg-gray-100">
        <div class="container mx-auto px-2 xl:px-36 text-lg">
            @include('partial.component_Breadcrumb', ["routeName" => 'product.detail', "breadcrumb" => (object)['name' => $product->name, 'slug' => $product->slug] ])
        </div>
    </div>
@endsection
@section('content')
    <div class="container mx-auto px-2 xl:px-36 text-lg">
        <div class="w-full py-8 md:py-12">
            <!-- Main Information of Product -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-24 mt-4 px-24">
                <div class="col-span-1 md:col-span-2">
                    <div>
                        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 border border-gray-300">
                                <!-- Item 1 -->
                                @foreach($product->images as $image)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                        <img src="{{asset($image)}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider indicators -->
                            <div class="grid grid-cols-4 gap-3 mt-6">
                                @foreach($product->images as $image)
                                    <button type="button" aria-current="true" aria-label="Slide {{$loop->index}}" data-carousel-slide-to="{{$loop->index}}"
                                            class="shadow border border-gray-300 rounded-lg hover:border-blue-500">
                                        <img src="{{asset($image)}}" class="w-full  h-full rounded-lg " alt="product-image">
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 text-base md:text-lg">
                    <h1 class="font-medium text-2xl md:text-3xl">{{$product->name}}</h1>
                    <h2 class="font-semibold text-gray-400 border-b-[1px] border-gray-300 border-dashed pb-5">{{$product->title}}</h2>
                    <ul class="list-disc pl-5 pt-5">
                        @foreach($product->numbers as $number)
                            <li class="text-base opacity-85">{{$number->title}}</li>
                        @endforeach
                    </ul>
                    <div class="text-base py-5">
                        <div class="border-b-[1px] border-gray-300 border-dashed pb-5">
                            <h1 class="font-medium text-lg">Thích hợp với</h1>
                            <p class="opacity-85 mt-4">Mọi loại da, cơ thể</p>
                        </div>
                        <div class="pt-5 grid-cols-2 grid gap-5">
                            <button class="col-span-1 border-gray-400 border-2 rounded-lg py-2 text-md font-medium text-blue-600 hover:bg-blue-500 hover:border-blue-500 hover:text-white">Thêm Vào Giỏ Hàng</button>
                            <button class="col-span-1 border-blue-500 border-2 rounded-lg py-2 text-md font-medium text-white bg-blue-500 hover:text-blue-500 hover:bg-white hover:border-gray-400">Mua Ngay</button>
                        </div>
                    </div>
                    <div class="font-medium flex justify-between ">
                        <div class="flex gap-4 items-center">
                            <p class="text-base text-gray-600">Chia sẻ</p>
                            <a href="#"><i class="fa-brands fa-facebook text-xl md:text-2xl text-blue-600"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram text-xl md:text-2xl textoran"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter text-xl md:text-2xl"></i></a>
                        </div>
                        <div>
                            <a href="#" class="text-xl md:text-2xl text-yellow-300"><i class="fa-solid fa-ranking-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product detail -->
            <div class="border-b border-gray-300 dark:border-gray-700 mt-4 md:mt-16">
                <ul class="flex justify-center -mb-px text-sm md:text-lg font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-opacity-0 hover:border-b-2 hover:text-gray-600 hover:border-gray-400 uppercase" id="description-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Mô tả sản phẩm</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-opacity-0 hover:border-b-2 hover:text-gray-600 hover:border-gray-400 uppercase" id="component-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Thành phần chính</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-opacity-0 hover:border-b-2 hover:text-gray-600 hover:border-gray-400 uppercase" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Công dụng</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 border-opacity-0 hover:border-b-2 hover:text-gray-600 hover:border-gray-400 uppercase" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Cách dùng</button>
                    </li>
                </ul>
            </div>

            <div id="default-tab-content">
                <div class="hidden py-12 rounded-lg" id="profile" role="tabpanel" aria-labelledby="description-tab">
                    <!-- description -->
                    <div class="md:px-10 flex my-4 md:my-10">
                        <div class="w-[35%] flex flex-col items-center justify-center hidden md:block">
                            <h4 class="text-lg font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề thực sự về da</h4>
                            <div>
                                <img class="w-64" src="{{asset('/images/background/section1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="w-full md:w-[65%] flex flex-col  gap-4 md:gap-10">
                            @foreach($product->numbers as $number)
                                <div class="flex gap-4 md:gap-10">
                                    <img class="w-28 h-28 md:w-32 md:h-32 rounded-tr-[30px] rounded-bl-[30px] md:rounded-tr-[50px] md:rounded-bl-[50px]" src="{{asset($number->image)}}" alt="">
                                    <div class="text-base md:text-lg">
                                        <h4 class="font-semibold">{{$number->title}}</h4>
                                        <p class="text-sm md:text-base text-gray-500 flex items-center">{{$number->content}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="hidden py-12 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="component-tab">
                    <div class="flex justify-center gap-16 items-center">
                        @foreach($product->components as $component)
                            <div>
                                <div class="w-48 h-48 rounded-full border-2 border-blue-300">
                                    <img src="{{asset($component->image)}}" alt="{{Str::slug($component->name)}}" class="w-full h-full rounded-full">
                                </div>
                                <h5 class="text-center mt-2 font-semibold">
                                    {{$component->name}}
                                </h5>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-gray-100 mt-8 p-8">
                        <ul>
                            @foreach($product->components as $component)
                                <li>
                                    <div class=" mt-2">
                                        <h5 class="font-medium">{{$component->name}}</h5>
                                        <p class="pl-12">{{$component->title}}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>


                    </div>
                </div>

                <div class="hidden py-12 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <!-- assign -->
                    <div class="my-4 md:px-10 md:my-10 flex items-start">
                        <div class="hidden md:block w-[35%] flex flex-col items-center justify-center">
                            <h4 class="text-lg font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề thực sự về da</h4>
                            <div>
                                <img class="w-64" src="{{asset('/images/background/section1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="w-full md:w-[65%] flex flex-col gap-4 md:gap-10">
                            @foreach($product->assigns as $assign)
                                <div class="flex gap-10">
                                    <img class="w-28 h-28 md:w-32 md:h-32 rounded-tr-[30px] rounded-bl-[30px] md:rounded-tr-[50px] md:rounded-bl-[50px]" src="{{asset($assign->image)}}" alt="">
                                    <div class="text-base md:text-lg">
                                        <h4 class="font-semibold">{{$assign->title}}</h4>
                                        <p class="text-sm md:text-base text-gray-500 flex items-center">{{$assign->content}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="hidden py-16 rounded-lg px-52" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <h4 class="text-base uppercase text-[#666] font-medium">Làm sạch da:</h4>
                    <ul class="text-base text-[#8c8c8c] font-medium list-disc pl-7 flex flex-col gap-2">
                        <li class="mt-4">Rửa mặt sạch bằng sữa rửa mặt phù hợp với loại da của bạn.</li>
                        <li>Sử dụng nước hoa hồng để cân bằng độ pH cho da.</li>
                    </ul>
                    <h4 class="text-base uppercase mt-4 text-[#666] font-medium">Thoa kem dưỡng ẩm:</h4>
                    <ul class="text-base text-[#8c8c8c] font-medium list-disc pl-7 flex flex-col gap-2">
                        <li class="mt-4">Lấy một lượng kem vừa đủ (khoảng một hạt đậu) lên đầu ngón tay.</li>
                        <li>Thoa đều kem lên mặt theo chiều từ dưới lên trên và từ trong ra ngoài.</li>
                        <li>Massage nhẹ nhàng trong khoảng 1-2 phút để kem thẩm thấu sâu vào da.</li>
                    </ul>
                    <h4 class="text-base uppercase mt-4 text-[#666] font-medium">Sử dụng hàng ngày:</h4>
                    <ul class="text-base text-[#8c8c8c] font-medium list-disc pl-7 flex flex-col gap-2">
                        <li class="mt-4">Sử dụng kem dưỡng ẩm hai lần mỗi ngày vào buổi sáng và buổi tối.</li>
                        <li>Để đạt hiệu quả tốt nhất, nên kết hợp với các sản phẩm dưỡng da khác trong cùng bộ chăm sóc da.</li>
                    </ul>
                </div>
            </div>

            <!-- Related Product -->
            <div class="border-t border-gray-200">
                <h3 class="text-lg md:text-xl font-semibold text-blue-800 leading-10 py-4"><span class="font-normal text-blue-600">SẢN PHẨM NÀO</span><br>
                    PHÙ HỢP VỚI BẠN?
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    @foreach($relatedProducts as $item)
                        <div>
                            <div class="hover:box-border">
                                <img class="hover:scale-110 ease-in-out duration-300 h-56 w-full rounded-lg" src="{{asset($item->images[0])}}" alt="">
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
@endsection
