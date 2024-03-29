<?php

use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');


Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'store'])->name('admin.login.post');

    Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store'])->name('admin.register.post');

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {
    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'destroy'])->name('admin.logout');
    Route::view('/dashboard','admin.dashboard');
    Route::get('/',[App\Http\Controllers\Admin\AdminHomeController::class, 'homepage'])->name('admin.homepage');
    Route::get('/file-manager',[App\Http\Controllers\Admin\AdminHomeController::class, 'fileManager'])->name('admin.file-manager');

    // Product manager
    Route::group(['prefix'=>'product'],function() {
        Route::get('/', [AdminProductController::class,'index'])->name('admin.product.index');
        Route::get('/add', [AdminProductController::class,'add'])->name('admin.product.add');
        Route::post('/add', [AdminProductController::class,'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [AdminProductController::class,'edit'])->name('admin.product.edit');
        Route::post('/edit/{id}', [AdminProductController::class,'update'])->name('admin.product.update');
        Route::get('/delete/{id}', [AdminProductController::class,'destroy'])->name('admin.product.delete');
    });
});





Auth::routes();
Route::get('/{slug}',[ProductController::class, 'detail'])->name('product.detail');
