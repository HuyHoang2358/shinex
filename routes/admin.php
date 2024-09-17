<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\RegisterController;



// Route cho quản lý file laravel-filemanager
/*Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});*/
Route::namespace('admin')->group(function () {

    // Authentication routes
    // url: shinex.th/admin/login  -> tên route admin.login
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store'])->name('admin.login.post');
    Route::get('register', [RegisterController::class, 'create'])->name('admin.register.create');
    Route::post('register', [RegisterController::class, 'store'])->name('admin.register.store');

    // Admin routes that require authentication
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [HomeController::class, 'homepage'])->name('admin.homepage');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::view('/dashboard', 'admin.dashboard');

        // Quản lý danh mục
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
            Route::get('/add', [CategoryController::class, 'add'])->name('admin.category.add');
            Route::post('/add', [CategoryController::class, 'store'])->name('admin.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
            Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
            Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
        });


//        test CRUD
        // url shinex.th/admin/position/*
        Route::group(['prefix' => 'position'], function () {
            // url shinex.th/admin/position -> route name: admin.position.index -> trang danh sách các vị trí
            Route::get('/', [PositionController::class, 'index'])->name('admin.position.index');

            // url shinex.th/admin/position/add -> route name: admin.position.add -> trang trả về view để thêm mới vị trí
            Route::get('/add', [PositionController::class, 'add'])->name('admin.position.add');

            // url shinex.th/admin/position/add -> route name: admin.position.store -> gọi đên hàm dể lưu 1 vị trí vào CSDL
            Route::post('/add', [PositionController::class, 'store'])->name('admin.position.store');

            // url shinex.th/admin/position/edit/id -> route name: admin.position.edit -> trả về trang view đ người dùng chinh sửa thông tin
            Route::get('/edit/{id}', [PositionController::class, 'edit'])->name('admin.position.edit');

            // url shinex.th/admin/position/update/id -> route name: admin.position.update -> tiếp nhận dữ liệu từ view tên để sửa dữ liệu trong CSDL
            Route::post('/edit/{id}', [PositionController::class, 'update'])->name('admin.position.update');

            // url shinex.th/admin/position/delete/id -> route name: admin.position.delete -> xoa du lieu khoi CSDL
            Route::get('/delete/{id}', [PositionController::class, 'delete'])->name('admin.position.delete');
        });


        // Product manager
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
            Route::post('/add', [ProductController::class, 'store'])->name('admin.product.store');
            Route::post('/edit/{id}', [ProductController::class, 'update'])->name('admin.product.update');
            Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');
        });

        // Quản lý bài viết
        Route::group(['prefix' => 'post'], function () {
            Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
            Route::get('/add', [PostController::class, 'add'])->name('admin.post.add');
            Route::post('/add', [PostController::class, 'store'])->name('admin.post.store');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
            Route::post('/edit/{id}', [PostController::class, 'update'])->name('admin.post.update');
            Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('admin.post.delete');
        });

        // Quản lý ảnh, media
        Route::group(['prefix' => 'media'], function () {
            Route::get('/', [MediaController::class, 'index'])->name('admin.media.index');
        });


        Route::group(['prefix' => '/laravel-filemanager', 'middleware' => ['auth:admin']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });


        // Quản lý liên hệ
        Route::group(['prefix' => 'order'], function () {
            Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
        });
        // Cấu hình
        Route::group(['prefix' => 'setting'], function () {

            // Quản lý banner
            Route::group(['prefix' => 'banner'], function () {
                Route::get('/', [BannerController::class, 'index'])->name('admin.setting.banner.index');
                Route::get('/add', [BannerController::class, 'add'])->name('admin.setting.banner.add');
                Route::post('/add', [BannerController::class, 'store'])->name('admin.setting.banner.store');
                Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('admin.setting.banner.edit');
                Route::post('/edit/{id}', [BannerController::class, 'update'])->name('admin.setting.banner.update');
                Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name('admin.setting.banner.delete');
            });

            // Config System
            Route::group(['prefix' => 'config'], function () {
                Route::get('/edit', [SettingController::class, 'edit'])->name('admin.setting.config.edit');
                Route::post('/edit', [SettingController::class, 'update'])->name('admin.setting.config.update');
            });
        });
    });
});






