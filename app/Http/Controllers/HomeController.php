<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{

    public function index(): View|Application|Factory
    {
        return view('homepage', ["page"=>'homepage']);
    }

    public function gallery(): View|Application|Factory
    {
        return view('front.content.gallery', ["page"=>'gallery']);
    }

    public function contact(): View|Application|Factory
    {
        return view('front.content.contact', ["page"=>'contact']);
    }
    public function about(): View|Application|Factory
    {
        return view('front.content.about', ["page"=>'about']);
    }



}
