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

@section('content')
    <div class="container mx-auto px-2 xl:px-36 text-lg">
        <div class="w-full py-16 md:py-20">
            <!-- BreadCrumb -->
            @include('partial.component_Breadcrumb', ["routeName" => 'product.detail', "breadcrumb" => (object)['name' => $product->name, 'slug' => $product->slug] ])

            <!-- Main Information of Product -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-16 mt-4">
                <div class="col-span-1 md:col-span-2">
                    <div class="w-full">
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
                            <div class="grid grid-cols-5 gap-2 mt-4">
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
                <div class="col-span-1 md:col-span-3 text-base md:text-lg">
                    <h3 class="font-semibold text-blue-400">Tắm & Dưỡng Thể - Tẩy Da Chết</h3>

                    <h1 class="font-medium text-2xl md:text-3xl my-2">{{$product->name}}</h1>
                    <h2 class="font-semibold text-gray-400">{{$product->title}}</h2>
                    <p class="text-base pt-3 pb-5 opacity-85">{{$product->description}}</p>

                    <div class="text-base py-5">
                        <div class="border-b-[1px] border-gray-300 pb-5">
                            <h1 class="font-medium text-lg">Thích hợp với</h1>
                            <p class="opacity-85 mt-4">Mọi loại da cơ thể</p>
                        </div>
                        <div class="pt-5">
                            <h1 class="font-medium text-lg">Thành phần chính</h1>
                            <div class="flex justify-start items-center gap-2 md:gap-4 mt-4">
                                @foreach($product->components as $component)
                                    <div class="w-28 h-28 rounded-lg shadow">
                                        <img src="{{asset($component->image)}}" alt="{{$component->name}}" class="w-full h-full rounded-lg">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="font-medium flex justify-between ">
                        <div class="flex gap-4 items-center">
                            <p class="text-base text-gray-600">Chia sẻ</p>
                            <a href="#"><i class="fa-brands fa-facebook text-xl md:text-2xl opacity-20 hover:opacity-100"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram text-xl md:text-2xl opacity-20 hover:opacity-100"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter text-xl md:text-2xl opacity-20 hover:opacity-100"></i></a>
                        </div>
                        <div>
                            <a href="#" class="text-xl md:text-2xl text-yellow-300"><i class="fa-solid fa-ranking-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product detail -->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700 mt-4 md:mt-16 bg-blue-100">
                <ul class="flex flex-wrap -mb-px text-sm md:text-lg font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
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
                    <div class="md:pt-4 text-center">
                        <h3 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3">Chăm sóc da hiệu quả</h3>
                        <div class="flex justify-center">
                            <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                        <div class="text-base md:text-lg font-italic font-semibold text-blue-400">
                            <p class="py-1">Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa.</p>
                            <p class="py-1 hidden md:block">Trong thời đại chú trong tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất</p>
                            <p class="py-1 hidden md:block">Với Shinex, thay đổi làn da một cách hiệu quả là thay đổi chất lượng cuộc sống trọn vẹn và đầy ý nghĩa.</p>
                        </div>
                    </div>
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
                <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="pt-4 text-center">
                        <h3 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3">Thành phần chính</h3>
                        <div class="flex justify-center">
                            <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                        <div class="text-base md:text-lg font-italic font-semibold text-blue-400">
                            <p class="py-1">Ưu tiên các thành phần thảo dược, không gây kích ứng da, mang lại hiệu quả trong điều trị </p>
                            <p class="py-1 hidden md:block">Với Shinex, thay đổi làn da một cách hiệu quả là thay đổi chất lượng cuộc sống trọn vẹn và đầy ý nghĩa.</p>
                        </div>
                    </div>

                    <div class="md:px-10 flex my-4 md:my-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach($product->components as $component)
                                <div class="flex gap-4 md:gap-10">
                                    <img class="w-28 h-28 md:w-36 md:h-36 rounded-tr-[30px] rounded-bl-[30px] md:rounded-tr-[50px] md:rounded-bl-[50px] border border-red-50" src="{{asset($component->image)}}" alt="">
                                    <div class="text-base md:text-lg">
                                        <h4 class="font-semibold">{{$component->name}}</h4>
                                        <p class="text-sm md:text-base text-gray-500 flex items-center">{{$component->title}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>

                <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <!-- assign -->
                    <div class="pt-4 text-center">
                        <h3 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3">Chỉ định</h3>
                        <div class="flex justify-center">
                            <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                        </div>
                    </div>
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
                <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <h4 class="text-lg font-semibold">Cách dùng</h4>
                    <p class="text-base text-gray-500 dark:text-gray-400 mt-4">
                        Thoa đều sản phẩm sau khi làm sạch da vào buổi tối, tránh vùng mắt, mát xa đến khi sản phẩm được thẩm thấu hoàn toàn.
                    </p>
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
