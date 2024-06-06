@extends('layouts.adminLayout')
@section('subTitle')
    Quản lý sản phẩm
@endsection
@section('content')
    <!--First section-->
    <div class="flex justify-between">
        <div class="page-index capitalize text-2xl">
            <span class="font-bold">Quản lý sản phẩm</span>
        </div>
        <div class="flex gap-2">
            <div class="search">
                <div class="searchbar-wrapper border-gray-300 border-2 bg-slate-100 py-1 px-2 rounded-md">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <label>
                        <input class="bg-transparent focus:outline-none ml-1" type="text" placeholder="Tìm kiếm">
                    </label>
                </div>
            </div>
            <div class="filter-button ">
                <button class="flex justify-center items-center w-[100%] h-[100%] py-1 px-2 border-gray-300 border-2 rounded-md gap-1">
                    Filter
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>
            <div class="add-new-button">
                <button class="flex justify-center items-center w-[100%] h-[100%] py-1 px-2 text-white bg-main-color rounded-md gap-1" data-twe-toggle="modal" data-twe-target="#exampleModalVarying" data-twe-whatever="@mdo" data-twe-ripple-init data-twe-ripple-color="light">
                    Thêm sản phẩm
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div id="alert-3"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <!-- Product table-->
    <div class="w-full mt-4">
        <table class="table-auto w-full max-w-full">
            <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                <tr class="bg-slate-200">
                    <th  class="number-cell-size"> #</th>
                    <th> Hình ảnh</th>
                    <th> Tên sản phẩm</th>
                    <th> Slug</th>
                    <th> Miêu tả</th>
                    <th> Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b border-neutral-200 dark:border-white/10">
                        <td class="bg-blue-400 number-cell-size" >
                            {{ $products->perPage() * ($products->currentPage() - 1) + $loop->index +1 }}
                        </td>
                        <td>
                            <div class="flex justify-center items-center">
                                <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                                <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                                <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                                <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                            </div>
                        </td>
                        <td class="text-left align-middle whitespace-normal">
                            <p class="text-left align-top">
                                {{ $product->name }}
                            </p>
                        </td>
                        <td class="text-left align-middle whitespace-normal">
                            <p class="text-left align-top">
                                {{ $product->slug }}
                            </p>
                        </td>
                        <td class="text-left align-middle whitespace-normal">
                            <p class="text-left align-top max-w-[100%]">
                                {{ $product->description }}
                            </p>
                        </td>
                        <td class="whitespace-nowrap">
                            <div class="flex justify-center items-center gap-2">
                                <button class="button-hover edit-button" data-twe-toggle="modal"
                                        data-twe-target="#editModal" data-twe-ripple-init
                                        data-twe-ripple-color="light"
                                        data-values='{"id": "{{ $product->id }}", "name": "{{ $product->name }}", "image": "{{ $product->images }}", "description": "{{ $product->description }}", "content": "{{ $product->content }}" }'>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="button-hover delete-button" data-twe-toggle="modal"
                                        data-product-id="{{ $product->id }}"
                                        data-product-name="{{ $product->name }}" data-twe-target="#staticBackdrop"
                                        data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-end gap-9 pt-2">
        <button>
            <span class="font-bold">
                {{ $products->perPage() * ($products->currentPage() - 1) + 1 }} - {{ $products->perPage() * $products->currentPage() }}
            </span> của tổng số
            <strong>{{ $products->total() }}</strong>
        </button>
        {{ $products->links('vendor/pagination/tailwind') }}
    </div>

    @include('admin.content.product.delete')
    @include('admin.content.product.add')
    @include('admin.content.product.edit')

    <script>
        const modalBody = document.getElementById("modal-body");

        $(".delete-button").click(function() {

            var productID = $(this).data('productId');
            var productName = $(this).data('productName');

            modalBody.innerHTML = "Bạn có chắc muốn xóa sản phẩm " + productName + " ,id = " + productID;
            $("#delete-form").attr('action', '/admin/product/delete/' + productID);

        })

        $(".edit-button").click(function() {

            var productObject = $(this).data('values');
            console.log(productObject);
            $('#edit-name').val(productObject.name);

            $('#edit-thumbnail').val(productObject.image)
            var imgTag = '<img src="' + productObject.image +
                '" alt="Thumbnail Image" class="w-[5rem] h-[5rem]" />';
            $("#edit-holder").html(imgTag);

            $('#edit-description').val(productObject.description)
            $('#edit-content').val(productObject.content)

            $("#edit-product-form").attr('action', '/admin/product/edit/' + productObject.id);
        })
    </script>
@endsection
