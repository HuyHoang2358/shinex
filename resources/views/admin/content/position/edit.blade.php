@extends('admin.layouts.app')
@section('title')
    Sửa vị trí
@endsection

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Sửa Vị Trí
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div id="input" class="p-5">
                    <form method="POST" action="{{route('admin.position.update', $position->id)}}">
                        @csrf
                        <div>
                            <label for="form-name" class="form-label">Tên vị trí <span class="text-red-600">*</span></label>
                            <input id="form-name" type="text" class="form-control" placeholder="Nhập tên vị trí" value="{{$position->name}}" name="name" autofocus autocomplete="name" required>
                        </div>

                        <div class="mt-3">
                            <label for="form-slug" class="form-label">Slug</label>
                            <input id="form-slug" type="text" class="form-control form-control-rounded" placeholder="slug-vị-trí" value="{{$position->slug}}" name="slug" autocomplete="slug">
                        </div>

                        <div class="text-right mt-5">
                            <a href="{{route('admin.position.index')}}" ><button type="button" class="btn btn-outline-secondary w-24 mr-1">Hủy</button></a>
                            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
