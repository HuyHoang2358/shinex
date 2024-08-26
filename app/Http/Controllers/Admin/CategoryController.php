<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all(); // lấy toàn bộ danh mục từ CSDL thông qua model Category
        return view('admin.content.category.index', [
            'page' => 'category' // Truyền biến $page ra view
        ]);
    }


    public function add(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::where('parent_id', 0)->get(); // lấy toàn bộ danh mục có parent_id = 0 từ
        return view('admin.content.category.add', [
            'page' => 'category',  // Truyền biến $page ra view
            'categories' => $categories // truyền biến $categories ra view
        ]);
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu từ form gửi lên qua biến $request và gán vào biến $input
        $input = $request->all();

        // Xem cấu trúc của biến $input ra màn hình
        /* echo "<pre>";
        print_r($input);
        echo "</pre>";
        exit;*/

        // Tạo mới 1 đối tượng Category từ model Category để lưu dữ liệu vào bảng categories
        $item = new Category();

        // Gán dữ liệu từ form vào các trường tương ứng trong bảng categories
        $item["name"] = $input["name"];
        $item["slug"] = Str::slug($input["name"]);
        $item["icon"] = $input["icon"] ?? null;
        $item["parent_id"] = $input["parent_id"];
        $item["description"] = $input["description"];
        // Lưu dữ liệu vào bảng categories
        $item->save();

        // Chuyển hướng về trang danh sách danh mục
        return redirect()->route('admin.category.index');
    }


}
