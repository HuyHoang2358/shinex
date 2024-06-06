<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(): Factory|View|Application
    {
        $products = Product::orderBy('updated_at', 'desc')->paginate(3);
        $num_of_records = Product::count();

        return view('admin.content.product.index', [
            'page' => "product.index",
            'products' => $products,
            'num_of_records' => $num_of_records
        ]);

    }

    public function store(Request $request)
    {
        // post them mới san pham
        // redirect ve trang danh sach san pham
        $product = new Product();
        $product->name = $request->input('product-name');
        $product->images = $request->input('file-path');
        $product->slug = "default";
        $product->description = $request->input('product-description');
        $product->content = $request->input('product-content');

        $product->save();

        session()->flash('success', 'Thêm sản phẩm thành công!');

        return redirect()->back();

    }

    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        // post update san pham
        // redirect ve trang danh sach san pham
        $product = Product::find($id);

        $product->name = $request->input('edit-name');
        $product->images = $request->input('file-path');
        $product->description = $request->input('edit-description');
        $product->content = $request->input('edit-content');

        $product->save();

        session()->flash('success', 'Cập nhật sản phẩm thành công!');

        return redirect()->back();

    }

    public function destroy($id)
    {
        // xoa san pham
        // redirect ve trang danh sach san pham

        $product = Product::find($id);
        $product->delete();

        session()->flash('success', 'Xóa sản phẩm thành công!');

        return redirect()->back();

    }
}
