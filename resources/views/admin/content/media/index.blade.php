@extends('admin.layouts.app')
@section('title')
    {{ __('Trang quản lý media') }}
@endsection

@section('content')
    <div class="mt-20 bg-red-200 w-full">
        <iframe src="{{url('/admin/laravel-filemanager')}}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
@endsection
