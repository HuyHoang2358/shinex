<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function homepage(){
        return view('admin.content.homepage');
    }
    public function fileManager(){
        return view('admin.content.fileManager');
    }
}
