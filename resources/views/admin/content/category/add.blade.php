@extends('admin.layouts.app')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Thêm mới danh mục
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <form method="POST" action="{{route('admin.category.add')}}">
                        @csrf
                        <div class="preview">
                            <div>
                                <label for="form-name" class="form-label">Tên danh mục <span class="text-red-600">*</span></label>
                                <input id="form-name" type="text" class="form-control" placeholder="Nhập tên danh mục" name="name" autofocus autocomplete="name" required>
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">Slug</label>
                                <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="slug-danh-muc" name="slug" autocomplete="slug">
                            </div>

                            <div class="mt-3">
                                <label for="form-slug" class="form-label">Danh mục cha</label>
                                <div class="mt-2">
                                    <select data-placeholder="Chọn danh mục cha tương ứng" class="tom-select w-full" name="parent_id">
                                        <option value="0" selected>Không có danh mục cha</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="form-slug" class="form-label">Icon</label>
                                @include('admin.common.single-upload-button', ['input_name' => 'icon'])
                            </div>

                            <div class="mt-3">
                                <label for="form-description" class="form-label">Mô tả</label>
                                <textarea id="form-description" rows="4" class="form-control" name="description" placeholder="Nhập mô tả danh mục" maxlength="500"></textarea>
                            </div>

                            <div class="text-right mt-5">
                                <a href="{{route('admin.category.index')}}" ><button type="button" class="btn btn-outline-secondary w-24 mr-1">Hủy</button></a>
                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
