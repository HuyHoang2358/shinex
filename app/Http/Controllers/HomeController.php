<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{

    // Trang chủ
    public function index(): View|Application|Factory
    {
        return view('homepage', ['page'=>'homepage']);
    }

    // Trang liên hệ
    public function contact(): View|Application|Factory
    {
        return view('front.content.contact',['page'=>'contact']);
    }

    // Trang giới thiệu
    public function about(): View|Application|Factory
    {
        return view('front.content.about', ["page"=>'about']);
    }

}
