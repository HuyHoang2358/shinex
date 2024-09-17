<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $banners = Banner::all();
        return view('admin.content.setting.banner.index', [
            'page' => 'setting',
            'banners' => $banners,
        ]);
    }

    public function add(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // laays cacs vi tri cos trong CSDL de nguoi dung chon
        $positions = Position::all();
        return view ('admin.content.setting.banner.add', ['page'=> 'banner', 'positions' => $positions]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
       /* echo "<pre>";
        print_r($input);
        echo "</pre>";
        exit;*/


        $item = new Banner();
        $item['name'] = $input['name'];
        $item['slug'] = Str::slug($input['slug']);
        $item['image'] = $input['image'];
        $item['url'] = $input['url'];
        $item['order'] = $input['order'];
        $item['position_id'] = $input['position_id'];
        $item['status'] = $input['status'];

        $item->save();

        return redirect()->route('admin.setting.banner.index');
    }
}
