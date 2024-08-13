@extends('layouts.newLayout')
@section('title')
    Trang chủ
@endsection

@section('content')
    <div>
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
    </div>



    <div class="pt-28 text-center">
        <h1 class="text-3xl font-semibold text-blue-800 pb-3">Chăm sóc da hiệu quả</h1>
        <div class="flex justify-center">
            <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
        </div>
        <p class="text-xl text-gray-500 pt-8 py-2">Trong thời đại chú tronng tính hiệu quả, hiệu quả mang lại là yếu tố quan trọng nhất</p>
        <p class="text-xl text-gray-500 py-2">Các cách chăm sóc da mà không giải quyết được vấn đề về da đều vô nghĩa</p>
        <p class="text-xl text-gray-500 py-2">Với Shinex, thay đổi làn da một cách hiệu quả là thay đổi chất lượng cuộc sống trọn vẹn và đầy ý nghĩa.</p>
    </div>


    <div class="px-10 flex my-10 py-10">
        <div class="w-[35%] flex flex-col items-center justify-center">
            <h1 class="text-[26px] font-semibold text-blue-800 pb-8 text-center px-28">Việc đầu tiên là giải quyết các vấn đề thực sự về da</h1>
            <div>
                <img class="w-80" src="{{asset('/images/background/section1.png')}}" alt="">
            </div>
        </div>
        <div class="w-[65%] flex flex-col gap-10">
            <div class="flex gap-10">
                <img class="w-52 h-52 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/nav/7.jpg')}}" alt="">
                <p class="text-lg text-gray-500 flex items-center">Công nghệ điều trị theo hướng tác động của SHINEX
                    dựa trên nhiều vấn đề về da, cung cấp các giải pháp
                    và sản phẩm dưỡng da để giải quyết chính xác và
                    hiệu quả các vấn đề về da như: Điều trị tàn nhang,
                    đốm đồi mồi, nám da, ban xanh, sạm da do nhiễm
                    chì, bớt sắc tố Ota, mụn cóc, u ống tuyến mồ hôi, và
                    bớt bẩm sinh.
                </p>
            </div>
            <div class="flex gap-10">
                <img class="w-52 h-52 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/nav/4.1.jpg')}}" alt="">
                <p class="text-lg text-gray-500 flex items-center">
                    Thay đổi hoàn toàn làn da vàng, đen, sần sùi, nếp
                    nhăn, bọng mắt, quầng mắt, vết chân chim, mụn
                    trứng cá ở cả thanh thiếu niên và người lớn, cũng
                    như các nguyên nhân khác gây ra sự thay đổi màu
                    da, tái tạo vết sẹo lõm, và làm phẳng sẹo lồi.
                    Giúp làn da trở nên trắng hồng, mịn màng và đầy sức
                    sống.
                </p>
            </div>
            <div class="flex gap-10">
                <img class="w-52 h-52 rounded-tr-[50px] rounded-bl-[50px]" src="{{asset('/images/nav/8.jpg')}}" alt="">
                <p class="text-lg text-gray-500 flex items-center">
                    Thay đổi hoàn toàn làn da vàng, đen, sần sùi, nếp
                    nhăn, bọng mắt, quầng mắt, vết chân chim, mụn
                    trứng cá ở cả thanh thiếu niên và người lớn, cũng
                    như các nguyên nhân khác gây ra sự thay đổi màu
                    da, tái tạo vết sẹo lõm, và làm phẳng sẹo lồi.
                    Giúp làn da trở nên trắng hồng, mịn màng và đầy sức
                    sống.
                </p>
            </div>
        </div>
    </div>


    <div class="text-center px-32 py-10">
        <h1 class="text-3xl font-semibold text-blue-800 pb-3 text-center px-28">Hợp tác quốc tế với nhiều nhà cung cấp nguyên liệu hàng đầu trong và ngoài nước</h1>
        <div class="flex justify-center">
            <img src="{{asset('/images/logo/symbolsection.webp')}}" alt="">
        </div>
        <div class="flex justify-center py-10"><img class="w-[1000px]" src="{{asset('/images/brand/copo.jpg')}}" alt=""></div>
        <div class="flex justify-between gap-28">
            <div class="flex flex-col justify-center items-center gap-5">
                <img class="w-48 " src="{{asset('/images/logo/quality')}}" alt="">
                <p class="text-base text-gray-500">Các sản phẩm SHINEX được nhập khẩu từ nước ngoài, đảm bảo chất lượng từ nguồn giúp các hoạt chất của chúng có tác động tốt hơn trên da.</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-5">
                <img class="w-48" src="{{asset('/images/logo/nature.png')}}" alt="">
                <p class="text-base text-gray-500">Với thành phần tự nhiên, chiết xuất khoa học và công nghệ, loại bỏ các chất kích ứng gây hại cho da. Với nhà máy PIC/SGMP hàng đầu trong ngành và nhà xưởng vô trùng, quá trình sản xuất tuân thủ nghiêm ngặt các tiêu chuẩn dược phẩm quốc tế trước khi được cơ quan bên thứ ba kiểm nghiệm trên thị trường đảm bảo an toàn cao nhất.</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-5">
                <img class="w-48 pb-2 pt-3" src="{{asset('/images/logo/heal.png')}}" alt="">
                <p class="text-base text-gray-500">Tiêu chuẩn dược phẩm quốc tế, trước khi đưa ra thị trường được kiểm nghiệm bởi các cơ quan bên thứ ba, phù hợp với các nguyên tắc giám sát an toàn cao nhất.</p>
            </div>
        </div>
    </div>

    <div class="flex py-20">
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
@endsection

