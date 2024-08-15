@extends('layouts.newLayout')
@section('title')
    Trang chủ
@endsection

@section('content')
    <div class="container mx-auto xl:px-36 text-lg pt-16 md:pt-20">
        <div class="relative">
            <!-- banner -->
            <div class="h-[150px] md:h-[450px] w-full bg-red-200" >
                <img class="h-full w-full" src="{{asset('/images/banner/shinex-collection.jpg')}}" alt="shinex-collection">
            </div>

            <!-- main service -->
            <div class="bg-white absolute left-[50%] translate-x-[-50%] bottom-[-40px] flex items-center
            md:px-24 border-[1px] border-gray-300 gap-2 md:gap-16 text-sm md:text-base hidden md:block"
            >
                @php
                    $services = [
                        (object)[
                            "title" => "FREESHIP",
                            "description" => "Miễn phí vận chuyển",
                            "image" => "/images/logo/policy1.png",
                        ],
                        (object)[
                            "title" => "HOÀN TRẢ",
                            "description" => "Trong 30 ngày miễn phí",
                            "image" => "/images/logo/policy2.png",
                        ],
                        (object)[
                            "title" => "THANH TOÁN",
                            "description" => "Hỗ trợ nhiều hình thức",
                            "image" => "/images/logo/policy3.png",
                        ],
                        (object)[
                            "title" => "HỖ TRỢ",
                            "description" => "24/7",
                            "image" => "/images/logo/policy4.png",
                        ],
                    ]

                @endphp
                <div class="flex justify-center items-center gap-2 md:gap-8">
                    @foreach($services as $service)
                        <div class="flex justify-center items-center gap-2 py-2">
                            <div class="w-4 md:w-6">
                                <img class="w-full"  src="{{asset($service->image)}}" alt="">
                            </div>
                            <div>
                                <h5 class="font-bold md:w-36">{{$service->title}}</h5>
                                <p class="text-xs -tracking-tighter">{{$service->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="px-2 py-8 md:py-20">
            <div class="text-center">
                <h2 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3">Bộ sưu tập các sản phẩm</h2>
                <div class="flex justify-center">
                    <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="shinex-symbol-section">
                </div>
                <div class="text-blue-400 text-base md:text-lg font-semibold">
                    <p class="py-1">"Trong thời đại chú trọng tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất"</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <div class="col-span-1 flex flex-col gap-4">
                    <div class="flex justify-end gap-4 md:gap-10">
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">
                                <h4 class="font-semibold text-gray-600">Whitening Remove Freckle Cream</h4>
                            </a>
                            <p class="text-sm md:text-base">Kem dưỡng sáng da mờ thâm nám tàn nhang</p>
                        </div>
                        <a href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/whitening-remove-freckle-cream/2.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="flex justify-end gap-4 md:gap-10">
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                                <h4 class="font-semibold text-gray-600">Soothing and restoring essential oils</h4>
                            </a>
                            <p class="text-sm md:text-base">Tinh dầu làm dịu và phục hồi da</p>
                        </div>
                        <a href="{{route('product.detail', 'soothing-and-restoring-essential-oils')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/soothing-and-restoring-essential-oils/2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end gap-4 md:gap-10">
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">
                                <h4 class="font-semibold text-gray-600">Polypeptide Heal damaged skin Ice crystal</h4>
                            </a>
                            <p class="text-sm md:text-base">Làm dịu và phục hồi da</p>
                        </div>
                        <a href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/polypeptide-heal-damaged-skin-ice-crystal/9.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col gap-4">
                    <div class="flex justify-start gap-4 md:gap-10">
                        <a href="{{route('product.detail', 'repair-anti-aging-cream')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/repair-anti-aging-cream/2.jpg')}}" alt="">
                        </a>
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'repair-anti-aging-cream')}}">
                                <h4 class="font-semibold text-gray-600">Repair Anti-Aging Cream</h4>
                            </a>
                            <p class="text-sm md:text-base">Kem dưỡng phục hồi chống lão hoá</p>
                        </div>

                    </div>

                    <div class="flex justify-start gap-4 md:gap-10">
                        <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/soothing-balance-repair-cream/6.jpg')}}" alt="">
                        </a>
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                                <h4 class="font-semibold text-gray-600">Soothing Balance Repair Cream</h4>
                            </a>
                            <p class="text-sm md:text-base">Kem phục hồi cân bằng làm dịu da</p>
                        </div>
                    </div>
                    <div class="flex justify-start gap-4 md:gap-10">
                        <a href="{{route('product.detail', 'repairing-active-white-serum')}}">
                            <img class="w-36 h-36 md:w-40 md:h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/repairing-active-white-serum/4.jpg')}}" alt="">
                        </a>
                        <div class="text-base md:text-lg text-gray-500">
                            <a href="{{route('product.detail', 'repairing-active-white-serum')}}">
                                <h4 class="font-semibold text-gray-600">Repairing active white serum</h4>
                            </a>
                            <p class="text-sm md:text-base">Tinh chất phục hồi Active White</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="px-2 py-8 md:py-20 ">
            <div class="text-center">
                <h2 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3">Chăm sóc da hiệu quả</h2>
                <div class="flex justify-center">
                    <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                </div>
                <div class="text-blue-400 text-base md:text-lg font-semibold">
                    <p class="py-1">"Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa"</p>
                </div>
            </div>

            <div class="my-4 md:px-10 md:my-10 flex items-start">
                <div class="w-[35%] flex flex-col items-center justify-center hidden md:block">
                    <h3 class="text-2xl font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề <br> thực sự về da</h3>
                    <div>
                        <img class="w-72" src="{{asset('/images/background/section1.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-[65%] flex flex-col gap-4 md:gap-10">
                    @php
                        $main_functions = [
                            (object)[
                                "title" => "Công nghệ điều trị theo hướng tác động",
                                "description" => "Công nghệ điều trị theo hướng tác động của SHINEX dựa trên nhiều vấn đề về da, cung cấp các giải pháp
                                                và sản phẩm dưỡng da để giải quyết chính xác và hiệu quả các vấn đề về da như: Điều trị tàn nhang,
                                                đốm đồi mồi, nám da, ban xanh, sạm da do nhiễm chì, bớt sắc tố Ota, mụn cóc, u ống tuyến mồ hôi, và bớt bẩm sinh.",
                                "image" => "/images/products/polypeptide-heal-damaged-skin-ice-crystal/9.jpg",
                            ],
                            (object)[
                                "title" => "Giúp làn da trở nên trắng hồng, mịn màng và đầy sức sống",
                                "description" => "Thay đổi hoàn toàn làn da vàng, đen, sần sùi, nếp
                                                nhăn, bọng mắt, quầng mắt, vết chân chim, mụn
                                                trứng cá ở cả thanh thiếu niên và người lớn, cũng
                                                như các nguyên nhân khác gây ra sự thay đổi màu
                                                da, tái tạo vết sẹo lõm, và làm phẳng sẹo lồi.
                                                Giúp làn da trở nên trắng hồng, mịn màng và đầy sức
                                                sống.",
                                "image" => "/images/products/soothing-balance-repair-cream/6.jpg",
                            ],
                            (object)[
                                "title" => "Nuôi dưỡng, làm trắng từ sâu bên trong",
                                "description" => "Dưỡng chất thấm sâu, cải thiện sắc tố da từ bên trong. Tăng cường nuôi dưỡng, mang lại làn da trắng sáng tự nhiên.
                                                Làm mờ các đốm nâu trên da, tấn công chuyên sâu các đốm nâu trên da. Giảm sắc tố melanin và giúp làn da trắng sáng.
                                                Ngăn ngừa các sắc tố không mong muốn. Giảm các đốm tàn nhang và ngăn ngừa tái phát.",
                                "image" => "/images/products/polypeptide-heal-damaged-skin-ice-crystal/9.jpg",
                            ],
]
                    @endphp
                    @foreach($main_functions as $function)
                        <div class="flex gap-4 md:gap-10">
                            <img class="w-28 h-36 md:w-40 md:h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset($function->image)}}" alt="">
                            <div class="text-base md:text-lg text-gray-500">
                                <h4 class="font-semibold text-gray-600">{{$function->title}}</h4>
                                <p class="text-sm md:text-base">{{$function->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="px-2 py-8 md:py-20">
            <div class="text-center">
                <h2 class="text-xl md:text-3xl font-semibold text-blue-800 pb-3 text-center">Hợp tác quốc tế với nhiều nhà cung cấp nguyên liệu hàng đầu</h2>
                <div class="flex justify-center">
                    <img class="h-4 md:h-6" src="{{asset('/images/logo/symbolsection.webp')}}" alt="shinex-symbol-section" >
                </div>
                <div class="text-blue-400 text-base md:text-l font-semibold">
                    <p class="py-1"> Tuân thủ triết lý sản xuất: “đảm bảo chất lượng từ nguồn,” hầu hết các thành phần được nhập khẩu từ nước ngoài</p>
                </div>
            </div>

            <div class="flex justify-center py-4 md:py-10">
                <img class="w-full md:w-1/2" src="{{asset('/images/brand/copo.jpg')}}" alt="shinex-hop-tac-quoc-te">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-4 md:gap-8">
                <div class="flex gap-4 md:gap-8">
                    <img class="w-28 h-28 md:w-32 md:h-32 rounded-tr-[50px] rounded-tl-[50px] rounded-bl-[50px] border border-gray-400" src="{{asset('/images/logo/nature.png')}}" alt="">
                    <div class="text-base md:text-lg text-gray-500">
                        <h4 class="font-semibold text-gray-600">Sử dụng các thành phần có nguồn gốc tự nhiên</h4>
                        <p class="text-sm md:text-base">Sử dụng các thành phần tự nhiên, chiết xuất khoa học từ các loại dược liệu quý hiếm, loại bỏ các chất kích ứng gây hại cho da.
                            Sản xuất vô trùng trong các nhà máy, phân xưởng PIC/SGMP hàng đầu.</p>
                    </div>
                </div>

                <div class="flex gap-4 md:gap-8">
                    <img class="w-28 h-28 md:w-32 md:h-32 rounded-tr-[50px] rounded-tl-[50px] rounded-bl-[50px] border border-gray-400" src="{{asset('/images/logo/heal.png')}}" alt="">
                    <div class="text-base md:text-lg text-gray-500">
                        <h4 class="font-semibold text-gray-600">Áp dụng nghiêm ngặt các tiêu chuẩn quốc tế</h4>
                        <p class="text-sm md:text-base"> Tiêu chuẩn dược phẩm quốc tế, trước khi đưa ra thị trường được kiểm nghiệm
                            bởi các cơ quan bên thứ ba, phù hợp với các nguyên tắc giám sát an toàn cao nhất.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 3 -->
        <div class="px-2 py-8 md:py-10 grid grid-cols-1 md:grid-cols-5 gap-4 items-start">
            <div class="col-span 1 md:col-span-2 pl-8 md:pl-20 pr-10 flex flex-col justify-between">
                <div class="w-full pl-4 md:pl-12">
                    <p class="font-semibold text-xl md:text-2xl text-white bg-blue-600 px-4 md:px-9 py-2 md:py-5 w-fit font-sans rounded-tr-3xl rounded-bl-3xl self-start">28<br>Ngày</p>
                    <h3 class="text-lg md:text-xl font-semibold text-blue-800 tracking-widest text-end mt-2">Chu kỳ dưỡng da tái tạo lại sức sống mới</h3>
                </div>
                <div class="text-start font-normal text-base md:text-lg mt-6 text-gray-600 flex flex-col gap-4 pl-12">
                    <p>Bí quyết "điều chỉnh từ bên trong và duy trì vẻ bên ngoài" làn da</p>
                    <p>Phát triển các mô dưới da</p>
                    <p>Sử dụng thưởng xuyên, có thể thấy sự thay đổi của làn da</p>
                </div>
            </div>

            @php
                $steps = [
                    (object)[
                        "number" => "1",
                        "title" => "Sức mạnh làm trắng",
                        "contents" => [
                            "Làm giảm sắc tố melanin",
                            "Hiệu quả làm trắng được cải thiện",
                        ],
                    ],
                    (object)[
                        "number" => "2",
                        "title" => "Sức mạnh tái tạo",
                        "contents" => [
                            "Giảm tỷ lệ dị ứng",
                            "Các vết đỏ, sưng và ngứa biến mất",
                            "Tăng cường sức đề kháng cho da",
                        ],
                    ],
                    (object)[
                        "number" => "3",
                        "title" => "Sức mạnh dưỡng ẩm",
                        "contents" => [
                            "Tăng độ ẩm cho da",
                        ],
                    ],
                ]
            @endphp

            <div class="col-span 1 md:col-span-3 gap-5">
                <div class="grid grid-cols-2">
                    <div class="col-span-1 border-blue-500">
                        <img class="w-full h-full" src="{{asset('/images/background/chu-ky-duong-da.png')}}" alt="chu-ky-duong-da-28-ngay" />
                    </div>
                    <div class="col-span-1 ml-[-25px] md:mt-16">
                        @foreach($steps as $step)
                            <div class="my-2 md:my-16 flex justify-start items-center gap-4">
                                <div class="relative">
                                    <button class="w-8 h-8 md:w-12 md:h-12 bg-blue-600 rotate-45 "></button>
                                    <button class="w-8 h-8 md:w-12 md:h-12 text-white font-bold absolute top-0 left-0">{{$step->number}}</button>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-base md:text-lg text-blue-800">{{$step->title}}</h4>
                                    <div class="text-gray-500 text-sm md:text-base">
                                        @foreach($step->contents as $content)
                                            <p>{{$content}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
