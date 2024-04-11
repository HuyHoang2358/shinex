@extends('layouts.adminLayout')

@section('product_index')
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

    <div class="flex flex-col overflow-x-auto">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:pl-6 lg:pl-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-start text-sm font-light text-surface dark:text-white">
                        <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr class="bg-slate-200">
                                <th scope="col" class="number-cell-size">#</th>
                                <th scope="col" class="number-cell-size">id</th>
                                <th scope="col" class="min-w-[5rem]">Hình ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Miêu tả</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Sửa lần cuối</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $firstOrdinalNumber = 0;
                                $lastOrdinalNumber = 0;
                            @endphp
                            @foreach ($products as $product)
                                @php
                                    $ordinalNumber =
                                        $products->perPage() * ($products->currentPage() - 1) + $loop->iteration;
                                    $firstOrdinalNumber = $products->perPage() * ($products->currentPage() - 1) + 1;
                                    $lastOrdinalNumber = $products->perPage() * $products->currentPage();
                                    if ($lastOrdinalNumber > $products->total()) {
                                        $lastOrdinalNumber = $products->total();
                                    }
                                @endphp
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap font-medium number-cell-size"> {{ $ordinalNumber++ }}</td>
                                    <td class="whitespace-nowrap number-cell-size">
                                        {{ $product->id }}
                                    </td>
                                    <td class="whitespace-nowrap ">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                                        </div>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-h-20">
                                            {{ $product->name }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 whitespace-normal overflow-y-auto text-cell-size">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->description }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto text-cell-size">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->content }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->created_at }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->updated_at }}
                                        </p>
                                    </td>
                                    <td class="whitespace-nowrap ">
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
            </div>
        </div>
    </div>

    <div class="flex justify-end gap-9 pt-2">
        <button>Số dòng trên trang: <strong>8</strong></button>
        <button><span class="font-bold">{{ $firstOrdinalNumber }} - {{ $lastOrdinalNumber }}</span> của tổng số
            <strong>{{ $num_of_records }}</strong></button>
        {{ $products->links('vendor/pagination/tailwind') }}
    </div>

    @include('admin.content.product.delete')
    @include('admin.content.product.add')
    @include('admin.content.product.edit')

    <script>
        var modalBody = document.getElementById("modal-body");

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
