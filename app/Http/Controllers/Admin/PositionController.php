<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PositionController extends Controller
{
    //lay position thong qua model
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $positions = Position::all();

        return view('admin.content.position.index', [
            'page' => 'position',
            'positions' => $positions
        ]);
    }

    // tra ve view them moi position
    public function add(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // Truyền tạm cái biến page này ra
        // Ham view ('đường dẫn từ folder resources/views/ đến file view cần trả về' , [ danh sách biến sẽ truyền ra view]
        return view('admin.content.position.add',['page' => 'position']);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();

        // Tạo mới đối tượng
        $item = new Position();
        $item['name'] = $input['name'];
        // slug đưc tạo ra từ name sau khi bỏ ký tự đặc biệt
        $item['slug'] = Str::slug($input['name']);
        // Lưu dữ liệu vào bảng positions
        $item->save();

        // Chuyển hướng về trang danh sách vị trí
        return redirect()->route('admin.position.index');
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $position = Position::find($id);
        return view('admin.content.position.edit', [
            'page' => 'position',
            'position' => $position,
        ]);
    }
    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();

        // Tạo mới đối tượng
        $item = Position::find($id);
        $item['name'] = $input['name'];
        // slug đưc tạo ra từ name sau khi bỏ ký tự đặc biệt
        $item['slug'] = Str::slug($input['name']);
        // Lưu dữ liệu vào bảng positions
        $item->save();

        // Chuyển hướng về trang danh sách vị trí
        return redirect()->route('admin.position.index');
    }


    public function delete($id)
    {
        $position = Position::find($id);

        $position->delete();

        return redirect()->route('admin.position.index');
    }

}

