<div class="w-full h-full">
    <div class="w-full h-full flex flex-col bg-[#151515] text-lg rounded-2xl">
        <div class="w-full p-4 border-b border-[#2A2A2A]">
            <div class="flex flex-row w-full h-full items-center">
                <div class="w-24 h-full flex justify-center items-center">
                    <a href="{{route('admin.homepage')}}" >
                        <button class="bg-[#262626] rounded-full w-12 h-12 text-center text-[#454545] hover:text-main-color">
                            <i class="fa-solid fa-house text-2xl "></i>
                        </button>
                    </a>
                </div>
                <div class="w-full h-full ml-4">
                    <h3 class="text-2xl font-bold text-main-color">Shinex</h3>
                    <p class="text-white text-sm border-t mt-1 pt-0.5 border-gray-100 text-right">The next shine to you</p>
                </div>
            </div>
        </div>

        <div class="w-full h-full py-4 mt-12">
            <a href="{{route('admin.product.index')}}">
                <div class="w-full p-4 border-l-4 border-[#151515] hover:bg-[#262626] hover:border-main-color">
                    <div class="w-full flex flex-row gap-2 items-center text-white">
                        <div class="w-12 flex justify-center items-center">
                            <i class="fa-solid fa-cube text-xl"></i>
                        </div>
                        <div class="w-full">
                            <p>Quản lý sản phẩm</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('admin.file-manager')}}">
                <div class="w-full p-4 border-l-4 border-[#151515] hover:bg-[#262626] hover:border-main-color">
                    <div class="w-full flex flex-row gap-2 items-center text-white">
                        <div class="w-12 flex justify-center items-center">
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="w-full">
                            <p class="">Quản lý hình ảnh</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('admin.homepage')}}">
                <div class="w-full p-4 border-l-4 border-[#151515] hover:bg-[#262626] hover:border-main-color">
                    <div class="w-full flex flex-row gap-2 items-center text-white">
                        <div class="w-12 flex justify-center items-center">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <div class="w-full">
                            <p class="">Quản lý cấu hình</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
