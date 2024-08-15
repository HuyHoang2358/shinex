@extends('layouts.newLayout')
@section('title')
    Trang chủ
@endsection

@section('content')
    <div class="container mx-auto xl:px-36 text-lg">
        <div class="relative">
            <div class="h-[450px] w-full bg-red-200" >
                <img class="h-full w-full" src="{{asset('/images/nav/4.jpg')}}" alt="">
            </div>
            <div class="h-16 bg-white absolute left-[50%] translate-x-[-50%] bottom-[-40px] flex items-center  px-24 border-[1px] border-gray-300 gap-16">
                <div class="flex justify-center items-center gap-3">
                    <div class="w-12">
                        <img class="w-[80%]"  src="{{asset('/images/logo/policy1.png')}}" alt="">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold w-32">FREESHIP</h1>
                        <p class="text-xs -tracking-tighter">Miễn phí vận chuyển</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-3">
                    <div class="w-10">
                        <img class="w-[80%]"  src="{{asset('/images/logo/policy2.png')}}" alt="">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold w-36">HOÀN TRẢ</h1>
                        <p class="text-xs -tracking-tighter">Trong 30 ngày miễn phí</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-3">
                    <div class="w-12">
                        <img class="w-[80%]"  src="{{asset('/images/logo/policy3.png')}}" alt="">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold w-36">THANH TOÁN</h1>
                        <p class="text-xs -tracking-tighter">Hỗ trợ nhiều hình thức</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-3">
                    <div class="w-10">
                        <img class="w-[80%]"  src="{{asset('/images/logo/policy4.png')}}" alt="">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold w-20">HỖ TRỢ</h1>
                        <p class="text-xs -tracking-tighter">24/7</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 1 -->
        <div class="pt-20">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-blue-800 pb-3">Chăm sóc da hiệu quả</h2>
                <div class="flex justify-center">
                    <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                </div>
                <div class="text-blue-400 text-lg pt- font-semibold">
                    <p class="py-1">"Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa"</p>
                </div>
            </div>

            <div class="px-10  my-10 flex items-start">
                <div class="w-[35%] flex flex-col items-center justify-center">
                    <h3 class="text-2xl font-semibold text-blue-800 pb-8 text-center">Giải quyết các vấn đề <br> thực sự về da</h3>
                    <div>
                        <img class="w-72" src="{{asset('/images/background/section1.png')}}" alt="">
                    </div>

                </div>
                <div class="w-[65%] flex flex-col gap-10">
                    <div class="flex gap-10">
                        <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/polypeptide-heal-damaged-skin-ice-crystal/9.jpg')}}" alt="">
                        <div class="text-lg text-gray-500">
                            <h4 class="font-semibold text-gray-600">Công nghệ điều trị theo hướng tác động</h4>
                            <p class="text-base">Công nghệ điều trị theo hướng tác động của SHINEX
                                dựa trên nhiều vấn đề về da, cung cấp các giải pháp
                                và sản phẩm dưỡng da để giải quyết chính xác và
                                hiệu quả các vấn đề về da như: Điều trị tàn nhang,
                                đốm đồi mồi, nám da, ban xanh, sạm da do nhiễm
                                chì, bớt sắc tố Ota, mụn cóc, u ống tuyến mồ hôi, và
                                bớt bẩm sinh.</p>
                        </div>

                    </div>
                    <div class="flex gap-10">
                        <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/soothing-balance-repair-cream/6.jpg')}}" alt="">
                        <div class="text-lg text-gray-500">
                            <h4 class="font-semibold text-gray-600">Giúp làn da trở nên trắng hồng, mịn màng và đầy sức sống</h4>
                            <p class="text-base"> Thay đổi hoàn toàn làn da vàng, đen, sần sùi, nếp
                                nhăn, bọng mắt, quầng mắt, vết chân chim, mụn
                                trứng cá ở cả thanh thiếu niên và người lớn, cũng
                                như các nguyên nhân khác gây ra sự thay đổi màu
                                da, tái tạo vết sẹo lõm, và làm phẳng sẹo lồi.
                                Giúp làn da trở nên trắng hồng, mịn màng và đầy sức
                                sống.</p>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/repairing-active-white-serum/4.jpg')}}" alt="">
                        <div class="text-lg text-gray-500">
                            <h4 class="font-semibold text-gray-600">Nuôi dưỡng, làm trắng từ sâu bên trong</h4>
                            <p class="text-base"> Dưỡng chất thấm sâu, cải thiện sắc tố da từ bên trong. Tăng cường nuôi dưỡng, mang lại làn da trắng sáng tự nhiên.
                                Làm mờ các đốm nâu trên da, tấn công chuyên sâu các đốm nâu trên da. Giảm sắc tố melanin và giúp làn da trắng sáng. Ngăn ngừa các sắc tố không mong muốn. Giảm các đốm tàn nhang và ngăn ngừa tái phát.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="py-10">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-blue-800 pb-3 text-center">Hợp tác quốc tế với nhiều nhà cung cấp nguyên liệu hàng đầu</h2>
                <div class="flex justify-center">
                    <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="" >
                </div>
                <div class="text-blue-400 text-lg pt- font-semibold">
                    <p class="py-1"> Tuân thủ triết lý sản xuất: “đảm bảo chất
                        lượng từ nguồn,” hầu hết các thành
                        phần được nhập khẩu từ nước ngoài</p>
                </div>
            </div>

            <div class="flex justify-center py-10">
                <img class="w-1/2" src="{{asset('/images/brand/copo.jpg')}}" alt="">
            </div>

            <div class="grid grid-cols-2 items-start gap-8">
                <div class="flex gap-8">
                    <img class="w-32 h-32 rounded-tr-[50px] rounded-tl-[50px] rounded-bl-[50px] border border-gray-400" src="{{asset('/images/logo/nature.png')}}" alt="">
                    <div class="text-lg text-gray-500">
                        <h4 class="font-semibold text-gray-600">Sử dụng các thành phần có nguồn gốc tự nhiên</h4>
                        <p class="text-base">Sử dụng các thành phần tự nhiên, chiết xuất khoa học từ các loại dược liệu quý hiếm, loại bỏ các chất kích ứng gây hại cho da.
                            Sản xuất vô trùng trong các nhà máy, phân xưởng PIC/SGMP hàng đầu.</p>
                    </div>
                </div>

                <div class="flex gap-8">
                    <img class="w-32 h-32 rounded-tr-[50px] rounded-tl-[50px] rounded-bl-[50px] border border-gray-400" src="{{asset('/images/logo/heal.png')}}" alt="">
                    <div class="text-lg text-gray-500">
                        <h4 class="font-semibold text-gray-600">Áp dụng nghiêm ngặt các tiêu chuẩn quốc tế</h4>
                        <p class="text-base"> Tiêu chuẩn dược phẩm quốc tế, trước khi đưa ra thị trường được kiểm nghiệm
                            bởi các cơ quan bên thứ ba, phù hợp với các nguyên tắc giám sát an toàn cao nhất.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="py-20 flex bg-gray-200">
            <div class="w-[45%] pl-20 px-10 text-end flex flex-col justify-between">
                <div>
                    <p class="font-semibold text-2xl text-white bg-blue-600 mx-44 my-5 px-9 py-5 w-fit font-sans rounded-tr-3xl rounded-bl-3xl">28 <br>Ngày</p>
                    <h1 class="text-xl font-semibold text-blue-900 tracking-widest pl-20">Chu kỳ dưỡng da tái tạo lại sức sống mới</h1>
                </div>
                <div class="text-start font-medium text-[20px] text-gray-600 flex flex-col gap-7 px-12 mr-12">
                    <p>Bí quyết "điều chỉnh từ bên trong và duy trì vẻ bên ngoài" làn da</p>
                    <p>Phát triển các mô dưới da</p>
                    <p>Sử dụng thưởng xuyên, có thể thấy sự thay đổi của làn da</p>
                </div>
            </div>
            <div class="flex w-[55%] gap-5">
                <div class="relative">
                    <img class="w-96" src="{{asset('/images/background/section2.png')}}" alt="">
                    <span class="absolute text-2xl font-semibold text-white top-[75px] right-5">01</span>
                    <span class="absolute text-2xl font-semibold text-white top-[227px] right-5">02</span>
                    <span class="absolute text-2xl font-semibold text-white top-[376px] right-6">03</span>
                </div>
                <div class="flex flex-col">
                    <div class="py-[55px]">
                        <h1 class="font-semibold text-xl text-black">Sức mạnh làm trắng</h1>
                        <p class="text-sm text-gray-500 font-medium">Làm giảm sắc tố melanin</p>
                        <p class="text-sm text-gray-500 font-medium">Hiệu quả làm trắng được cải thiện</p>
                    </div>
                    <div class="pt-6">
                        <h1 class="font-semibold text-xl text-black">Sức mạnh làm trắng</h1>
                        <p class="text-sm text-gray-500 font-medium">Làm giảm sắc tố melanin</p>
                        <p class="text-sm text-gray-500 font-medium">Hiệu quả làm trắng được cải thiện</p>
                    </div>
                    <div class="pt-[85px]">
                        <h1 class="font-semibold text-xl text-black">Sức mạnh làm trắng</h1>
                        <p class="text-sm text-gray-500 font-medium">Làm giảm sắc tố melanin</p>
                        <p class="text-sm text-gray-500 font-medium">Hiệu quả làm trắng được cải thiện</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="py-20">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-blue-800 pb-3">Bộ sưu tập các sản phẩm</h2>
                <div class="flex justify-center">
                    <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
                </div>
                <div class="text-blue-400 text-lg pt- font-semibold">
                    <p class="py-1">"Trong thời đại chú trọng tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất"</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="flex flex-col gap-4">
                    <div class="flex justify-end gap-10">
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">
                                <h4 class="font-semibold text-gray-600">Whitening Remove Freckle Cream</h4>
                            </a>
                            <p class="text-base">Kem dưỡng sáng da mờ thâm nám tàn nhang</p>
                        </div>
                        <a href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">
                            <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/whitening-remove-freckle-cream/2.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="flex justify-end gap-10">
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                                <h4 class="font-semibold text-gray-600">Soothing and restoring essential oils</h4>
                            </a>
                            <p class="text-base">Tinh dầu làm dịu và phục hồi da</p>
                        </div>
                        <a href="{{route('product.detail', 'soothing-and-restoring-essential-oils')}}">
                            <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/soothing-and-restoring-essential-oils/2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end gap-10">
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">
                                <h4 class="font-semibold text-gray-600">Polypeptide Heal damaged skin Ice crystal</h4>
                            </a>
                            <p class="text-base">Làm dịu và phục hồi da</p>
                        </div>
                        <a href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">
                            <img class="w-40 h-40 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/products/polypeptide-heal-damaged-skin-ice-crystal/9.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex justify-start gap-10">
                        <a href="{{route('product.detail', 'repair-anti-aging-cream')}}">
                        <img class="w-40 h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/repair-anti-aging-cream/2.jpg')}}" alt="">
                        </a>
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'repair-anti-aging-cream')}}">
                                <h4 class="font-semibold text-gray-600">Repair Anti-Aging Cream</h4>
                            </a>
                            <p class="text-base">Kem dưỡng phục hồi chống lão hoá</p>
                        </div>

                    </div>

                    <div class="flex justify-start gap-10">
                        <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                            <img class="w-40 h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/soothing-balance-repair-cream/6.jpg')}}" alt="">
                        </a>
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'soothing-balance-repair-cream')}}">
                                <h4 class="font-semibold text-gray-600">Soothing Balance Repair Cream</h4>
                            </a>
                            <p class="text-base">Kem phục hồi cân bằng làm dịu da</p>
                        </div>
                    </div>
                    <div class="flex justify-start gap-10">
                        <a href="{{route('product.detail', 'repairing-active-white-serum')}}">
                            <img class="w-40 h-40 rounded-tl-[50px] rounded-br-[50px]" src="{{asset('/images/products/repairing-active-white-serum/4.jpg')}}" alt="">
                        </a>
                        <div class="text-lg text-gray-500">
                            <a href="{{route('product.detail', 'repairing-active-white-serum')}}">
                                <h4 class="font-semibold text-gray-600">Repairing active white serum</h4>
                            </a>
                            <p class="text-base">Tinh chất phục hồi Active White</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
