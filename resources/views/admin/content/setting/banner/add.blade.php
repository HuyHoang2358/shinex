@extends('admin.layouts.app')
@section('title')
    Thêm Banner
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Thêm mới Banner
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <form method="POST" action="{{route('admin.setting.banner.store')}}">
                        @csrf
                        <div class="preview">
                            <div>
                                <label for="form-name" class="form-label">Tên Banner<span class="text-red-600">*</span></label>
                                <input id="form-name" type="text" class="form-control" placeholder="Nhập tên Banner" name="name" autofocus autocomplete="name" required>
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">Slug</label>
                                <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="slug-banner" name="slug" autocomplete="slug">
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">Image</label>
                                @include('admin.common.single-upload-button', ['input_name' => 'image', 'icons' => [] ])
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">url</label>
                                <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="chọn đường dẫn" name="url" autocomplete="slug">
                            </div>item

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">order</label>
                                <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="order" name="order" autocomplete="slug">
                            </div>

                            <div class="mt-3">
                                <label for="position_id" class="form-label">Position ID </label>
                                <select id="position_id" data-placeholder="Chọn vị trí tương ứng" class="tom-select w-full" name="position_id">
                                    @foreach($positions as $position)
                                        <option value="{{$position->id}}">{{$position->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">status</label>
                                <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="chọn trạng thái" name="status" autocomplete="slug">
                            </div>

                            <div class="text-right mt-5">
                                <a href="{{route('admin.setting.banner.index')}}" ><button type="button" class="btn btn-outline-secondary w-24 mr-1">Hủy</button></a>
                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
