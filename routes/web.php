<?php

use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Dưới đây là các route dùng cho trang giao diện người dùng
|
*/
// Route dành cho login, logout, register của trang giao diên người dùng
Auth::routes();

// Route trang chủ http://shinex.th/
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Route trang giới thiệu http://shinex.th/gioi-thieu
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');


// Route trang liên hệ http://shinex.th/lien-he
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');


// Xem thông tin bài viết
Route::get('/tin-tuc',[PostController::class, 'index'])->name('post.index');
Route::get('/bai-viet/{slug}',[PostController::class, 'detail'])->name('post.detail');


// Route trang danh sách sản phẩm http://shinex.th/san-pham
Route::get('/san-pham', [ProductController::class, 'index'])->name('product.list');

// Xem thông tin chi tiết từng sản phẩm // shinex.th/{slug}
// slug là biến truyền vào trong product để lấy thông tin sản phẩm ra
Route::get('/{slug}',[ProductController::class, 'detail'])->name('product.detail');
